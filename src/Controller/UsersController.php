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
		//Destruction de la session
		$session = $this->request->session();
		$session->destroy();
			
		if ($this->request->is('post')) {
			
			//recuperation du formulaire de saisie
			$dataForm = $this->request->data;
					
			
			$user = $this->Auth->identify();
			if ($user) {	
				//Mise a jour de la date de last login 
				$modif_user = $this->Users->get($user['id'], ['contain' => ['Profils']]);
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
				
				$session->write('UserConnected',$userConnected);
				
				return $this->redirect($this->Auth->redirectUrl());
								
			} else $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect, essayez à nouveau."));
		}
		
		
	}
	
	public function logout()
	{	
		$session = $this->request->session();
		$session->destroy();
		$this->Flash->success('Vous êtes maintenant déconnecté.');
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
 				'contain' => ['Profils']
 				]);
 		$this->set('user', $user);
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
 		$user = $this->Users->get($id);
 		if ($this->request->is(['patch', 'post', 'put'])) {
 			$user = $this->Users->patchEntity($user, $this->request->data);
 			if ($this->Users->save($user)) {
 				$this->Flash->success('L\'utilisateur a bien été sauvegardé.');
 				return $this->redirect(['action' => 'index']);
 			} else {
 				$this->Flash->error('Erreur lors de la sauvegarde de l\'utilisateur.');
 			}
 		}
 		$this->set(compact('user'));
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
 				return $this->redirect(['action' => 'index']);
 			}
 			$this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
 		}
 		$this->set('user', $user);
 	}

 	public function compte()
 	{
 		$uc=$this->request->session()->read("UserConnected");
 		
 		
 		$user = $this->Users->get($uc->getId(), ['contain' => ['Profils']] 	);
 		if ($this->request->is(['patch', 'post', 'put'])) {
 			$user = $this->Users->patchEntity($user, $this->request->data);
 			if ($this->Users->save($user)) {
 				$this->Flash->success('L\'utilisateur a bien été sauvegardé.');
				return $this->redirect(['action' => 'compte']);
 			} else {
 				$this->Flash->error('Erreur lors de la sauvegarde de l\'utilisateur.');
 			}
 		}
 		$this->set(compact('user'));
 		$this->set('_serialize', ['user']);
 		
 	}
 	
	public function changePwd() {
		$uc=$this->request->session()->read("UserConnected");
			
		$user = $this->Users->get($uc->getId());
		
		if(!$user) {
			$this->redirect('/');
			die();
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
							return $this->redirect(['action' => 'compte/'.$id]);
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
	
	public function password() {
		
		//Menu et sous-menu
	    $session = $this->request->session();
	    $session->write('Progress.Menu','0');
	    $session->write('Progress.SousMenu','0');
	    
	    if(!empty($this->request->query['token'])){
	    	$token = $this->request->query['token'];
	    	$tokenTab = explode('-',$token);
	    	$user = $this->Users->find('all')->where(['id'=>$tokenTab[0],'token'=>$tokenTab[1], 'active'=>'1'])->first();
	    	
	    	//debug($user);die();
	    	
	    	//debug($user); die();
	    	if($user){
				$usersTable = TableRegistry::get('Users');
				$modif_user = $usersTable->get($user->id); 
				//Mise à jour du token pour eviter une 2eme validation
     			$password = $this->Securite->getPassword();
    			$token = $this->Securite->getToken();
				$modif_user->token = $token;
				$modif_user->password = $password;
				$usersTable->save($modif_user);				
				//Affichage du mot de passe
				$this->Flash->success(__("Votre mot de passe a bien été réinitialisé, voici votre nouveau mot de passe : $password"));
			} else {
				$this->Flash->error(__("Ce lien ne semble pas valide."));
			}
	    }
	    
	    if ($this->request->is(['post'])) {
	    	$d = $this->request->data;    	
	    	$user = $this->Users->find('all')->where(['username'=> $d['identifiant']])->first();
	    	if(empty($user)) {
	    		$this->Flash->error('Aucun utilisateur ne correspond à cet identifiant.');	    	
	    	} else {
	    		//Recuperation des parametres
	    		$this->loadModel('Parametres');
	    		$from = $this->Parametres->find('all')->where(['name' => 'EmailContact'])->first();
	    		
	    		//Enregistrement de l'ID en session en cas de retour
	    		$link = ['controller'=>'users', 'action' => 'password', 'token'=> $user->id."-".$user->token, '_full' => true];
	    			    		
	    		$email = new Email('default');
	    		$email->template('mdp')
	    		->emailFormat('html')
	    		->to(trim(rtrim(strip_tags($d['email']))))
	    		->from(trim(rtrim(strip_tags($from->valeur))))
	    		->subject('[Pacte] Regénération de votre mot de passe')
	    		->viewVars(['link'=>$link])
	    		->send();

	    		$this->Flash->success('Un message vient de vous être envoyé pour regénérer votre mot de passe.');
	    	}
	    }
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
		if ($this->Users->delete($user)) {
			$this->Flash->success('Suppression l\'utilisateur.');
		} else {
			$this->Flash->error('Erreur dans la suppression de l\'utilisateur.');
		}
		return $this->redirect(['action' => 'index']);
	}

}