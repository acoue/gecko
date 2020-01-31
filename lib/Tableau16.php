<?php
namespace Lib;


class Tableau16 {
	function dessineTableau($width,$height) {
		$sortie="";	
		$sortie.="<tr>
					<td width='".($width/3)."%'></td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1.1@</td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@8.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@5.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@4.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
				</tr><tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@3.1@</td>
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
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@6.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@7.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@2.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height." cellule0001'>@2.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@7.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@6.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@3.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height." cellule0001'>@4.1@</td>
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
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'>@5.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0001'>@8.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0011'>@1.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
				</tr>";
		return $sortie;
	}
}