<?php
namespace Lib;


class Tableau6 {
	function dessineTableau($width,$height) {
		$sortie="";	
		$sortie.="
				<tr>
					<td width='".($width/3)."%'>1.1</td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1.1@</td>
					<td width='".$width."%' class='cellule".$height." cellule0001'></td>
					<td width='".$width."%' class='cellule".$height." cellule0000'></td>
					<td width='".$width."%' class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td>3.1</td>
					<td class='cellule".$height." cellule0001'>@3.1@</td>
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
					<td>2.2</td>
					<td class='cellule".$height." cellule0011'>@2.2@</td>
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
					<td>1.2</td>
					<td class='cellule".$height." cellule0001'>@1.2@</td>
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
					<td>3.2</td>
					<td class='cellule".$height." cellule0010'>@3.2@</td>
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
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>
				<tr>
					<td>2.1</td>
					<td class='cellule".$height." cellule0001'>@2.1@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0000'></td>
					<td class='cellule".$height." cellule0000'></td>
				</tr>";

		return $sortie;
	}
}