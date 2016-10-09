<div class="blocblanc">
	<h2>Poules</h2>
	
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
			<h3>Liste des poules</h3>
			<br /><br /> 
			<?= $messagePoule ?>
			<br /><br />
			<?php 	
			$pouleTmp=0;
			foreach ($repartitions as $value) {
				//debug($value);
				
				$poule = $value['numero_poule'];
				
				if($poule != $pouleTmp) { 
					if($pouleTmp > 0) echo "</table></div>&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<div class='pouleTab'>";
					echo "<table cellpadding='0' cellspacing='0' class='table table-bordered' >";
					echo "<tr><td align='center'><b>Poule ".$poule."</b></td></tr>";
				} 
				echo "<tr><td align='center'>".$value['licency']['nom']."</td></tr>";
				$pouleTmp=$poule;
			}
			echo "</table></div>&nbsp;&nbsp;&nbsp;&nbsp;";
			?>
			<br /><br />
			<?= $this->Html->link(__('Imprimer'), ['action' => 'printPoule'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
				
