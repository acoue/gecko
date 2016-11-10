<?php 

	echo $this->Html->link('Accueil', ['controller'=>'Pages', 'action' => 'home'],['class' => 'btn btn-default'])."<br /><br />";
	
	echo $this->Html->link('Inscription', ['controller'=>'', 'action' => ''],['class' => 'btn btn-warning'])."<br /><br />";
	
	echo $this->Html->link('Espace licencié', ['controller'=>'Licencies', 'action' => 'index'],['class' => 'btn btn-success'])."<br /><br />";
	echo $this->Html->link('Répartition', ['controller'=>'Repartitions', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Tirage au sort', ['controller'=>'Tirages', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Voir les poules', ['controller'=>'Tirages', 'action' => 'resume'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Poule - Résultats', ['controller'=>'ResultatPoules', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	//echo $this->Html->link('Poule - Résultats complets', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Génération des tableaux', ['controller'=>'ResultatPoules', 'action' => 'makeTableau'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Passage de grade', ['controller'=>'Passages', 'action' => 'gestion'],['class' => 'btn btn-warning'])."<br /><br />";
	echo $this->Html->link('Mon compte', ['controller'=>'Users', 'action' => 'compte'],['class' => 'btn btn-default'])."<br /><br />";
	echo $this->Html->link('Déconnexion', ['controller'=>'Users', 'action' => 'logout'],['class' => 'btn btn-danger'])."<br /><br /><br /><br />";
?>        
