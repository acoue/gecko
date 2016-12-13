<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ResultatCompetitions Controller
 *
 * @property \App\Model\Table\ResultatCompetitionsTable $ResultatCompetitions
 */
class ResultatCompetitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	//debug($nblicencies);die();
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	 
        $this->paginate = [
            'contain' => ['Licencies', 'Resultats'],'where' => ['competition_id'=>$competitionSelected]
        ];
        $resultatCompetitions = $this->paginate($this->ResultatCompetitions);

        $this->set(compact('resultatCompetitions'));
        $this->set('_serialize', ['resultatCompetitions']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

    	$this->loadModel('Competitions');
    	$competition = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	
        $resultatCompetition = $this->ResultatCompetitions->newEntity();
        if ($this->request->is('post')) {
            $resultatCompetition = $this->ResultatCompetitions->patchEntity($resultatCompetition, $this->request->data);
            if ($this->ResultatCompetitions->save($resultatCompetition)) {
                $this->Flash->success(__('Le résultat de la compétition a été créé.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur lors de la création du résultat.'));
            }
        }
        //Licencié de la repartition
        $this->loadModel('Repartitions');
        $repartitions = $this->Repartitions->find('all')->contain(['Licencies'=>['Clubs']])->where(['competition_id' => $competition->id])->order(['Licencies.nom'=>'asc']);
        
        $licSelected=[];
        foreach ($repartitions as $value):
        array_push($licSelected,$value->licencie_id);
        endforeach;
        if(count($licSelected)>0) {
        	$this->loadModel('Licencies');
        	$licencies=$this->Licencies->find('list')->where(['Licencies.id in ' => $licSelected])->order(['Licencies.display_name'=>'asc']);
        } else $licencies = null;
        
        $resultats = $this->ResultatCompetitions->Resultats->find('list');
        $this->set(compact('resultatCompetition', 'competition', 'licencies', 'resultats'));
        $this->set('_serialize', ['resultatCompetition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resultat Competition id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
    	$this->loadModel('Competitions');
    	$competition = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	 
        $resultatCompetition = $this->ResultatCompetitions->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resultatCompetition = $this->ResultatCompetitions->patchEntity($resultatCompetition, $this->request->data);
            if ($this->ResultatCompetitions->save($resultatCompetition)) {
                $this->Flash->success(__('Le résultat a été sauvegardé.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erreur dans la sauvegarde du résultat'));
            }
        }
        

        //Licencié de la repartition
        $this->loadModel('Repartitions');
        $repartitions = $this->Repartitions->find('all')->contain(['Licencies'=>['Clubs']])->where(['competition_id' => $competition->id])->order(['Licencies.nom'=>'asc']);
        
        $licSelected=[];
        foreach ($repartitions as $value):
        array_push($licSelected,$value->licencie_id);
        endforeach;
        if(count($licSelected)>0) {
        	$this->loadModel('Licencies');
        	$licencies=$this->Licencies->find('list')->where(['Licencies.id in ' => $licSelected])->order(['Licencies.display_name'=>'asc']);
        } else $licencies = null;
        
        $resultats = $this->ResultatCompetitions->Resultats->find('list', ['limit' => 200]);
        $this->set(compact('resultatCompetition', 'competition', 'licencies', 'resultats'));
        $this->set('_serialize', ['resultatCompetition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Resultat Competition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resultatCompetition = $this->ResultatCompetitions->get($id);
        if ($this->ResultatCompetitions->delete($resultatCompetition)) {
            $this->Flash->success(__('Le résultat a été supprimé.'));
        } else {
            $this->Flash->error(__('Erreur dans la suppression du résultat.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
