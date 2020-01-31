<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Securite');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Utilitaire');
        
        $this->loadComponent('Auth', [
        		'loginRedirect' => [
        				'controller' => 'Pages',
        				'action' => 'display',
        							'home'],
        		'logoutRedirect' => [
        				'controller' => 'Users',
        				'action' => 'login'],
        		'authenticate' => [
        				'Form' => [
        				'scope' => ['Users.active' => 1]]
        		]
        	]);

        $session = $this->request->session();
        if($session->check("Module")) $module=$session->read("Module");
        else {
        	$module=0;
        	$session->write("Module",$module);
        }
        
        if($module==2) {
	        //Message
	        $this->loadModel('Competitions');
	        $competitionSelected = $this->Competitions->find('all')->contain(['Categories','Disciplines'])->where(['selected' => '1'])->first();
    		$this->set('competitionSelected', $competitionSelected);
        } else if($module==3) {
	        //Message
	        $this->loadModel('Passages');
	        $passageSelected = $this->Passages->find('all')->contain(['Disciplines'])->where(['selected' => '1'])->first();
    		$this->set('passageSelected', $passageSelected);
        } 
        //debug($competition->category->name);die();
    	//Envoi des objet retuor à la page
    	//$this->set('_serialize', ['competitionSelected']);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
