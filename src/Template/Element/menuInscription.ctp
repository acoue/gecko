<?php 

	echo $this->Html->link('Accueil', ['controller'=>'Admin', 'action' => 'change',0],['class' => 'btn btn-default'])."<br /><br />";
	echo $this->Html->link('Inscription competition', ['controller'=>'InscriptionCompetitions', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Inscription passage', ['controller'=>'InscriptionPassages', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo "<br /><br /><br /><br /><br /><br /><br /><br /<br />";
?>        
