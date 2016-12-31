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
    		->contain(['Competitions'=>['Disciplines','Categories'], 'Licencies','Users']);
    	}else {
    		$inscriptionCompetitions= $this->InscriptionCompetitions->find('all')
    		->contain(['Competitions'=>['Disciplines','Categories'], 'Licencies','Users'])->where(['user_id'=>$user->getId()]);
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
        
        //Si admin on recupere toutes les competitions sinon juste celles de la region du user
        if($this->Securite->isAdmin()) $competitions = $this->InscriptionCompetitions->Competitions->find('list', ['limit' => 200])->where(['archive'=>0]);
        else $competitions = $this->InscriptionCompetitions->Competitions->find('list', ['limit' => 200])->where(['archive'=>0,'region_id in '=> $region]);
        
        
        $this->set(compact('inscriptionCompetition', 'competitions'));
        $this->set('_serialize', ['inscriptionCompetition']);
    }
    
    public function ajoutInscription($competition,$licencie) {
    	

    		$user = $this->request->session()->read("UserConnected");
    		
    		$inscriptionCompetition = $this->InscriptionCompetitions->newEntity();
    		$inscriptionCompetition->competition_id=$competition;
    		$inscriptionCompetition->licencie_id=$licencie;
    		$inscriptionCompetition->user_id=$user->getId();
    		
    		//debug($this->request->data);die();
    			if ($this->InscriptionCompetitions->save($inscriptionCompetition)) {
    			$this->Flash->success(__('L\'inscription à la compétition a bien été enregistrée.'));
    			$this->Utilitaire->logInBdd("Inscription de ".$inscriptionCompetition->licencie_id." pour la compétition ".$inscriptionCompetition->competition_id);
    	
    			return $this->redirect(['action' => 'index']);
    		} else {
    			$this->Flash->error(__('Erreur lors de l\'inscription à la compétition.'));
    		}
    	
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
        $inscriptionCompetition = $this->InscriptionCompetitions->get($id, [
            'contain' => ['Competitions', 'Licencies']
        ]);
        $message="Supression de l'inscription de ".$inscriptionCompetition->licency->display_name." de la compétition ".$inscriptionCompetition->competition->name;
        if ($this->InscriptionCompetitions->delete($inscriptionCompetition)) {
        	$this->Utilitaire->logInBdd($message);
            $this->Flash->success(__('L\'inscription à la compétition a été supprimée.'));
        } else {
            $this->Flash->error(__('Erreur lors de la suppression de l\'inscription à la compétition.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    

    public function search() {
    	if ($this->request->is(['ajax'])) {
    		//competition
    		$competition_id = $this->request->data['competition'];
    		$this->loadModel('Competitions');
    		$competition=$this->Competitions->find()->where(['id'=>$competition_id])->first();
    		
    		//Recuperation du club du user connecte
    		$user = $this->request->session()->read("UserConnected");
    		
    		$libelle = $this->request->data['libelle'];
    		
    		$this->loadModel('Licencies');
    		if($user->getProfil()=='admin') {
    			
    			$lic = $this->Licencies->find('all')
    			->contain(['Clubs','Disciplines'])
    			->limit(20)
    			->where(['discipline_id'=>$competition->discipline_id,'prenom like '=>'%'.$libelle.'%'])
    			->orWhere(['nom like '=>'%'.$libelle.'%']);
    		} else {
    			$lic = $this->Licencies->find('all')
    			->contain(['Clubs','Disciplines'])
    			->limit(20)
    			->where(["club_id"=>$club,'discipline_id'=>$competition->discipline_id,'prenom like '=>'%'.$libelle.'%'])
    			->orWhere(['nom like '=>'%'.$libelle.'%']);
    			
    		}
    		$this->set('competition_id',$competition_id);
    		$this->set('licencies', $lic);
    
    		//% or name like %% or description like %%
    	}
    }
}
