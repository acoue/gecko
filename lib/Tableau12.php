<?php
namespace Lib;


class Tableau12 {
	function dessineTableau($width,$height) {
		$sortie="";	
		$sortie.="<tr>
					<td width='".($width/3)."%'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@1@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@2@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@3@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
				</tr><tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@4@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@5@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@6@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@7@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@8@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@9@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height." cellule0001'>@10@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@11@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@12@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>";
		return $sortie;
	}
}