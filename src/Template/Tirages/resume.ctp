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
					echo "<table cellpadding='0' cellspacing='0' width='100%' >";
					echo "<tr>
						<td width='30%'>NOM/CLUB</td>
						<td width='5%'></td>
						";
					for($i=0;$i< $pouleTab[$poule];$i++) echo "<td width='10%' class='cellule1111'>".($i+1)."</td>";
					echo "<td width='10%' class='cellule0101'></td><td width='5%' class='cellule0111'></td><td width='10%' class='cellule0111'>Classement</td></tr>";
				} 
				echo "<tr><td class='cellule1110 libLicencie'>".$value['licency']['nom']."</td><td class='cellule0110'></td>";
				for($i=0;$i< $pouleTab[$poule];$i++) {
					if($value['position_poule']==($i+1)) echo "<td class='cellule0010 celluleGrise'></td>";
					else echo "<td class='cellule0010'></td>";
				}
				echo "<td class='cellule1111'>Ippon</td><td class='cellule1111'></td><td class='cellule0010'></td></tr>";
				
				echo "<tr><td class='cellule1010 libLicencie'>".$value['licency']['prenom']."</td><td class='cellule0010'>".$iCpt."</td>";
				for($i=0;$i< $pouleTab[$poule];$i++) {
					if($value['position_poule']==($i+1)) echo "<td class='cellule0010 celluleGrise'></td>";
					else echo "<td class='cellule0010'></td>";
				}
				echo"<td class='cellule1111'>Nb de victoires</td><td class='cellule1111'></td><td class='cellule0010'></td></tr>";
				
				echo "<tr><td class='cellule1011 libClub'>".$value['licency']['club']['name']."</td><td class='cellule0011'></td>";
				for($i=0;$i< $pouleTab[$poule];$i++) {
					if($value['position_poule']==($i+1)) echo "<td class='cellule0011 celluleGrise'></td>";
					else echo "<td class='cellule0011'></td>";
				}
				echo "<td class='cellule1111'>Points</td><td class='cellule1111'></td><td class='cellule0011'></td></tr>";
				
				
				$iCpt++;
				$pouleTmp=$poule;
			}
			echo "</table>&nbsp;&nbsp;&nbsp;&nbsp;";
			?>
			<br /><br />
			<?= $this->Html->link(__('Imprimer'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			<br /><br />
			http://caketuts.key-conseil.fr/index.php/2015/05/18/generer-du-pdf-sous-cakephp-v3/
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
				
