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
            'contain' => ['Licencies'=>['Clubs'],'Resultats']
        ];
        $palmares = $this->paginate($this->Palmares);

        $this->set(compact('palmares'));
        $this->set('_serialize', ['palmares']);
    }


   
    public function palmares($id)
    {
    	//Palmares
    	$palmares=$this->Palmares->find()->contain(['Licencies'=>['Clubs'],'Resultats'])->where(['licencie_id'=>$id]);
    	
    	//Licencie
    	$licencieModel=$this->loadModel('Licencies');
    	$licencie=$licencieModel->find()->contain(['Clubs'])->where(['Licencies.id'=>$id])->first();
    	
    	$this->set(compact('palmares','licencie'));
    	$this->set('_serialize', ['palmares']);
    }
    
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($licencie_id)
    {
        $palmare = $this->Palmares->newEntity();
        if ($this->request->is('post')) {
        	

        	$date_competition=$this->request->data['date_competition'];
        	//Transformation de la date : dd/mm/yyyy vers yyyy-mm-dd
        	if(isset($date_competition)) {
        		$tmp_date = $date_competition;
        		$date_competition = substr($tmp_date, 6,4)."-".substr($tmp_date, 3,2)."-".substr($tmp_date, 0,2);
        	}
            $palmare = $this->Palmares->patchEntity($palmare, $this->request->data);
            $palmare->licencie_id=$licencie_id;
            $palmare->date_competition=$date_competition;
            
            if ($this->Palmares->save($palmare)) {
                $this->Flash->success(__('Le palmarès a été créé.'));
                return $this->redirect(['action' => 'palmares',$licencie_id]);
            } else {
                $this->Flash->error(__('Erreur dans la création du palmarès.'));
            }
        }
        //Licencie
        $licencieModel=$this->loadModel('Licencies');
        $licencie=$licencieModel->find()->contain(['Clubs'])->where(['Licencies.id'=>$licencie_id])->first();

        $resultats = $this->Palmares->Resultats->find('list');
        
        $this->set(compact('palmare','licencie','resultats'));
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
        $palmare = $this->Palmares->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $palmare = $this->Palmares->patchEntity($palmare, $this->request->data);
            if ($this->Palmares->save($palmare)) {
                $this->Flash->success(__('The palmare has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The palmare could not be saved. Please, try again.'));
            }
        }
        //Licencie
        $licencieModel=$this->loadModel('Licencies');
        $licencie=$licencieModel->find()->contain(['Clubs'])->where(['Licencies.id'=>$palmare->licencie_id])->first();

        $resultats = $this->Palmares->Resultats->find('list');
        $this->set(compact('palmare', 'licencie','resultats'));
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
