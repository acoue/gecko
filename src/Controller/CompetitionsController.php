<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Competitions Controller
 *
 * @property \App\Model\Table\CompetitionsTable $Competitions
 */
class CompetitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $competitions = $this->paginate($this->Competitions);

        $this->set(compact('competitions'));
        $this->set('_serialize', ['competitions']);
    }

    /**
     * View method
     *
     * @param string|null $id Competition id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competition = $this->Competitions->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('competition', $competition);
        $this->set('_serialize', ['competition']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competition = $this->Competitions->newEntity();
        if ($this->request->is('post')) {
        	$data = $this->request->data;
        	//debug($data);die();
        	if($data['description'])$desc=$data['description'];
        	else $desc="";
        	$date_competition=$data['date_competition'];
        	//Transformation de la date : dd/mm/yyyy vers yyyy-mm-dd
        	if(isset($date_competition)) {
        		$tmp_date = $date_competition;
        		$date_competition = substr($tmp_date, 6,4)."-".substr($tmp_date, 3,2)."-".substr($tmp_date, 0,2);
        	}
        	$competition->date_competition = $date_competition;
        	$competition->name=$data['name'];
        	$competition->lieux=$data['lieux'];
        	$competition->type=$data['type'];
        	$competition->description=$desc;
        	$competition->selected=0;
        	$competition->catagorie_id=$data['catagorie_id'];
        	//Enregistrement
            //$competition = $this->Competitions->patchEntity($competition);
            if ($this->Competitions->save($competition)) {
                $this->Flash->success(__('The competition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The competition could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Competitions->Categories->find('list', ['limit' => 200]);
        $this->set(compact('competition', 'categories'));
        $this->set('_serialize', ['competition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Competition id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competition = $this->Competitions->get($id, [
            'contain' => ['Categories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competition = $this->Competitions->patchEntity($competition, $this->request->data);
            if ($this->Competitions->save($competition)) {
                $this->Flash->success(__('The competition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The competition could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Competitions->Categories->find('list', ['limit' => 200]);
        $this->set(compact('competition', 'categories'));
        $this->set('_serialize', ['competition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Competition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competition = $this->Competitions->get($id);
        if ($this->Competitions->delete($competition)) {
            $this->Flash->success(__('The competition has been deleted.'));
        } else {
            $this->Flash->error(__('The competition could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    

    public function select()
    {
    	$competitions = $this->Competitions->find('all', array('contain' => 'Categories'));
    	$this->set(compact('competitions'));
    	$this->set('_serialize', ['competitions']);
    }   
     
    public function choisir($id)
    {
    	$this->Competitions->updateAll(['selected' => 0],[]);
    	
    	$competition = $this->Competitions->get($id);
    	$competition->selected=1;
    	if ($this->Competitions->save($competition)) {
    		$this->Flash->success(__('La compétition a bien été sélectionnée.'));
    	} else {
    		$this->Flash->error(__('Erreur dans la sélection de la compétition.'));
    	}
    	return $this->redirect(['controller'=>'pages','action' => 'home']);
    }
}
