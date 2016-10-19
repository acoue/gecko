<?php
namespace Lib;


class Tableau16 {
	function dessineTableau() {
		$sortie="";
		
		$width=15;
		$height=30;
		
		$sortie.="<tr>
					<td width='".($width/3)."%'></td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1@</td>
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
					<td class='cellule".$height." cellule0010'>@2@</td>
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
					<td class='cellule".$height." cellule0001'>@3@</td>
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
					<td class='cellule".$height." cellule0011'>@4@</td>
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
					<td class='cellule".$height." cellule0001'>@5@</td>
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
					<td class='cellule".$height." cellule0010'>@6@</td>
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
					<td class='cellule".$height." cellule0001'>@7@</td>
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
					<td class='cellule".$height." cellule0011'>@8@</td>
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
					<td class='cellule".$height." cellule0001'>@9@</td>
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
					<td class='cellule".$height." cellule0010'>@10@</td>
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
					<td class='cellule".$height." cellule0001'>@11@</td>
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
					<td class='cellule".$height." cellule0011'>@12@</td>
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
					<td class='cellule".$height." cellule0001'>@13@</td>
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
					<td class='cellule".$height." cellule0010'>@14@</td>
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
					<td class='cellule".$height." cellule0001'>@15@</td>
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
					<td class='cellule".$height." cellule0011'>@16@</td>
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