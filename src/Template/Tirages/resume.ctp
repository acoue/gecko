<div class="blocblanc">
	<h2>Poules</h2>
	
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
				<br /><br />
				<div class='divBoutton'>
					<input type="button" class = 'btn btn-info' onclick="javascript:window.print()" value="Imprimer" /> &nbsp;&nbsp;&nbsp;&nbsp;					
					<?= $this->Html->link(__('Voir les poules'), ['action' => 'affichePoule'],['class' => 'btn btn-warning']) ?> 
				</div>
				<br /><br /> 
				<?= $messagePouleResume ?>
				<br /><br />
				<div class="portrait">
				<?php 	
				$pouleTmp=0;
				foreach ($repartitions as $value) {
					//debug($value);
					
					$poule = $value['numero_poule'];
					
					if($poule ==0) {
						echo "<b>Tirage en tableau ou non effectué</b>";	
						break;
					}
					
					if($poule != $pouleTmp) { 
						if($pouleTmp > 0) echo "</table></div>&nbsp;&nbsp;&nbsp;&nbsp;";
						echo "<div class='pouleTab'>";
						echo "<table cellpadding='0' cellspacing='0' class='table table-bordered' >";
						echo "<tr><td align='center'><b>Poule ".$poule."</b></td></tr>";
					} 
					echo "<tr><td align='center'>".$value['licency']['prenom']." ".$value['licency']['nom']."</td></tr>";
					$pouleTmp=$poule;
				}
				echo "</table></div>&nbsp;&nbsp;&nbsp;&nbsp;";
			 	?>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
				
