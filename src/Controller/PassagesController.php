<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Passages Controller
 *
 * @property \App\Model\Table\PassagesTable $Passages
 */
class PassagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
    	$this->paginate = [
    			'contain' => ['Disciplines','Regions']
    	];
    	$passages = $this->paginate($this->Passages);

        $this->set(compact('passages'));
        $this->set('_serialize', ['passages']);
    }

    public function gestion()
    {
    	//Passages selectionne
    	$passage = $this->Passages->find('all')->where(['selected'=>1])->first();
    	
    	//Listes de juges
    	$this->loadModel('Juges');
    	$juges = $this->Juges->find()->contain(['Jurys'=>['Grades']])->where(['passage_id'=>$passage->id]);
    	//Liste des inscris
    	$this->loadModel('Evalues');
		$evalues = $this->Evalues->find()->contain(['Licencies','Grades'])
		->where(['passage_id'=>$passage->id])->order('grade_presente_id desc, Licencies.ddn desc');;
    	//Liste des notes
    	//$this->loadModel('Notes');
		//$notes = $this->Notes->find()->contain(['Licencies','Juges'])->where(['passage_id'=>$passage->id]);
    	//Listes des grades
		$this->loadModel('Grades');
		$grades = $this->Grades->find()->order('id asc');
		$tabGrades=[];
		foreach ($grades as $grade) {
			$tabGrades[$grade->id]=$grade->name;
		}
		//Liste de notes
		$this->loadModel('Notes');
		$notes=$this->Notes->find()->contain(['Juges'=>['Jurys'],'Licencies'])->where(['Notes.passage_id'=>$passage->id]);
    	
		//creation des notes si non existante en base
		if($notes->count() < ($juges->count()*$evalues->count())) {
			
			//Suppression des lignes eventuelles 
			$this->loadModel('Notes');
			$noteDelete = $this->Notes->query();
			$noteDelete->delete()
			->where(['passage_id'=>$passage->id])
			->execute();
			
			
			//$this->loadModel('Notes');
			$noteInsert = TableRegistry::get('Notes');
			$tabNotes=[];
			$iCpt=0;
			foreach ($juges as $valueJ) {
				
				foreach ($evalues as $valueE) {
					$iCpt++;
					$tabNotes[$iCpt]['passage_id'] = $passage->id;
					$tabNotes[$iCpt]['licencie_id'] = $valueE->licency->id;
					$tabNotes[$iCpt]['juge_id'] = $valueJ->id;
					$tabNotes[$iCpt]['resultat_technique'] = 0;
					$tabNotes[$iCpt]['resultat_kata'] = 0;
					$tabNotes[$iCpt]['resultat_passage'] =0;
				}
			}
			$entities = $noteInsert->newEntities($tabNotes);
			$noteInsert->connection()->transactional(function () use ($noteInsert, $entities) {
				foreach ($entities as $entity) {
					$noteInsert->save($entity, ['atomic' => false]);
				}
			});
			
			$notes=$this->Notes->find()->contain(['Juges'=>['Jurys'],'Licencies'])->where(['Notes.passage_id'=>$passage->id]);
		}
		
		$this->set(compact('juges','passage','evalues','tabGrades','notes'));
    	
    	
    }
    /**
     * View method
     *
     * @param string|null $id Passage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $passage = $this->Passages->get($id, [
            'contain' => ['Evalues'=>['Licencies'], 'Juges'=>['Jurys'=>['Grades']],'Disciplines','Regions']
        ]);

        $this->set('passage', $passage);
        $this->set('_serialize', ['passage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
    	
        $passage = $this->Passages->newEntity();
        if ($this->request->is('post')) {
        	$data = $this->request->data;
            $passage = $this->Passages->patchEntity($passage, $data);
            $date_passage = $data['date_passage'];
            //Transformation de la date : dd/mm/yyyy vers yyyy-mm-dd
            if(isset($date_passage)) {
            	$tmp_date = $date_passage;
            	$date_passage = substr($tmp_date, 6,4)."-".substr($tmp_date, 3,2)."-".substr($tmp_date, 0,2);
            }
            $passage->date_passage = $date_passage;
            $passage->selected=0;
            //debug($passage);die();
            if ($this->Passages->save($passage)) {
            	$this->Utilitaire->logInBdd("Ajout du passage : ".$passage->id." -> ".$passage->name." - ".$passage->date_passage);
                $this->Flash->success(__('Le passage a été créé.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la création du passage.'));
            }
        }
        $disciplines = $this->Passages->Disciplines->find('list');
        $regions = $this->Passages->Regions->find('list');
        $this->set(compact('passage','disciplines','regions'));
        $this->set('_serialize', ['passage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Passage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $passage = $this->Passages->get($id,[
            'contain' => ['Disciplines','Regions']
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {

        	$data = $this->request->data;
            $passage = $this->Passages->patchEntity($passage, $data);
            $date_passage = $data['date_passage'];
            //Transformation de la date : dd/mm/yyyy vers yyyy-mm-dd
            if(isset($date_passage)) {
            	$tmp_date = $date_passage;
            	$date_passage = substr($tmp_date, 6,4)."-".substr($tmp_date, 3,2)."-".substr($tmp_date, 0,2);
            }
            $passage->date_passage = $date_passage;
            if ($this->Passages->save($passage)) {
                $this->Flash->success(__('Le passage a été sauvegardé.'));
                $this->Utilitaire->logInBdd("Modification du passage : ".$passage->id." -> ".$passage->name." - ".$passage->date_passage);
                
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la sauvegarde du passage.'));
            }
        }

        $disciplines = $this->Passages->Disciplines->find('list');
        $regions = $this->Passages->Regions->find('list');
        $this->set(compact('passage','disciplines','regions'));
        $this->set('_serialize', ['passage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Passage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $this->request->allowMethod(['post', 'delete']);
        $passage = $this->Passages->get($id);
        $message="Suppression du passage : ".$passage->id." -> ".$passage->name." - ".$passage->date_competition;
        if ($this->Passages->delete($passage)) {
            $this->Utilitaire->logInBdd($message);
            $this->Flash->success(__('Le passage a été supprimé.'));
        } else {
            $this->Flash->error(__('Erreur dans la suppression du passage.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function select()
    {
    	$passages = $this->Passages->find('all')->contain(['Disciplines','Regions'])->where(['archive'=>0]);
    	$this->set(compact('passages'));
    	$this->set('_serialize', ['passages']);
    	
    }
     
    public function choisir($id)
    {
    	$this->Passages->updateAll(['selected' => 0],[]);
    	 
    	$passage = $this->Passages->get($id);
    	$passage->selected=1;
    	if ($this->Passages->save($passage)) {
    		$this->Flash->success(__('Le passage de grade a bien été sélectionné.'));
    	} else {
    		$this->Flash->error(__('Erreur dans la sélection du passage de grade.'));
    	}
    	return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
    }

}
