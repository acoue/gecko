<?php
//debug($this->request);die();
$cakeDescription = 'GeCKo';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gestion Compétition Kendo">
    <meta name="author" content="Anthony COUE">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div id="main">
		<header>
			<div class="container-fluid entete">
	        	<span class="header_logo"><?= $this->Html->image('logo.png', ['height' => '60px', 'title' => 'Gestion Compétition Kendo']) ?></span>
	            <span class="header_titre">GeCKo</span> 
	            <span class="header_texte">
	            <?php 
	            
	            	echo "Compétition sélectionnée : ".$competition-> name ." ".$competition->category->name."&nbsp;&nbsp;&nbsp;&nbsp;";
					echo $this->Html->link('Modifier', ['controller'=>'Competitions', 'action' => 'select'],['class' => 'btn btn-info']);
	           
	            ?>
	            
	            
			</div>
		</header><br />
		<div class="container-fluid">
			<div class="row text-center">
	    		<div class="col-lg-4 col-middle divBouton"><div class="item"><div class="content"><?php echo $this->element('bouton') ?></div></div></div>
	    		<div class="col-lg-20 col-top"><?= $this->fetch('content') ?></div>
			</div>
		</div><br /><br /> 
		<footer class="footer">
	   		<div class="container-fluid">
	        	<div class="col-lg-6 text-footer-left">&copy; Anthony COUE</div>
	        	<div class="col-lg-6 text-footer-left">
	        	<?php 
				echo $this->Html->link('Administration', ['controller'=>'admin', 'action' => 'index'],['class' => 'btn btn-default']);
				
	        	?> 
	        	
	        	</div>
	            <div class="col-lg-6 text-footer-right">Version 1.0<br />19/12/2015</div>                    
	            <div class="col-lg-6 text-footer-right">Mentions légales</div>
	  		</div>
	   </footer><!-- /.footer -->
	</div>


    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('main.js') ?>
</body>
</html>
