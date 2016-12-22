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
            } else {
                $this->Flash->error(__('The juge could not be saved. Please, try again.'));
            }

            return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
        }
		//PAssage selectionne
        $passage = $this->Passages->find('all')->where(['selected'=>1])->first();
        $jurys = $this->Juges->Jurys->find('list')->where(['actif'=>1,'discipline_id'=>$passage->discipline_id]);
        $this->set(compact('juge', 'jurys','passage'));
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
