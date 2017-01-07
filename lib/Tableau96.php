<?php
namespace Lib;


class Tableau96 {
	function dessineTableau($width,$height) {
		$sortie="";
		$sortie.="
				<tr>
					<td width='".($width/3)."%'>1.1</td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1@</td>
					<td width='".$width."%' class='cellule".$height." cellule0001'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height." cellule0001'></td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1@</td>
					<td width='".($width/3)."%'>1.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>12.2</td>
					<td class='cellule".$height." cellule0001'>@2@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@2@</td>
					<td>12.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>8.2</td>
					<td class='cellule".$height." cellule0011'>@3@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'>@3@</td>
					<td>8.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr><tr>
					<td>10.2</td>
					<td class='cellule".$height." cellule0001'>@4@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@4@</td>
					<td>10.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>4.2</td>
					<td class='cellule".$height." cellule0010'>@5@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'>@5@</td>
					<td>4.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>5.1</td>
					<td class='cellule".$height." cellule0001'>@6@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'>@6@</td>
					<td>5.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr><tr>
					<td ></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>3.1</td>
					<td class='cellule".$height." cellule0001'>@7@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'>@7@</td>
					<td>3.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>6.2</td>
					<td class='cellule".$height." cellule0001'>@8@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'>@8@</td>
					<td>6.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>9.1</td>
					<td class='cellule".$height." cellule0011'>@9@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'>@9@</td>
					<td>9.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr><tr>
					<td >7.1</td>
					<td class='cellule".$height." cellule0001'>@10@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@10@</td>
					<td >7.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>2.2</td>
					<td class='cellule".$height." cellule0010'>@11@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'>@11@</td>
					<td>2.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>11.1</td>
					<td class='cellule".$height." cellule0001'>@12@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'>@12@</td>
					<td>11.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td ></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>2.1</td>
					<td class='cellule".$height." cellule0001'>@13@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'>@13@</td>
					<td>2.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>11.2</td>
					<td class='cellule".$height." cellule0001'>@14@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'>@14@</td>
					<td>11.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>7.2</td>
					<td class='cellule".$height." cellule0011'>@15@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'>@15@</td>
					<td>7.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr><tr>
					<td>9.2</td>
					<td class='cellule".$height." cellule0001'>@16@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@16@</td>
					<td>9.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>3.2</td>
					<td class='cellule".$height." cellule0010'>@17@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'>@17@</td>
					<td>3.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>6.1</td>
					<td class='cellule".$height." cellule0001'>@18@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'>@18@</td>
					<td>6.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td ></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td ></td>
				</tr>
				<tr>
					<td>4.1</td>
					<td class='cellule".$height." cellule0001'>@19@</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'>@19@</td>
					<td>4.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>5.2</td>
					<td class='cellule".$height." cellule0001'>@20@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'>@20@</td>
					<td>5.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>10.1</td>
					<td class='cellule".$height." cellule0011'>@21@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'>@21@</td>
					<td>10.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td >8.1</td>
					<td class='cellule".$height." cellule0001'>@22@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@22@</td>
					<td >8.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td>1.2</td>
					<td class='cellule".$height." cellule0010'>@23@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'>@23@</td>
					<td>1.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td>12.1</td>
					<td class='cellule".$height." cellule0001'>@24@</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1101	'></td>
					<td class='cellule".$height." cellule0111'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'>@24@</td>
					<td>12.1</td>
				</tr>
				";
		return $sortie;
	}
}