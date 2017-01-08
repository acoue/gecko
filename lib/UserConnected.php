<?php
namespace Lib;

//use Cake\ORM\TableRegistry;
use \Lib\FonctionHas;

class UserConnected {
	
	private $id;
	private $nom;
	private $prenom;
	private $lastLogin;
	private $login;
	private $profil;
	private $club;
	private $clubId;
	
	public function __construct() {
    }

    public function getId() {
    	return $this->id;
    }
    public function setId($id) {
    	$this->id = $id;
    }
    
    public function getNom() {
    	return $this->nom;
    }
	public function setNom($nom) {
		$this->nom = $nom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getLastLogin() {
		return $this->lastLogin;
	}
	public function getLastLoginFormatLong() {
		return FonctionHas::dateLongue($this->lastLogin);
	}
	public function setLastLogin($lastlogin) {
		$this->lastLogin = $lastlogin;
	}
	public function getLogin() {
		return $this->login;
	}
	public function setLogin($login) {
		$this->login = $login;
	}

	public function getProfil() {
		return $this->profil;
	}
	public function setProfil($profil) {
		$this->profil = $profil;
	}
	public function getClub() {
		return $this->club;
	}
	public function setClub($club) {
		$this->club = $club;
	}
	public function getIdClub() {
		return $this->clubId;
	}
	public function setIdClub($clubId) {
		$this->clubId = $clubId;
	}
}