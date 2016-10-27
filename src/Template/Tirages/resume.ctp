<div class="blocblanc">
	<h2>Poules</h2>
	
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
				<br /><br />
				<div class='divBoutton'><?= $this->Html->link(__('Imprimer'), ['action' => ''],['class' => 'btn btn-info']) ?> </div>
				
				
				<br /><br />
				<br /><br /> 
				<?= $messagePouleResume ?>
				<br /><br />
				<div class="portrait">
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
				
				echo "<div class='sautPage'></div><br /><br />";
			 	
				echo "</div>";
				$pouleTmp=0;
				$iCpt=1;
				foreach ($repartitions as $value) {
					//debug($value);
					
					$poule = $value['numero_poule'];
					
					if($poule != $pouleTmp) { 
						if($pouleTmp > 0) echo "</table><br /><br /></div><div class='sautPage'></div>";
						$iCpt=1;
						
						$affiche = str_replace('@@@', $poule,$messagePoule); 
						
						if( $pouleTab[$poule]== 3) $affiche = str_replace('@@combat@@', "<b>Poule de 3 :</b> 1x2 - 1x3 - 2x3",$affiche);
						if( $pouleTab[$poule]== 4) $affiche = str_replace('@@combat@@', "<b>Poule de 4 :</b> 1x2 - 3x4 - 1x4 - 1x3 - 2x3 - 2x4",$affiche);
						if( $pouleTab[$poule]== 5) $affiche  	= str_replace('@@combat@@', "<b>Poule de 5 :</b> 1x2 - 3x4 - 1x5 - 2x3 - 4x5 - 1x3 - 2x5 - 1x4 - 3x5 - 2x4",$affiche);
						echo "<div class='portrait'>";
						echo $affiche;
						
						echo "<table cellpadding='0' cellspacing='0' width='100%' >";
						echo "<tr>
							<td width='30%'>NOM/CLUB</td>
							<td width='5%'></td>
							";
						for($i=0;$i< $pouleTab[$poule];$i++) echo "<td width='10%' class='cellule40 cellule1111'>".($i+1)."</td>";
						echo "<td width='10%' class='cellule40 cellule0101'></td><td width='5%' class='cellule40 cellule0111'></td><td width='10%' class='cellule40 cellule0111'>Classement</td></tr>";
					} 
					echo "<tr><td class='cellule40 cellule1110 libLicencie'>".$value['licency']['nom']."</td><td class='cellule40 cellule0110'></td>";
					for($i=0;$i< $pouleTab[$poule];$i++) {
						if($value['position_poule']==($i+1)) echo "<td class='cellule40 cellule0010 celluleGrise'></td>";
						else echo "<td class='cellule40 cellule0010'></td>";
					}
					echo "<td class='cellule40 cellule1111'>Ippon</td><td class='cellule40 cellule1111'></td><td class='cellule40 cellule0010'></td></tr>";
					
					echo "<tr><td class='cellule40 cellule1010 libLicencie'>".$value['licency']['prenom']."</td><td class='cellule40 cellule0010'>".$iCpt."</td>";
					for($i=0;$i< $pouleTab[$poule];$i++) {
						if($value['position_poule']==($i+1)) echo "<td class='cellule40 cellule0010 celluleGrise'></td>";
						else echo "<td class='cellule40 cellule0010'></td>";
					}
					echo"<td class='cellule40 cellule1111'>Nb de victoires</td><td class='cellule40 cellule1111'></td><td class='cellule40 cellule0010'></td></tr>";
					
					echo "<tr><td class='cellule40 cellule1011 libClub'>".$value['licency']['club']['name']."</td><td class='cellule40 cellule0011'></td>";
					for($i=0;$i< $pouleTab[$poule];$i++) {
						if($value['position_poule']==($i+1)) echo "<td class='cellule40 cellule0011 celluleGrise'></td>";
						else echo "<td class='cellule40 cellule0011'></td>";
					}
					echo "<td class='cellule1111'>Points</td><td class='cellule40 cellule1111'></td><td class='cellule40 cellule0011'></td></tr>";
					
					
					$iCpt++;
					$pouleTmp=$poule;
				}
				echo "</table></div><br /><br />";
				?>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
				
