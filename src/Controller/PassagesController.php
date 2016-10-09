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
        $passages = $this->paginate($this->Passages);

        $this->set(compact('passages'));
        $this->set('_serialize', ['passages']);
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
        $passage = $this->Passages->get($id, [
            'contain' => ['Evalues', 'Juges']
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
        $passage = $this->Passages->newEntity();
        if ($this->request->is('post')) {
            $passage = $this->Passages->patchEntity($passage, $this->request->data);
            if ($this->Passages->save($passage)) {
                $this->Flash->success(__('The passage has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The passage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('passage'));
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
        $passage = $this->Passages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $passage = $this->Passages->patchEntity($passage, $this->request->data);
            if ($this->Passages->save($passage)) {
                $this->Flash->success(__('The passage has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The passage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('passage'));
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
        $this->request->allowMethod(['post', 'delete']);
        $passage = $this->Passages->get($id);
        if ($this->Passages->delete($passage)) {
            $this->Flash->success(__('The passage has been deleted.'));
        } else {
            $this->Flash->error(__('The passage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
