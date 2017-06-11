<div class="blocblanc">
	<h2>Résultats poules</h2>
	
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
			<br /><br />
			<?php 	
			$pouleTmp=0;
			foreach ($resultatPoules as $value) {
				//debug($value);
				
				$poule = $value['numero_poule'];
				
				if($poule != $pouleTmp) { 
					if($pouleTmp > 0) echo "<tr><td colspan='2'>".$this->Html->link('Saisir', ['controller'=>'ResultatPoules', 'action' => 'edit',$pouleTmp],['class' => 'btn btn-success'])."</td></tr></table></div>&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<div class='pouleTab'><table cellpadding='0' cellspacing='0' class='table table-bordered'>";
					echo "<tr><td align='center'>Résultats : <b>Poule ".$poule."</b></td><td>Classement</td></tr>";
				} 
				echo "<tr><td align='center'>".$value['licency']['nom']."</td>";
				
				if($value['classement'] == 0) echo "<td><span class='badge'>".$value['classement']."</span></td></tr>";
				else if($value['classement'] > 2) echo "<td><span class='badge badge-warning'>".$value['classement']."</span></td></tr>";
				else echo "<td><span class='badge badge-success'>".$value['classement']."</span></td></tr>";
				
				
				
				
				
				$pouleTmp=$poule;
			}
			echo "<tr><td colspan='2'>".$this->Html->link('Saisir', ['controller'=>'ResultatPoules', 'action' => 'edit',$poule],['class' => 'btn btn-success'])."</td></tr></table></div><br /><br />";
			?>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>