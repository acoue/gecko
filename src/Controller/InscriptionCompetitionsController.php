<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InscriptionCompetitions Controller
 *
 * @property \App\Model\Table\InscriptionCompetitionsTable $InscriptionCompetitions
 */
class InscriptionCompetitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	//Recuperation du club du user connecte
    	$user = $this->request->session()->read("UserConnected");
    	
    	if($user->getProfil() == 'admin') {
    		$inscriptionCompetitions= $this->InscriptionCompetitions->find('all')
    		->contain(['Competitions', 'Licencies','Users']);
    	}else {
    		$inscriptionCompetitions= $this->InscriptionCompetitions->find('all')
    		->contain(['Competitions', 'Licencies','Users'])->where(['user_id'=>$user->getId()]);
    	}
    	
    	$this->set(compact('inscriptionCompetitions'));
        $this->set('_serialize', ['inscriptionCompetitions']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	//Recuperation du club du user connecte
    	$user = $this->request->session()->read("UserConnected");
    	$club=$user->getClub();
    	//Region du user connecté
    	$this->loadModel('Clubs');
    	$query = $this->Clubs->find('all')->where(['name'=>$club])->first();
    	$region[0] = $query->region_id;
    	$region[1] = -1;
    	
        $inscriptionCompetition = $this->InscriptionCompetitions->newEntity();
        if ($this->request->is('post')) {
            $inscriptionCompetition = $this->InscriptionCompetitions->patchEntity($inscriptionCompetition, $this->request->data);
            if ($this->InscriptionCompetitions->save($inscriptionCompetition)) {
                $this->Flash->success(__('L\'inscription à la compétition a bien été enregistrée.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur lors de l\'inscription à la compétition.'));
            }
        }
        //Si admin on recupere toutes les competitions sinon juste celles de la region du user
        if($this->Securite->isAdmin()) $competitions = $this->InscriptionCompetitions->Competitions->find('list', ['limit' => 200])->where(['archive'=>0]);
        else $competitions = $this->InscriptionCompetitions->Competitions->find('list', ['limit' => 200])->where(['archive'=>0,'region_id in '=> $region]);
        
        
        if($user->getProfil()=='admin') $licencies = $this->InscriptionCompetitions->Licencies->find('list');
        else $licencies = $this->InscriptionCompetitions->Licencies->find('list')->where(["club_id"=>$club]);

        $this->set(compact('inscriptionCompetition', 'competitions', 'licencies', 'user'));
        $this->set('_serialize', ['inscriptionCompetition']);
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Inscription Competition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inscriptionCompetition = $this->InscriptionCompetitions->get($id);
        if ($this->InscriptionCompetitions->delete($inscriptionCompetition)) {
            $this->Flash->success(__('The inscription competition has been deleted.'));
        } else {
            $this->Flash->error(__('The inscription competition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
