<h4>Actions</h4>
<?php 
	echo $this->Html->link('Accueil', ['controller'=>'Pages', 'action' => 'display'],['class' => 'btn btn-default'])."<br /><br /><br />";
	
	echo $this->Html->link('Répartition', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Tirage au sort', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Génération des poules', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Impression des poules', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Poule - Résultats simples', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Poule - Résultats complets', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Génération des tableaux', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo "<br /><br />";
	echo $this->Html->link('Passage de grade', ['controller'=>'', 'action' => ''],['class' => 'btn btn-warning'])."<br /><br />";
?>        
