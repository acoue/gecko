<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Licencies Controller
 *
 * @property \App\Model\Table\LicenciesTable $Licencies
 */
class LicenciesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clubs']
        ];
        $licencies = $this->paginate($this->Licencies);

        $this->set(compact('licencies'));
        $this->set('_serialize', ['licencies']);
    }

    /**
     * View method
     *
     * @param string|null $id Licency id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $licency = $this->Licencies->get($id, [
            'contain' => ['Clubs']
        ]);

        $this->set('licency', $licency);
        $this->set('_serialize', ['licency']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $licency = $this->Licencies->newEntity();
        if ($this->request->is('post')) {
            $licency = $this->Licencies->patchEntity($licency, $this->request->data);
            if ($this->Licencies->save($licency)) {
                $this->Flash->success(__('Le licencié a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Le licencié n\'a pas été sauvegardé.'));
            }
        }
        $clubs = $this->Licencies->Clubs->find('list', ['limit' => 200]);
        $this->set(compact('licency', 'clubs'));
        $this->set('_serialize', ['licency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Licency id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $licency = $this->Licencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $licency = $this->Licencies->patchEntity($licency, $this->request->data);
            if ($this->Licencies->save($licency)) {
                $this->Flash->success(__('Le licencié a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Le licencié n\'a pas été sauvegardé.'));
            }
        }
        $clubs = $this->Licencies->Clubs->find('list', ['limit' => 200]);
        $this->set(compact('licency', 'clubs'));
        $this->set('_serialize', ['licency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Licency id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $licency = $this->Licencies->get($id);
        if ($this->Licencies->delete($licency)) {
            $this->Flash->success(__('Le licencié a été supprimé.'));
        } else {
            $this->Flash->error(__('Le licencié n\'a pas été sauvegardé.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function search() {
    	if ($this->request->is(['ajax'])) {
    		$libelle = $this->request->data['libelle'];
    		
    		$lic = $this->Licencies->find('all')
    		->contain(['Clubs'])
    		->limit(20)
    		->where(['prenom like '=>'%'.$libelle.'%'])
    		->orWhere(['nom like '=>'%'.$libelle.'%']);
    		$this->set('licencies', $lic);
    
    		//% or name like %% or description like %%
    	}
    }
}