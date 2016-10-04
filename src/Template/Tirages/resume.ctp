<div class="blocblanc">
	<h2>Poules</h2>
	
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
			<h3>Liste des poules</h3>
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
					echo "<tr><td><b>Poule ".$poule."</b></td></tr>";
				} 
				echo "<tr><td>".$value['licency']['nom']."</td></tr>";
				$pouleTmp=$poule;
			}
			echo "</table></div>&nbsp;&nbsp;&nbsp;&nbsp;";
			?>
			<h3>Poules</h3>
			<br /><br /> 
			<?php 	
			$pouleTmp=0;
			$iCpt=1;
			foreach ($repartitions as $value) {
				//debug($value);
				
				$poule = $value['numero_poule'];
				
				if($poule != $pouleTmp) { 
					if($pouleTmp > 0) echo "</table>&nbsp;&nbsp;&nbsp;&nbsp;";
					$iCpt=1;
					echo "<table cellpadding='0' cellspacing='0' class='table table-bordered' >";
					echo "<tr>
						<td width='35%'>NOM/CLUB</td>
						<td width='5%'></td>
						";
					for($i=0;$i<3;$i++) echo "<td width='10%'>".$i."</td>";
					echo "<td width='10%'>Ippon</td>
						<td width='5%'></td>
						<td width='10%'>Classement</td></tr>";
				} 
				echo "<tr><td>".$value['licency']['prenom']."</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
				echo "<tr><td>".$value['licency']['nom']."</td><td>".$iCpt."</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
				echo "<tr><td>".$value['licency']['club']['name']."</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
				
				
				$iCpt++;
				$pouleTmp=$poule;
			}
			echo "</table>&nbsp;&nbsp;&nbsp;&nbsp;";
			?>
			
			
			
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
				
