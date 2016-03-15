<h4>Actions</h4>
<?php 

if( ! isset($this->request->params['prefix'])) {
	echo $this->Html->link('Accueil', ['controller'=>'Pages', 'action' => 'display'],['class' => 'btn btn-primary'])."<br />";
} else {
	if($this->request->params['prefix'] != 'admin') echo $this->Html->link('Accueil', ['controller'=>'Pages', 'action' => 'display'],['class' => 'btn btn-primary'])."<br />";
	else echo $this->Html->link('Retour à la gestion', ['prefix'=>null,'controller'=>'Pages', 'action' => 'display'],['class' => 'btn btn-primary']);
}
?>        
