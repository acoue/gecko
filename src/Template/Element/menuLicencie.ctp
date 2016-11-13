<?php 

	echo $this->Html->link('Accueil', ['controller'=>'Admin', 'action' => 'change',0],['class' => 'btn btn-default'])."<br /><br />";
	echo $this->Html->link('Espace licencié', ['controller'=>'Licencies', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo "<br /><br /><br /><br /><br /><br /><br /><br /<br /><br /><br /><br /><br /><br /><br />";
	echo $this->Html->link('Mon compte', ['controller'=>'Users', 'action' => 'compte'],['class' => 'btn btn-warning'])."<br /><br />";
	echo $this->Html->link('Déconnexion', ['controller'=>'Users', 'action' => 'logout'],['class' => 'btn btn-danger'])."<br /><br />";
?>        
