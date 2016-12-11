<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InscriptionPassages Controller
 *
 * @property \App\Model\Table\InscriptionPassagesTable $InscriptionPassages
 */
class InscriptionPassagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	//Recuperation du club du user connecte
    	$user = $this->request->session()->read("UserConnected");
    	
        $this->paginate = [
            'contain' => ['Passages', 'Licencies']
        ];
        if($user->getProfil() == 'admin') $inscriptionPassages = $this->paginate($this->InscriptionPassages);
        else $inscriptionPassages = $this->paginate($this->InscriptionPassages)->where(['user_id'=>$user->getId()]);

        $this->set(compact('inscriptionPassages'));
        $this->set('_serialize', ['inscriptionPassages']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	//Recuperation du club du user connecte
    	$user = $this->request->session()->read("UserConnected");
    	$club=$user->getClub();
    	
        $inscriptionPassage = $this->InscriptionPassages->newEntity();
        if ($this->request->is('post')) {
            $inscriptionPassage = $this->InscriptionPassages->patchEntity($inscriptionPassage, $this->request->data);
            if ($this->InscriptionPassages->save($inscriptionPassage)) {
                $this->Flash->success(__('L\'inscription au passage de grade a bien été enregistrée.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur lors de l\'inscription au passage de grade.'));
            }
        }
        if($user->getProfil()=='admin') $licencies = $this->InscriptionPassages->Licencies->find('list');
        else $licencies = $this->InscriptionPassages->Licencies->find('list')->where(["club_id"=>$club]);
        
        
        $passages = $this->InscriptionPassages->Passages->find('list', ['limit' => 200]);
        
        $this->set(compact('inscriptionPassage', 'passages', 'licencies', 'user'));
        $this->set('_serialize', ['inscriptionPassage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inscription Passage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inscriptionPassage = $this->InscriptionPassages->get($id);
        if ($this->InscriptionPassages->delete($inscriptionPassage)) {
            $this->Flash->success(__('The inscription passage has been deleted.'));
        } else {
            $this->Flash->error(__('The inscription passage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
