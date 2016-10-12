<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ResultatPoules Controller
 *
 * @property \App\Model\Table\ResultatPoulesTable $ResultatPoules
 */
class ResultatPoulesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->contain(['Categories'])->where(['selected' => '1'])->first();
    	 
    	$this->loadModel('Repartitions');
    	 
    	$repartitions = $this->Repartitions->find('all')->contain(['Licencies'=>['Clubs']])
    	->where(['competition_id'=>$competitionSelected->id])
    	->order('numero_poule,position_poule')->toArray();
    	 
    	
    	
    	
        $this->paginate = [
            'contain' => ['Licencies', 'Competitions']
        ];
        $resultatPoules = $this->paginate($this->ResultatPoules);

        $this->set(compact('resultatPoules','competitionSelected','repartitions'));
        $this->set('_serialize', ['resultatPoules']);
    }

    /**
     * View method
     *
     * @param string|null $id Resultat Poule id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resultatPoule = $this->ResultatPoules->get($id, [
            'contain' => ['Licencies', 'Competitions']
        ]);

        $this->set('resultatPoule', $resultatPoule);
        $this->set('_serialize', ['resultatPoule']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resultatPoule = $this->ResultatPoules->newEntity();
        if ($this->request->is('post')) {
            $resultatPoule = $this->ResultatPoules->patchEntity($resultatPoule, $this->request->data);
            if ($this->ResultatPoules->save($resultatPoule)) {
                $this->Flash->success(__('The resultat poule has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The resultat poule could not be saved. Please, try again.'));
            }
        }
        $licencies = $this->ResultatPoules->Licencies->find('list', ['limit' => 200]);
        $competitions = $this->ResultatPoules->Competitions->find('list', ['limit' => 200]);
        $this->set(compact('resultatPoule', 'licencies', 'competitions'));
        $this->set('_serialize', ['resultatPoule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resultat Poule id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resultatPoule = $this->ResultatPoules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resultatPoule = $this->ResultatPoules->patchEntity($resultatPoule, $this->request->data);
            if ($this->ResultatPoules->save($resultatPoule)) {
                $this->Flash->success(__('The resultat poule has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The resultat poule could not be saved. Please, try again.'));
            }
        }
        $licencies = $this->ResultatPoules->Licencies->find('list', ['limit' => 200]);
        $competitions = $this->ResultatPoules->Competitions->find('list', ['limit' => 200]);
        $this->set(compact('resultatPoule', 'licencies', 'competitions'));
        $this->set('_serialize', ['resultatPoule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Resultat Poule id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resultatPoule = $this->ResultatPoules->get($id);
        if ($this->ResultatPoules->delete($resultatPoule)) {
            $this->Flash->success(__('The resultat poule has been deleted.'));
        } else {
            $this->Flash->error(__('The resultat poule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
