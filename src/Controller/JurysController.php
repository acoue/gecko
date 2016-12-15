<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jurys Controller
 *
 * @property \App\Model\Table\JurysTable $Jurys
 */
class JurysController extends AppController
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
    			'contain' => ['Grades']
    	];
    	$jurys = $this->paginate($this->Jurys);

        $this->set(compact('jurys'));
        $this->set('_serialize', ['jurys']);
    }

    /**
     * View method
     *
     * @param string|null $id jury id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $jury = $this->Jurys->get($id, [
            'contain' => ['Juges','Grades']
        ]);

        $this->set('jury', $jury);
        $this->set('_serialize', ['jury']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $jury = $this->Jurys->newEntity();
        if ($this->request->is('post')) {
            $jury = $this->Jurys->patchEntity($jury, $this->request->data);
            if ($this->Jurys->save($jury)) {
                $this->Flash->success(__('Le Jury a été créé.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la création du jury.'));
            }
        }
        $grades = $this->Jurys->Grades->find('list');
        $this->set(compact('jury','grades'));
        $this->set('_serialize', ['jury']);
    }

    /**
     * Edit method
     *
     * @param string|null $id jury id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $jury = $this->Jurys->get($id, [
            'contain' => ['Grades']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jury = $this->Jurys->patchEntity($jury, $this->request->data);
            if ($this->Jurys->save($jury)) {
                $this->Flash->success(__('Le jury a été sauvegardé.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la sauvegarde du jury.'));
            }
        }
        $grades = $this->Jurys->Grades->find('list');
        $this->set(compact('jury','grades'));
        $this->set('_serialize', ['jury']);
    }

    /**
     * Delete method
     *
     * @param string|null $id jury id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
        $this->request->allowMethod(['post', 'delete']);
        $jury = $this->Jurys->get($id);
        if ($this->Jurys->delete($jury)) {
            $this->Flash->success(__('Le jury a été supprimé.'));
        } else {
            $this->Flash->error(__('Erreur dans la suppresion du jury.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
