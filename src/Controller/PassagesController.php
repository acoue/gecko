<?php
namespace App\Controller;

use App\Controller\AppController;

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
    			'contain' => ['Disciplines']
    	];
    	$passages = $this->paginate($this->Passages);

        $this->set(compact('passages'));
        $this->set('_serialize', ['passages']);
    }

    public function gestion()
    {
    	
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
            'contain' => ['Evalues'=>['Licencies'], 'Juges'=>['Jurys'],'Disciplines']
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
            
            if ($this->Passages->save($passage)) {
                $this->Flash->success(__('Le passage a été créé.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la création du passage.'));
            }
        }
        $disciplines = $this->Passages->Disciplines->find('list');
        $this->set(compact('passage','disciplines'));
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
            'contain' => ['Disciplines']
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

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la sauvegarde du passage.'));
            }
        }
        $disciplines = $this->Passages->Disciplines->find('list');
        $this->set(compact('passage','disciplines'));
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
        if ($this->Passages->delete($passage)) {
            $this->Flash->success(__('Le passage a été supprimé.'));
        } else {
            $this->Flash->error(__('Erreur dans la suppression du passage.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function select()
    {
    	$passages = $this->Passages->find('all')->contain('Disciplines')->where(['archive'=>0]);
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
    	return $this->redirect(['controller'=>'passages','action' => 'index']);
    }
}
