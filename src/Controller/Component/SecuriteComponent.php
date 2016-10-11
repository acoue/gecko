<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class SecuriteComponent extends Component
{
	public function encodePwdHas($password) {
		return "{MD5}".base64_encode(pack("H*", md5($password)));
	}
	
	public function getPassword()
	{
		$length = 8;
		$password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		return $password;
	}
	
	public function getToken()
	{
		$length = 32;
		$password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		return $password;
	}
	public function isAdmin() {
		$session = $this->request->session();
		if($session->check('UserConnected')) {
			$user = $session->read("UserConnected");
			if($user->getProfil()=='admin')	return true;
		} else return false;
	}
	
	
	public function isClub() {
		$session = $this->request->session();
		if($session->check('UserConnected')) {
			$user = $session->read("UserConnected");
			if($user->getProfil()=='club')	return true;
		} else return false;
	}
	
	public function isConnected() {
	
		$session = $this->request->session();
		if($session->check('UserConnected')) return true;
		else return false;
	}
}
