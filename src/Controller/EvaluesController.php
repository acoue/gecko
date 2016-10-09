<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evalues Controller
 *
 * @property \App\Model\Table\EvaluesTable $Evalues
 */
class EvaluesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Passages', 'Licencies']
        ];
        $evalues = $this->paginate($this->Evalues);

        $this->set(compact('evalues'));
        $this->set('_serialize', ['evalues']);
    }

    /**
     * View method
     *
     * @param string|null $id Evalue id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evalue = $this->Evalues->get($id, [
            'contain' => ['Passages', 'Licencies']
        ]);

        $this->set('evalue', $evalue);
        $this->set('_serialize', ['evalue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evalue = $this->Evalues->newEntity();
        if ($this->request->is('post')) {
            $evalue = $this->Evalues->patchEntity($evalue, $this->request->data);
            if ($this->Evalues->save($evalue)) {
                $this->Flash->success(__('The evalue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evalue could not be saved. Please, try again.'));
            }
        }
        $passages = $this->Evalues->Passages->find('list', ['limit' => 200]);
        $licencies = $this->Evalues->Licencies->find('list', ['limit' => 200]);
        $this->set(compact('evalue', 'passages', 'licencies'));
        $this->set('_serialize', ['evalue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evalue id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evalue = $this->Evalues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evalue = $this->Evalues->patchEntity($evalue, $this->request->data);
            if ($this->Evalues->save($evalue)) {
                $this->Flash->success(__('The evalue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evalue could not be saved. Please, try again.'));
            }
        }
        $passages = $this->Evalues->Passages->find('list', ['limit' => 200]);
        $licencies = $this->Evalues->Licencies->find('list', ['limit' => 200]);
        $this->set(compact('evalue', 'passages', 'licencies'));
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
}
