<?php
namespace Lib;


class Tableau32 {
	function dessineTableau($width,$height) {
		$sortie="";	
		$sortie.="<tr>
					<td width='".($width/3)."%'>1.1</td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1.1@</td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height."'></td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@2.1@</td>
					<td width='".($width/3)."%'>2.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>16.2</td>
					<td class='cellule".$height." cellule0010'>@16.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'>@15.2@</td>
					<td width='".($width/3)."%'>15.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>9.1</td>
					<td class='cellule".$height." cellule0001'>@9.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule00100'></td>
					<td class='cellule".$height." cellule0001'>@10.1@</td>
					<td width='".($width/3)."%'>10.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>8.2</td>
					<td class='cellule".$height." cellule0011'>@8.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'>@7.2@</td>
					<td width='".($width/3)."%'>7.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td></td>
				</tr><tr>
					<td width='".($width/3)."%'>5.1</td>
					<td class='cellule".$height." cellule0001'>@5.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@6.1@</td>
					<td width='".($width/3)."%'>6.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>12.2</td>
					<td class='cellule".$height." cellule0010'>@12.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'>@11.2@</td>
					<td width='".($width/3)."%'>11.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>13.1</td>
					<td class='cellule".$height." cellule0001'>@13.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height."  cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'>@14.1@</td>
					<td width='".($width/3)."%'>14.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>4.2</td>
					<td class='cellule".$height." cellule0011'>@4.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'>@3.2@</td>
					<td width='".($width/3)."%'>3.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td></td>
				</tr><tr>
					<td width='".($width/3)."%'>3.1</td>
					<td class='cellule".$height." cellule0001'>@3.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@4.1@</td>
					<td width='".($width/3)."%'>4.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>14.2</td>
					<td class='cellule".$height." cellule0010'>@14.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'>@13.2@</td>
					<td width='".($width/3)."%'>13.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>11.1</td>
					<td class='cellule".$height." cellule0001'>@11.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@12.1@</td>
					<td width='".($width/3)."%'>12.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height."'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>6.2</td>
					<td class='cellule".$height." cellule0011'>@6.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'>@5.2@</td>
					<td width='".($width/3)."%'>5.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td></td>
				</tr>
                <tr>
					<td width='".($width/3)."%'>7.1</td>
					<td class='cellule".$height." cellule0001'>@7.1@</td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height."'></td>
					<td class='cellule".$height." cellule0001'>@8.1@</td>
					<td width='".($width/3)."%'>8.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>10.2</td>
					<td class='cellule".$height." cellule0010'>@10.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'>@9.2@</td>
					<td width='".($width/3)."%'>9.2</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0100'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0100'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>15.1</td>
					<td class='cellule".$height." cellule0001'>@15.1@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'>@16.1@</td>
					<td width='".($width/3)."%'>16.1</td>
				</tr>
				<tr>
					<td></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>2.2</td>
					<td class='cellule".$height." cellule0011'>@2.2@</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1101'></td>
					<td class='cellule".$height." cellule0111'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'>@1.2@</td>
					<td width='".($width/3)."%'>1.2</td>
				</tr>";
		return $sortie;
	}
}