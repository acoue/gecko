<h4>Actions</h4>
<?php 
	echo "<br /><br />";
	echo $this->Html->link('Accueil', ['controller'=>'Pages', 'action' => 'display'],['class' => 'btn btn-default'])."<br /><br />";
	echo $this->Html->link('Espace licencié', ['controller'=>'Licencies', 'action' => 'index'],['class' => 'btn btn-success'])."<br /><br />";
	echo $this->Html->link('Répartition', ['controller'=>'Repartitions', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Tirage au sort', ['controller'=>'Tirages', 'action' => 'index'],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Voir les poules', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Poule - Résultats simples', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Poule - Résultats complets', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Génération des tableaux', ['controller'=>'', 'action' => ''],['class' => 'btn btn-primary'])."<br /><br />";
	echo $this->Html->link('Passage de grade', ['controller'=>'', 'action' => ''],['class' => 'btn btn-warning'])."<br /><br />";

	echo $this->Html->link('Mon compte', ['controller'=>'', 'action' => ''],['class' => 'btn btn-danger'])."<br /><br />";
?>        
