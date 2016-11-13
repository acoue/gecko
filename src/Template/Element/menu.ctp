<?php 

$session = $this->request->session();
if($session->check("UserConnected")) $uc=$session->read("UserConnected");
else $uc =null;

	echo $this->Html->link('Module licencié', ['controller'=>'Admin', 'action' => 'change',1],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Module Competition', ['controller'=>'Admin', 'action' => 'change',2],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Module Passage de grade', ['controller'=>'Admin', 'action' => 'change',3],['class' => 'btn btn-primary'])."<br /><br />";
	echo "<br /><br /><br /><br /><br /><br />";
	
	if($uc && $uc->getProfil()=='admin') 
		echo $this->Html->link('Administration', ['controller'=>'admin', 'action' => 'index'],['class' => 'btn btn-default'])."<br /><br />";
	
	
	echo $this->Html->link('Mon compte', ['controller'=>'Users', 'action' => 'compte'],['class' => 'btn btn-warning'])."<br /><br />";
	echo $this->Html->link('Déconnexion', ['controller'=>'Users', 'action' => 'logout'],['class' => 'btn btn-danger'])."<br /><br />";
	?>
		