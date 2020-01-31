<?php
namespace Lib;


class Tableau24 {
	function dessineTableau($width,$height) {
		$sortie="";	
		$sortie.="
				<tr>
					<td width='".($width/3)."%'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>1.1</td>
					<td class='cellule".$height." cellule0001'>@1.1@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
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
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>12.2</td>
					<td class='cellule".$height." cellule0001'>@12.2@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
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
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>8.2</td>
					<td class='cellule".$height." cellule0011'>@8.2@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
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
					<td class='cellule".$height."'></td>
				</tr><tr>
					<td>10.2</td>
					<td class='cellule".$height." cellule0001'>@10.2@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>4.2</td>
					<td class='cellule".$height." cellule0010'>@4.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>5.1</td>
					<td class='cellule".$height." cellule0001'>@5.1@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>3.1</td>
					<td class='cellule".$height." cellule0001'>@3.1@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>6.2</td>
					<td class='cellule".$height." cellule0001'>@6.2@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>9.1</td>
					<td class='cellule".$height." cellule0011'>@9.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr><tr>
					<td >7.1</td>
					<td class='cellule".$height." cellule0001'>@7.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>2.2</td>
					<td class='cellule".$height." cellule0010'>@2.2@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>11.1</td>
					<td class='cellule".$height." cellule0001'>@11.1@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
				</tr>
				<tr>
					<td>2.1</td>
					<td class='cellule".$height." cellule0001'>@2.1@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>11.2</td>
					<td class='cellule".$height." cellule0001'>@11.2@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>7.2</td>
					<td class='cellule".$height." cellule0011'>@7.2@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr><tr>
					<td>9.2</td>
					<td class='cellule".$height." cellule0001'>@9.2@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>3.2</td>
					<td class='cellule".$height." cellule0010'>@3.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td>6.1</td>
					<td class='cellule".$height." cellule0001'>@6.1@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>4.1</td>
					<td class='cellule".$height." cellule0001'>@4.1@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>5.2</td>
					<td class='cellule".$height." cellule0001'>@5.2@</td>
					<td class='cellule".$height." cellule0010'></td>
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
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>10.1</td>
					<td class='cellule".$height." cellule0011'>@10.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr><tr>
					<td >8.1</td>
					<td class='cellule".$height." cellule0001'>@8.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
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
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>1.2</td>
					<td class='cellule".$height." cellule0010'>@1.2@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
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
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
				</tr>
				<tr>
					<td>12.1</td>
					<td class='cellule".$height." cellule0001'>@12.1@</td>
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
					<td class='cellule".$height."'></td>
				</tr>";
		return $sortie;
	}
}