<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Historiques Controller
 *
 * @property \App\Model\Table\HistoriquesTable $Historiques
 */
class HistoriquesController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Utilitaire');
		$this->loadComponent('Securite');
	}
	
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);   
    		
	        $this->paginate = [
	            'contain' => ['Users'],
	        	'order' => ['created' => 'desc' ]
	        ];
	        $historiques = $this->paginate($this->Historiques);
	
	        $this->set(compact('historiques'));
	        $this->set('_serialize', ['historiques']);
    	
    }

    /**
     * View method
     *
     * @param string|null $id Historique id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
	        $historique = $this->Historiques->get($id, [
	            'contain' => ['Users']
	        ]);
	
	        $this->set('historique', $historique);
	        $this->set('_serialize', ['historique']);
    	
    }

}
