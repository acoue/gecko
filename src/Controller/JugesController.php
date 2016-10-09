<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Juges Controller
 *
 * @property \App\Model\Table\JugesTable $Juges
 */
class JugesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Passages', 'Jures']
        ];
        $juges = $this->paginate($this->Juges);

        $this->set(compact('juges'));
        $this->set('_serialize', ['juges']);
    }

    /**
     * View method
     *
     * @param string|null $id Juge id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $juge = $this->Juges->get($id, [
            'contain' => ['Passages', 'Jures']
        ]);

        $this->set('juge', $juge);
        $this->set('_serialize', ['juge']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $juge = $this->Juges->newEntity();
        if ($this->request->is('post')) {
            $juge = $this->Juges->patchEntity($juge, $this->request->data);
            if ($this->Juges->save($juge)) {
                $this->Flash->success(__('The juge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The juge could not be saved. Please, try again.'));
            }
        }
        $passages = $this->Juges->Passages->find('list', ['limit' => 200]);
        $jures = $this->Juges->Jures->find('list', ['limit' => 200]);
        $this->set(compact('juge', 'passages', 'jures'));
        $this->set('_serialize', ['juge']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Juge id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $juge = $this->Juges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $juge = $this->Juges->patchEntity($juge, $this->request->data);
            if ($this->Juges->save($juge)) {
                $this->Flash->success(__('The juge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The juge could not be saved. Please, try again.'));
            }
        }
        $passages = $this->Juges->Passages->find('list', ['limit' => 200]);
        $jures = $this->Juges->Jures->find('list', ['limit' => 200]);
        $this->set(compact('juge', 'passages', 'jures'));
        $this->set('_serialize', ['juge']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Juge id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $juge = $this->Juges->get($id);
        if ($this->Juges->delete($juge)) {
            $this->Flash->success(__('The juge has been deleted.'));
        } else {
            $this->Flash->error(__('The juge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
