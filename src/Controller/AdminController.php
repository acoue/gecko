<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	if(! $this->Securite->isAdmin()) return $this->redirect(['controller'=>'pages', 'action'=>'permission']);
    	$session = $this->request->session();
    	$session->write('Module',4);
    }
    

    public function change($id) {
    	
    	$session = $this->request->session();
    	$session->write('Module',$id);
    	 
    
    	if($id==1) return $this->redirect(['controller'=>'Licencies','action' => 'index']);
    	else if($id==3)return $this->redirect(['controller'=>'Passages','action' => 'gestion']);
    	else return $this->redirect(['controller'=>'Pages','action' => 'home']);
    }
}
