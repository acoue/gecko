<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
//use Lib\FonctionHas;
use Cake\Filesystem\Folder;

class UtilitaireComponent extends Component
{
	/*
	 * Fonction d'historisation en base de données
	 */	
	public function logInBdd($texte) {
		
		$session = $this->request->session();
		if($session->check("UserConnected")) {
			$user=$session->read("UserConnected");
			
			$logTable = TableRegistry::get('Historiques');		
			$log = $logTable->newEntity();
			$log->id = null;
			$log->libelle = $texte;
			$log->user_id = $user->getId();
			$log->user_nom = $user->getNom();
			$log->user_prenom = $user->getPrenom();
			//Enregistrement
			$logTable->save($log);
		}
	}

	/*
	 * Fonction permettant de retourner la valeur d'un parametre
	 * 
	 * @return String : valeur parametre
	 */
	public function getParametre($param) {
		//$session = $this->request->session();
		//$user=$session->read("UserConnected");
		//if($session->check("UserConnected")) {
			$paramTable = TableRegistry::get('Parametres');
			$elt = $paramTable->find('all')->select('valeur')->where(['name'=>$param])->first();			
			
			if($elt) return $elt->valeur;
			else return "";
			
		//} else return "ERREUR";	
	}
	

	public function replaceCaractereSpeciaux($chaine) {
	
		return str_replace( ['à','á','â','ã','ä', 'ç', 'è','é','ê','ë', 'ì','í','î','ï', 'ñ', 'ò','ó','ô','õ','ö', 'ù','ú','û','ü', 'ý','ÿ', 'À','Á','Â','Ã','Ä', 'Ç', 'È','É','Ê','Ë', 'Ì','Í','Î','Ï', 'Ñ', 'Ò','Ó','Ô','Õ','Ö', 'Ù','Ú','Û','Ü', 'Ý'],
				['a','a','a','a','a', 'c', 'e','e','e','e', 'i','i','i','i', 'n', 'o','o','o','o','o', 'u','u','u','u', 'y','y', 'A','A','A','A','A', 'C', 'E','E','E','E', 'I','I','I','I', 'N', 'O','O','O','O','O', 'U','U','U','U', 'Y'],
				$chaine);
	}
	
}