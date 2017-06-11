<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use PhpParser\Node\Stmt\Switch_;

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
	
			$passage = $this->Passages->find('all')->where(['selected'=>1])->first();
			
			$libelle = $this->request->data['libelle'];
	
			$this->loadModel('Licencies');
			$lic = $this->Licencies->find('all')
			->contain(['Clubs'])
			->limit(20)
			->where(['discipline_id'=>$passage->discipline_id,'prenom like '=>'%'.$libelle.'%'])
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
                $this->Flash->success(__('L\évalué a été créé.'));
            	$this->Utilitaire->logInBdd("Ajout de l\'évalué : ".$evalue->id." : licencié ".$evalue->livencie_id." pour le passage ".$evalue->passage_id);
             
            } else {
                $this->Flash->error(__('Erreur dans la création de l\'évalué'));
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
        //$this->request->allowMethod(['post', 'delete']);
        $evalue = $this->Evalues->get($id);
        $message = "Suppression de l\'évalué : ".$evalue->id." : licencié ".$evalue->livencie_id." pour le passage ".$evalue->passage_id;
         
        if ($this->Evalues->delete($evalue)) {
            $this->Flash->success(__('L\'évalué a été supprimé'));
            $this->Utilitaire->logInBdd($message);
        } else {
            $this->Flash->error(__('Erreur dans la suppression de l\'évalué.'));
        }

        return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
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

    public function numero() {
    
    	//Passages selectionne
    	$this->loadModel('Passages');
    	$passage = $this->Passages->find('all')->where(['selected'=>1])->first();
    		
    	//Liste des inscris
    	$evalues = $this->Evalues->find()
    							 ->contain(['Licencies','Grades'])
    							 ->where(['passage_id'=>$passage->id,'Licencies.ddn is not null'])
    							 ->order('grade_presente_id desc, Licencies.ddn desc');
    	
    	
    	$update = $this->Evalues->query();
    	$iCpt=0;
    	$gradeTmp=$grade=0;
    	$numero=0;
    	foreach ($evalues as $evalue) {
    		$grade=$evalue->grade_presente_id;
    		switch ($grade) {
    			case 12 :
    				$numero = 700;
    				break;
    			case 13 :
    				$numero = 600;
    				break;
    			case 14 :
    				$numero = 500;
    				break;
    			case 15 :
    				$numero = 400;
    				break;
    			case 16 :
    				$numero = 300;
    				break;
    			case 17 :
    				$numero = 200;
    				break;
    			case 18 :
    				$numero = 100;
    				break;
    		}
    		
    		if($gradeTmp==0){
    			$iCpt++;
    		} else {
    			if($grade == $gradeTmp) $iCpt++;
	    		else $iCpt=1;
    		}
    		$numero=$numero+$iCpt;
    		$gradeTmp=$grade;
    		//Update
    		$update->update()
    		->set(['numero' => $numero])
    		->where(['id' => $evalue->id])->execute();
    		$update = $this->Evalues->query();
    	}
    	
    	return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
    }
}
