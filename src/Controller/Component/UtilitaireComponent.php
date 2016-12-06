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
	
// 	public function replaceValueLDAP($champ,$value) {
// 		//Connexion au LDAP
// 		$connect = $this->connexionLDAP();
// 		//On recherche sur le username
// 		$resultat = $this->Utilitaire->searchLDAP($username);
// 		//Encodage nuoveau mot de passe
// 		$entry["userpassword"][0]=$this->Securite->encodePwdHas($pass);
// 		return ldap_mod_replace ( $connect, $resultat[0]["dn"] , $entry);
		
// 	}
	
// 	public static function getListeRepertoires($dir) {
	
// 		$result = [];
// 		$cdir = scandir($dir);
// 		foreach ($cdir as $key => $value) {
// 			if (!in_array($value,array(".",".."))) {
// 				if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
// 					$result[$value] = $value;
// 				}
// 			}
// 		}
// 		return $result;
// 	}
			
// 	public function createLogin($nom,$prenom) {
// 		//Connexion au LDAP
// 		$connect = $this->connexionLDAP();
		
// 		$resultUID=true;
// 		$find=false;
// 		$k=0;
// 		$l=0;
// 		$dn = "cn=Personne,dc=has-sante,dc=fr";
// 		//Traitement du nom 
// 		$nom = FonctionHas::cleanTexteToMinuscule($nom);
// 		//Traitement du prenom
// 		$prenom = str_replace(" ","",$prenom);
// 		$tmp_table=explode("-", $prenom);

// 		if (count($tmp_table)==2) {	
// 			$prenom=substr($tmp_table[0],0,1).$tmp_table[1];
// 			$k=1;
// 		}
// 		$prenom = FonctionHas::cleanTexteToMinuscule($prenom);
	
// 		while ($find==false){		
// 			$k++;
// 			if ($k<strlen($prenom.$nom)) {
// 				$uid=substr($prenom,0,$k).".".$nom;
// 			} else {
// 				$l++;
// 				$uid=$prenom.$l.".".$nom;
// 			}
// 			//On verifie que la login n'existe pas
// 			$filter="(uid=".$uid.")";
// 			$sr=ldap_search($connect, $dn, $filter);
// 			$resultUID = ldap_get_entries($connect, $sr);
// 			if ($resultUID["count"]==0) {
// 				$find=true;
// 			}
// 		}
						
// 		return $uid;

// 	}
	
// 	public static function getListeFichiers($dir) {
	
// 		$result = [];
// 		$cdir = scandir($dir);
// 		foreach ($cdir as $key => $value) {
// 			if (!in_array($value,array(".",".."))) {
// 				if (!is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
// 					$result[$value] = $value;
// 				}
// 			}
// 		}		 
// 		return $result;
// 	}
	
// 	public function getArborescence($idRep){
	
// 		$arborescenceTable = TableRegistry::get('Arborescences');
// 		$arborescence = $arborescenceTable->find()->where(['id'=>$idRep])->first();
// 		$sortie = $arborescence->name;
		
// 		if($arborescence->parent_id) {
// 			$sortie = $this->getArborescence($arborescence->parent_id).'/'.$sortie;
// 		}
// 		return $sortie;
// 	}	
	
// 	public function createRepertoire($chemin,$name,$idParent) {
// 		$retour = false;
// 		//Recuperation de l'utilisateur connecté
// 		$uc = $this->request->session()->read('UserConnected');
// 		//Chargement des modeles
// 		$repertoireModel = TableRegistry::get('Repertoires');
// 		$droitsRepertoiresUserModel = TableRegistry::get('DroitsRepertoiresUsers');
		
// 		//Création physique
// 		$pathRep = FILES_PATH.$chemin;
// 		$pathComplet=$pathRep.$name;
	
// 		$dir = new Folder();
// 		if($dir->create($pathComplet,0666)) {
// 			$this->hasLog("Creation physique du repertoire <".$name.">, chemin : ".$chemin);
// 			//Création en BDD
// 			$repertoire = $repertoireModel->newEntity();
// 			$repertoire->id=null;
// 			$repertoire->name=$name;
// 			$repertoire->archive=0;
// 			$repertoire->user_id=$uc->getId();
// 			$repertoire->chemin=$chemin;
// 			$repertoire->parent_id=$idParent;
// 			if($repertoireModel->save($repertoire))	{
// 				$this->hasLog("Creation en BDD du repertoire <".$name.">, chemin : ".$chemin);
// 				//Droit propriétaire
// 				$droitsRepertoiresUser = $droitsRepertoiresUserModel->newEntity();
// 				$droitsRepertoiresUser->id =null;
// 				$droitsRepertoiresUser->droit_id = 5;
// 				$droitsRepertoiresUser->repertoire_id = $repertoire->id;
// 				$droitsRepertoiresUser->user_id = $uc->getId();
// 				if($droitsRepertoiresUserModel->save($droitsRepertoiresUser)) $this->hasLog("Droits - Ajout : droit <".$droitsRepertoiresUser->droit_id."> sur le repertoire <".$droitsRepertoiresUser->repertoire_id."> pour le user <".$droitsRepertoiresUser->user_id.">");
// 				else $this->hasLog("Erreur dans ajout du droit <".$droitsRepertoiresUser->droit_id."> sur le repertoire <".$droitsRepertoiresUser->repertoire_id."> pour le user <".$droitsRepertoiresUser->user_id.">");
// 				$retour = true;
// 			} else {
// 				$retour=false;
// 				$this->hasLog("Erreur dans la creation en BDD du repertoire <".$name.">, chemin : ".$chemin);
// 			}
// 		} else {
// 			$retour=false;
// 			$this->hasLog("Erreur dans la creation physique du repertoire <".$name.">, chemin : ".$chemin);
// 		}
// 		return $retour;
// 	}
	
	
}