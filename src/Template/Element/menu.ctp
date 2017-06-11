<?php 
	//echo $this->Html->link('Module licencié', ['controller'=>'Admin', 'action' => 'change',1],['class' => 'btn btn-primary'])."<br /><br />";

	if( MODULE_INSCRIPTION) echo $this->Html->link('Inscription', ['controller'=>'Admin', 'action' => 'change',5],['class' => 'btn btn-primary'])."<br /><br />";
	if( MODULE_COMPETITION) echo $this->Html->link('Competition', ['controller'=>'Admin', 'action' => 'change',2],['class' => 'btn btn-primary'])."<br /><br />";
	if( MODULE_GRADE) echo $this->Html->link('Passage de grade', ['controller'=>'Admin', 'action' => 'change',3],['class' => 'btn btn-primary'])."<br /><br />";
	echo "<br /><br /><br /><br /><br /><br />";
?>
		