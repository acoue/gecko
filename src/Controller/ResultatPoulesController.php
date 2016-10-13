<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ResultatPoules Controller
 *
 * @property \App\Model\Table\ResultatPoulesTable $ResultatPoules
 */
class ResultatPoulesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->contain(['Categories'])->where(['selected' => '1'])->first();
    	  
    	$resultatPoules = $this->ResultatPoules->find('all')->contain(['Licencies'])
    	->where(['competition_id'=>$competitionSelected->id])
    	->order('numero_poule')->toArray();
    	     	
        $this->set(compact('resultatPoules','competitionSelected'));
        $this->set('_serialize', ['resultatPoules']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resultat Poule id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($poule = null)
    {
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	
    	if ($this->request->is(['patch', 'post', 'put'])) {
    		
    		foreach ($this->request->data as $key => $value) {
    			$resultatQuery = $this->ResultatPoules->query();
    			$resultatQuery->update()
    					->set(['classement' => $value])
    					->where(['competition_id'=>$competitionSelected->id,'id'=>$key])->execute();
    			
			}
			$this->Flash->success(__('Sauvegarde effectuée'));
			return $this->redirect(['action' => 'index']);
    	}
    	
    	$resultatPoules = $this->ResultatPoules->find('all')->contain(['Licencies'])
    	->where(['competition_id'=>$competitionSelected->id,'numero_poule'=>$poule])
    	->order('numero_poule');
    	
    	$this->set(compact('poule','resultatPoules'));
    	$this->set('_serialize', ['resultatPoules']);
    	
    }
}
