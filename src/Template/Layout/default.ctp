<?php
//debug($this->request);die();
$cakeDescription = 'GeCKo';

//Chargement de la session
$session = $this->request->session();
if($session->check("UserConnected")) $uc=$session->read("UserConnected");
else $uc =null;
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
    <?= $this->Html->css('jquery-ui.css') ?>
    <?= $this->Html->css('jquery.minicolors.css') ?>
    <?= $this->Html->css(['print'],['media' => 'print']); ?>
    
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
	            if($uc){
	            	if($session->check("Module")) $module=$session->read("Module");
	            	
	            	if($module==1) {
	            		echo "Module licenciés";
	            	} else if($module==2) {
	            		echo $competitionSelected-> name ." ".$competitionSelected->category->name."&nbsp;&nbsp;&nbsp;&nbsp;";
						echo $this->Html->link('Sélectioner', ['controller'=>'Competitions', 'action' => 'select'],['class' => 'btn btn-info']);
	            	} else if($module==3) {
	            		echo $passageSelected-> name ."&nbsp;&nbsp;&nbsp;&nbsp;";
						echo $this->Html->link('Sélectioner', ['controller'=>'Passages', 'action' => 'select'],['class' => 'btn btn-info']);
	            		
	            	} else if($module == 4) {
						echo "Administration";
	            	} else echo "";
	            }
				?>
	            
	            
			</div>
		</header><br />
		<div class="container-fluid">
			<div class="row text-center">
			
			<?php if($uc) { ?>
			
			
				<div class="col-lg-4 col-middle divBouton">
	    			<div class="item">
	    				<div class="content">
	   					<?php 
	   						if($session->check("Module")) $module=$session->read("Module");
	   						else $module = -1;
	    					
	    					if($module == '1' ) echo $this->element('menuLicencie'); //Espagce licencié
	    					else if ($module == '2') echo $this->element('menuCompetition'); //Espace competition	
	    					else if ($module == '3') echo $this->element('menuPassage'); //Espace passage de grade
	    					else echo $this->element('menu');
	    					
	    					if($uc->getProfil()=='admin') echo $this->element('menuAdmin'); //Menu administration
	    					
	    					//Menu mon compte
	    					echo $this->Html->link('Mon compte', ['controller'=>'Users', 'action' => 'compte'],['class' => 'btn btn-warning'])."<br /><br />";
	    					echo $this->Html->link('Déconnexion', ['controller'=>'Users', 'action' => 'logout'],['class' => 'btn btn-danger'])."<br /><br />";
	    					
	   					?>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-lg-20 col-top">
	    			<?= $this->Flash->render() ?>
	    			<?= $this->fetch('content') ?>
	    		</div>
			<?php } else {?>
			
	    		<div class="col-lg-24 col-top">
	    			<?= $this->Flash->render() ?>
	    			<?= $this->fetch('content') ?>
	    		</div>
			<?php } ?>
	    	
			</div>
		</div><br /><br /> 
		<footer class="footer">
	   		<div class="container-fluid">
	        	<div class="col-lg-6 text-footer-left">
	        	<?= $this->Html->image('by-nc-nd.eu.png', ['title' => "GeCKo de Anthony COUE est mis à disposition selon les termes de la licence Creative Commons Attribution - Pas d'Utilisation Commerciale - Pas de Modification 4.0 International."]) ?>
	        	&copy; Anthony COUE</div>
	        	<div class="col-lg-6 text-footer-left">
	        	
	        	
	        	</div>
	            <div class="col-lg-6 text-footer-right">Version 1.0<br />13/11/2016</div>                    
	            <div class="col-lg-6 text-footer-right">Mentions légales</div>
	  		</div>
	   </footer><!-- /.footer -->
	</div>


    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('jquery-ui.js') ?>
    
    <?= $this->Html->script('jquery.minicolors.js') ?>
    <?= $this->Html->script('jquery.minicolors.min.js') ?>
    
    <?= $this->Html->script('form-validator/jquery.form-validator.js') ?>
 	<?= $this->Html->script('form-validator/messages_fr.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('main.js') ?>
   
    <?= $this->Html->script('validatr.js') ?>    
    <?= $this->Html->script('userScript.js') ?>    
    <?= $this->Html->script('userFunction.js') ?>  
    
    <?= $this->fetch('script') ?>
</body>
</html>
