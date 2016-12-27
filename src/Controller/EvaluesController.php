<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Evalues Controller
 *
 * @property \App\Model\Table\EvaluesTable $Evalues
 */
class EvaluesController extends AppController
{
	public function index()
	{
		if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
		
	}
   

	public function search() {
		if ($this->request->is(['ajax'])) {
			$libelle = $this->request->data['libelle'];
	
			$this->loadModel('Licencies');
			$lic = $this->Licencies->find('all')
			->contain(['Clubs'])
			->limit(20)
			->where(['prenom like '=>'%'.$libelle.'%'])
			->orWhere(['nom like '=>'%'.$libelle.'%']);
	
			$this->set('licencies', $lic);
	
			//% or name like %% or description like %%
		}
	}
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($idLicencie)
    {
    	//Passages selectionne
    	$passage = $this->Passages->find('all')->where(['selected'=>1])->first();
    	 
        $evalue = $this->Evalues->newEntity();
        if ($this->request->is('post')) {
        	
            $evalue = $this->Evalues->patchEntity($evalue, $this->request->data);
            if ($this->Evalues->save($evalue)) {
                $this->Flash->success(__('The evalue has been saved.'));

                
            } else {
                $this->Flash->error(__('The evalue could not be saved. Please, try again.'));
            }
            return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
        }
        $this->loadModel('Licencies');
        $licencie = $this->Licencies->find()->where(['id'=>$idLicencie])->first();
        $grades = $this->Evalues->Grades->find('list');
               
        $this->set(compact('evalue', 'passage', 'licencie','grades'));
        $this->set('_serialize', ['evalue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evalue id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evalue = $this->Evalues->get($id);
        if ($this->Evalues->delete($evalue)) {
            $this->Flash->success(__('The evalue has been deleted.'));
        } else {
            $this->Flash->error(__('The evalue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function note() {
    	if ($this->request->is('post')) {
    		$data = $this->request->data;
    		
    		$passageId = $data['passage_id'];
    		
    		$notes = TableRegistry::get('Notes');
    		$noteUpdate = $notes->query();  		
    		
    		foreach ($data as $key => $note) {
    			//debug("key : ".$key."->".$note);
    			if( $key != 'passage_id') {
    				$noteExplode = explode("#",$key);
    				
    				if($noteExplode[0] == "T"){ //Note technique
	    				$noteUpdate->update()
	    				->set(['resultat_technique' => $note])
	    				->where(['passage_id' => $passageId,
	    						 'juge_id'=>$noteExplode[2],
	    						 'licencie_id' => $noteExplode[1]])->execute();
    				} else if($noteExplode[0] == "K"){ //Note Kata
	    				$noteUpdate->update()
	    				->set(['resultat_kata' => $note])
	    				->where(['passage_id' => $passageId,
	    						 'juge_id'=>$noteExplode[2],
	    						 'licencie_id' => $noteExplode[1]])->execute();
    				}
    			}
    			$noteUpdate = $notes->query();
    		}
    		
    		return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
    	}
    }
}
