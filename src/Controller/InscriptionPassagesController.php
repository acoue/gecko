<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InscriptionPassages Controller
 *
 * @property \App\Model\Table\InscriptionPassagesTable $InscriptionPassages
 */
class InscriptionPassagesController extends AppController
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
    		$inscriptionPassages= $this->InscriptionPassages->find('all')
    		->contain(['Grades','Passages'=>['Disciplines'], 'Licencies'=>['Grades','Clubs'],'Users']);
    	}else {
    		$inscriptionPassages= $this->InscriptionPassages->find('all')
    		->contain(['Grades','Passages'=>['Disciplines'], 'Licencies'=>['Grades','Clubs'],'Users'])->where(['user_id'=>$user->getId()]);
    	}
    	
        $this->set(compact('inscriptionPassages'));
        $this->set('_serialize', ['inscriptionPassages']);
    }


    public function validate($id){
    	 
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
    	//Recuperation de l'inscription
    	$inscriptionPassage = $this->InscriptionPassages->get($id, [
    			'contain' => ['Passages', 'Licencies']
    	]);
    	 
    	//Bascule vers la table repartition
    	$this->loadModel('Evalues');
    	$evalue = $this->Evalues->newEntity();
    	$evalue->id=null;
    	$evalue->passage_id=$inscriptionPassage->passage_id;
    	$evalue->licencie_id=$inscriptionPassage->licencie_id;
    	$evalue->grade_actuel_id=$inscriptionPassage->licency->grade_id;
    	$evalue->grade_presente_id=$inscriptionPassage->grade_presente_id;
    	
    	if ($this->Evalues->save($evalue)) {
    		$this->Flash->success(__('Inscription du licencié validée.'));
    		$this->Utilitaire->logInBdd("Validation de l'inscription du licencié : ".$inscriptionPassage->licency->display_name." pour le passage : ".$inscriptionPassage->passage->name);
    	} else {
    		$this->Flash->error(__('Erreur lors de la validation de l\'inscription au passage de grade.'));
    	}
    	 
    	//Suppression
    	$message = "Suppression de l'inscription du licencié : ".$inscriptionPassage->licency->display_name." pour le passage : ".$inscriptionPassage->passage->name;
    	if($this->InscriptionPassages->delete($inscriptionPassage)) {
    		$this->Flash->success(__('Suppression de l\'inscription au passage effectuée.'));
    		$this->Utilitaire->logInBdd($message);
    	} else {
    		$this->Flash->error(__('Erreur lors de la suppression de l\'inscription au passage.'));
    	}
    	return $this->redirect(['action' => 'index']);
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
    	
    	$this->loadModel('Clubs');
    	$query = $this->Clubs->find('all')->where(['name'=>$club])->first();
    	$region[0] = $query->region_id;
    	$region[1] = -1;
    	
        //Si admin on recupere tous les passages sinon juste ceux de la region du user
        if($this->Securite->isAdmin()) $passages = $this->InscriptionPassages->Passages->find('list')->where(['archive'=>0]);
        else $passages = $this->InscriptionPassages->Passages->find('list')->where(['archive'=>0,'region_id in '=> $region]);
        
        $grades=$this->InscriptionPassages->Grades->find('list');
        $this->set(compact('inscriptionPassage', 'passages','grades'));
        $this->set('_serialize', ['inscriptionPassage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inscription Passage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inscriptionPassage = $this->InscriptionPassages->get($id, [
            'contain' => ['Passages', 'Licencies']
        ]);
        $message="Supression de l'inscription de ".$inscriptionPassage->licency->display_name." du passage de grade ".$inscriptionPassage->passage->name;
         if ($this->InscriptionPassages->delete($inscriptionPassage)) {
        	$this->Utilitaire->logInBdd($message);
            $this->Flash->success(__('Suppression de l\'inscription au passage de grade.'));
        } else {
            $this->Flash->error(__('Erreur lors de la suppression de l\'inscription au passage de grade.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    

    public function search() {
    	if ($this->request->is(['ajax'])) {
    		//competition
    		$passage_id = $this->request->data['passage'];
    		$this->loadModel('Passages');
    		$passage=$this->Passages->find()->where(['id'=>$passage_id])->first();
    
    		//Recuperation du club du user connecte
    		$user = $this->request->session()->read("UserConnected");

    		$grade = $this->request->data['grade'];
    		$libelle = $this->request->data['libelle'];
    
    		$this->loadModel('Licencies');
    		if($user->getProfil()=='admin') {
    			 
    			$lic = $this->Licencies->find('all')
    			->contain(['Clubs','Disciplines','Grades'])
    			->limit(20)
    			->where(['discipline_id'=>$passage->discipline_id,'prenom like '=>'%'.$libelle.'%'])
    			->orWhere(['nom like '=>'%'.$libelle.'%']);
    		} else {
    			$lic = $this->Licencies->find('all')
    			->contain(['Clubs','Disciplines','Grades'])
    			->limit(20)
    			->where(["club_id"=>$club,'discipline_id'=>$passage->discipline_id,'prenom like '=>'%'.$libelle.'%'])
    			->orWhere(['nom like '=>'%'.$libelle.'%']);
    			 
    		}
    		$this->set('passage_id',$passage_id);
    		$this->set('licencies', $lic);
    		$this->set('grade', $grade);
    
    		//% or name like %% or description like %%
    	}
    }
    
    public function ajoutInscription($passage,$licencie,$grade) {
    	 
    
    	$user = $this->request->session()->read("UserConnected");
    
    	$inscriptionPassage = $this->InscriptionPassages->newEntity();
    	$inscriptionPassage->passage_id=$passage;
    	$inscriptionPassage->licencie_id=$licencie;
    	$inscriptionPassage->user_id=$user->getId();
    	$inscriptionPassage->grade_presente_id=$grade;
    
    	//debug($this->request->data);die();
    	if ($this->InscriptionPassages->save($inscriptionPassage)) {
    		$this->Flash->success(__('L\'inscription au passage a bien été enregistrée.'));
    		$this->Utilitaire->logInBdd("Inscription de ".$inscriptionPassage->licencie_id." pour le passage ".$inscriptionPassage->passage_id);
    		 
    		return $this->redirect(['action' => 'index']);
    	} else {
    		$this->Flash->error(__('Erreur lors de l\'inscription au passage.'));
    	}
    	 
    }
}
