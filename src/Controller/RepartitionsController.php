<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Repartitions Controller
 *
 * @property \App\Model\Table\RepartitionsTable $Repartitions
 */
class RepartitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	
        $repartitions = $this->Repartitions->find('all')->contain(['Licencies'=>['Clubs']])->where(['competition_id' => $competitionSelected->id]);
        $this->set(compact('repartitions'));
        $this->set('_serialize', ['repartitions']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {

    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	
        $repartition = $this->Repartitions->newEntity();
        $repartition->id=null;
        $repartition->licencie_id = $id;
        $repartition->competition_id = $competitionSelected->id;
        
            if ($this->Repartitions->save($repartition)) {
                $this->Flash->success(__('Licencié séléctionné.'));
            } else {
                $this->Flash->error(__('Erreur dans la sélection du licencié.'));
            }
            return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Repartition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repartition = $this->Repartitions->get($id);
        if ($this->Repartitions->delete($repartition)) {
            $this->Flash->success(__('Suppresion du licencié dans la répartition.'));
        } else {
            $this->Flash->error(__('Erreur lors de la suppression du licencié de la répartition.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function search() {
    	if ($this->request->is(['ajax'])) {
    		$libelle = $this->request->data['libelle'];
    $this->loadModel('Licencies');
    		
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
