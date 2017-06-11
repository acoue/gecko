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
                $this->Flash->success(__('Le juge a été créé.'));
            } else {
                $this->Flash->error(__('Erreur dans la création du juge.'));
            	$this->Utilitaire->logInBdd("Ajout du juge : ".$juge->id." -> passage : ".$juge->passage_id." | jury : ".$juge->jury_id);
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
        $message="Suppression du juge : ".$juge->id." -> passage : ".$juge->passage_id." | jury : ".$juge->jury_id;
        if ($this->Juges->delete($juge)) {
            $this->Flash->success(__('Le juge a été supprimé'));
            $this->Utilitaire->logInBdd($message);
        } else {
            $this->Flash->error(__('Erreur lors de la suppression du juge.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
