<?php
namespace Lib;


class Tableau {
	function dessineTableau($nb) {
		$sortie="";
		//TABLEAU DE 4
		if($nb==4) {
			$width=30;
			$sortie.="<tr>
						<td width='".$width."%' class='cellule0001'>@1@</td>
						<td width='".$width."%' class='cellule0000'></td>
						<td width='".$width."%' class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0010'></td>
						<td class='cellule0001'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0010'>@2@</td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0100'></td>
						<td class='cellule0000'></td>
						<td class='cellule1001'></td>
					</tr>
					<tr>
						<td class='cellule0001'>@3@</td>
						<td class='cellule0010'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0010'></td>
						<td class='cellule0011'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0011'>@4@</td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
					</tr>					
					<tr>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
					</tr>";
		}
		//TABLEAU DE 6
		
		
		//TABLEAU DE 8
		if($nb==8) {
			$width=25;
			$sortie.="<tr>
						<td width='".$width."%' class='cellule0001'>@1@</td>
						<td width='".$width."%' class='cellule0000'></td>
						<td width='".$width."%' class='cellule0000'></td>
						<td width='".$width."%' class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0010'></td>
						<td class='cellule0001'></td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0010'>@2@</td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0100'></td>
						<td class='cellule0000'></td>
						<td class='cellule1001'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0001'>@3@</td>
						<td class='cellule0010'></td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0010'></td>
						<td class='cellule0011'></td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0011'>@4@</td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
						<td class='cellule1001'></td>
					</tr>
					<tr>
						<td class='cellule0001'>@5@</td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0010'></td>
						<td class='cellule0001'></td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0010'>@6@</td>
						<td class='cellule0000'></td>
						<td class='cellule1000'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0100'></td>
						<td class='cellule0000'></td>
						<td class='cellule1001'></td>
						<td class='cellule1000'></td>
					</tr>
					<tr>
						<td class='cellule0001'>@7@</td>
						<td class='cellule0010'></td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0010'></td>
						<td class='cellule0011'></td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
					</tr>
					<tr>
						<td class='cellule0011'>@8@</td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
						<td class='cellule0000'></td>
					</tr>";
		}
		
		
		
		return $sortie;
	}
}