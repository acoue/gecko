<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Palmares Controller
 *
 * @property \App\Model\Table\PalmaresTable $Palmares
 */
class PalmaresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Licencies']
        ];
        $palmares = $this->paginate($this->Palmares);

        $this->set(compact('palmares'));
        $this->set('_serialize', ['palmares']);
    }


   
    public function palmares($id)
    {
    	$palmares=$this->Palmares->find()->contain(['Licencies'])->where(['licencie_id'=>$id]);
    	
    	$this->set(compact('palmares'));
    	$this->set('_serialize', ['palmares']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Palmare id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $palmare = $this->Palmares->get($id, [
            'contain' => ['Licencies']
        ]);

        $this->set('palmare', $palmare);
        $this->set('_serialize', ['palmare']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $palmare = $this->Palmares->newEntity();
        if ($this->request->is('post')) {
            $palmare = $this->Palmares->patchEntity($palmare, $this->request->data);
            if ($this->Palmares->save($palmare)) {
                $this->Flash->success(__('The palmare has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The palmare could not be saved. Please, try again.'));
            }
        }
        $licencies = $this->Palmares->Licencies->find('list', ['limit' => 200]);
        $this->set(compact('palmare', 'licencies'));
        $this->set('_serialize', ['palmare']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Palmare id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $palmare = $this->Palmares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $palmare = $this->Palmares->patchEntity($palmare, $this->request->data);
            if ($this->Palmares->save($palmare)) {
                $this->Flash->success(__('The palmare has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The palmare could not be saved. Please, try again.'));
            }
        }
        $licencies = $this->Palmares->Licencies->find('list', ['limit' => 200]);
        $this->set(compact('palmare', 'licencies'));
        $this->set('_serialize', ['palmare']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Palmare id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $palmare = $this->Palmares->get($id);
        if ($this->Palmares->delete($palmare)) {
            $this->Flash->success(__('The palmare has been deleted.'));
        } else {
            $this->Flash->error(__('The palmare could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
