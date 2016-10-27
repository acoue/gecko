<?php
namespace Lib;


class Tableau8 {
	function dessineTableau($width,$height) {
		$sortie="";			
		$sortie.="<tr>
					<td width='".($width/3)."%'></td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1@</td>
					<td width='".$width."%' class='cellule".$height." cellule0000'></td>
					<td width='".$width."%' class='cellule".$height." cellule0000'></td>
					<td width='".$width."%' class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@2@</td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@3@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@4@</td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1001'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@5@</td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@6@</td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@7@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@8@</td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>";
		return $sortie;
	}
}