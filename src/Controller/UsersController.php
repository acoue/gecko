<?php
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
use Cake\Network\Request;
use \Lib\UserConnected;
use Cake\Event\Event;

class UsersController extends AppController
{
	//Actions publiques

	
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Securite');
	}
	
	
	public function login()
	{			
		//Mise à jour du mot de passe #Utiliser quand pb : ici user n°1#
		//$user = $this->Users->get(1);
		//$user->password = "a";
		//$this->Users->save($user);
		
		//Destruction de la session
		$session = $this->request->session();
		$session->destroy();
			
		if ($this->request->is('post')) {
			
			//recuperation du formulaire de saisie
			$dataForm = $this->request->data;
					
			
			$user = $this->Auth->identify();
			if ($user) {	
				//Mise a jour de la date de last login 
				$modif_user = $this->Users->get($user['id'], ['contain' => ['Profils','Clubs']]);
				//debug($modif_user); die();
				
				$modif_user->lastlogin = date('Y-m-d H:i:s');
				$this->Users->save($modif_user);	
				$this->Auth->setUser($user);
				
				//On construit l'objet utilisateur connecte et on la place en session
				$session = $this->request->session();
				$userConnected = new UserConnected();
				$userConnected->setId($modif_user->id);
				$userConnected->setNom($modif_user->nom);
				$userConnected->setPrenom($modif_user->prenom);
				$userConnected->setLastlogin($modif_user->lastlogin);
				$userConnected->setLogin($dataForm['username']);
				$userConnected->setProfil($modif_user->profil->name);
				$userConnected->setClub($modif_user->club->name);
				
				$session->write('UserConnected',$userConnected);
				$session->write('Module',"-1");
            	$this->Utilitaire->logInBdd("Connexion");
				return $this->redirect($this->Auth->redirectUrl());
								
			} else $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect, essayez à nouveau."));
		}
		
		
	}
	
	public function logout()
	{	
		$session = $this->request->session();
		$session->destroy();
		$this->Flash->success('Vous êtes maintenant déconnecté.');
        $this->Utilitaire->logInBdd("Deconnexion");
		return $this->redirect($this->Auth->logout());
	}
	
 	public function index()
 	{
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
 	}

 	public function view($id)
 	{
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
 		$user = $this->Users->get($id, [
 				'contain' => ['Profils', 'Clubs']
 				]);
 		$this->set(compact('user' ));
 		$this->set('_serialize', ['user']);
 	}

 	/**
 	 * Edit method
 	 *
 	 * @param string|null $id User id.
 	 * @return void Redirects on successful edit, renders view otherwise.
 	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
 	 */
 	public function edit($id = null)
 	{
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
 		$user = $this->Users->get($id, [
 				'contain' => ['Profils','Clubs']
 				]);
 		if ($this->request->is(['patch', 'post', 'put'])) {
 			$user = $this->Users->patchEntity($user, $this->request->data);
 			if ($this->Users->save($user)) {
 				$this->Flash->success('L\'utilisateur a bien été sauvegardé.');

 				$this->Utilitaire->logInBdd("Modification de l'utilisateur : ".$user->id." > ".$user->prenom." ".$user->nom);
 				return $this->redirect(['action' => 'index']);
 			} else {
 				$this->Flash->error('Erreur lors de la sauvegarde de l\'utilisateur.');
 			}
 		}
 		$profils = $this->Users->Profils->find('list', ['limit' => 200]);
 		$clubs = $this->Users->Clubs->find('list');
 		$this->set(compact('user','profils','clubs'));
 		$this->set('_serialize', ['user']);
 	}
 	
 	public function add()
 	{
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
 		$user = $this->Users->newEntity();
 		if ($this->request->is('post')) {
 			//debug($this->request->data);
 			//die();
 			
 			$user = $this->Users->patchEntity($user, $this->request->data);
 			if ($this->Users->save($user)) {
 				$this->Flash->success(__("L'utilisateur a été sauvegardé."));
 				$this->Utilitaire->logInBdd("Modification de l'utilisateur : ".$user->id." > ".$user->prenom." ".$user->nom);
 				return $this->redirect(['action' => 'index']);
 			}
 			$this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
 		}
 		$clubs = $this->Users->Clubs->find('list');
 		$profils = $this->Users->Profils->find('list', ['limit' => 200]);
 		$this->set(compact('user','profils','clubs' ));
 	}

 	public function compte()
 	{
 		$uc=$this->request->session()->read("UserConnected");
 		
 		
 		$user = $this->Users->get($uc->getId(), ['contain' => ['Profils','Clubs']] 	);
 		if ($this->request->is(['patch', 'post', 'put'])) {
 			$user = $this->Users->patchEntity($user, $this->request->data);
 			if ($this->Users->save($user)) {
 				$this->Flash->success('L\'utilisateur a bien été sauvegardé.');
				return $this->redirect(['action' => 'compte']);
 			} else {
 				$this->Flash->error('Erreur lors de la sauvegarde de l\'utilisateur.');
 			}
 		}
 		$clubs = $this->Users->Clubs->find('list');
 		$this->set(compact('user','clubs'));
 		$this->set('_serialize', ['user']);
 		
 	}
 	
	public function changePwd() {
		$uc=$this->request->session()->read("UserConnected");
			
		$user = $this->Users->get($uc->getId());
		//debug($user);die();
		if(!$user) {
			$this->redirect('/');
			//die();
		} else {
			$d = $this->request->data;
			//debug($d);die();
			$usersTable = TableRegistry::get('Users');
			$modif_user = $usersTable->get($user->id);
			if ($this->request->is(['post', 'put'])) {			
				if(!empty($d['pass1'])) {
					if($d['pass1'] == $d['pass2']) {
						$modif_user->password = $d['pass1'];
						if($usersTable->save($modif_user)){
							$this->Flash->success('Modification du mot de passe effectuée.');
							return $this->redirect(['action' => 'compte/'.$user->id]);
						} else {
							$this->Flash->error('Impossible de sauvegarder.');
						}
					} else {
						$this->Flash->error('Les mots de passe ne correspondent pas');
					}
				} else $this->Flash->error('Merci de renseigner un mot de passe');
			}		
		}
 		$this->set(compact('user'));
 		$this->set('_serialize', ['user']);
	}
	
	public function regeneratePassword($id = null) {
		if($id) $user = $this->Users->get($id);
		
			
		if ($this->request->is(['post'])) {
			$user = $this->Users->get($this->request->data['id']);
			$user->id = $this->request->data['id'];
			$user->password = $this->request->data['password'];
			if ($this->Users->save($user)) {
				$this->Flash->success('Le mot de passe dl\'utilisateur a bien été modifié.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('Erreur lors de la modification du mot de passe de l\'utilisateur.');
			}
		}

		$this->set(compact('user'));
		$this->set('_serialize', ['user']);
	
	}
	
	/**
	 * Delete method
	 *
	 * @param string|null $id User id.
	 * @return void Redirects to index.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function delete($id = null)
	{
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
		$this->request->allowMethod(['post', 'delete']);
		$user = $this->Users->get($id);
		$message = "Suppression de l'utilisateur : ".$user->id." > ".$user->prenom." ".$user->nom;
		if ($this->Users->delete($user)) {
			$this->Utilitaire->logInBdd($message);	
			$this->Flash->success('Suppression l\'utilisateur.');
		} else {
			$this->Flash->error('Erreur dans la suppression de l\'utilisateur.');
		}
		return $this->redirect(['action' => 'index']);
	}

}