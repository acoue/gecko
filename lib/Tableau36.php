<?php
namespace Lib;


class Tableau36 {
	function dessineTableau($width,$height) {
		$sortie="";
		$sortie.="<tr>
					<td width='".($width/3)."%'>1.1</td>
					<td width='".$width."%' class='cellule".$height." cellule0001'>@1.1@</td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>	
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
					<td width='".$width."%' class='cellule".$height." '></td>
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
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td></td>
				</tr>
				<tr>
					<td width='".($width/3)."%'>18.2</td>
					<td class='cellule".$height." cellule0011'>@18.2@</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'>@17.2@</td>
					<td width='".($width/3)."%'>17.2</td>
				</tr>
				<tr>
					<td>4</td>
					<td class='cellule".$height." '></td>
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
					<td class='cellule".$height." '></td>
					<td>4</td>
				</tr>
				<tr>
					<td>5</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>5</td>
				</tr>
				<tr>
					<td>6</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td>6</td>
				</tr>
				<tr>
					<td>7</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>7</td>
				</tr>
				<tr>
					<td>8</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td>8</td>
				</tr>
				<tr>
					<td>9</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>9</td>
				</tr>
				<tr>
					<td>10</td>
					<td class='cellule".$height." '></td>
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
					<td class='cellule".$height." '></td>
					<td>10</td>
				</tr>
				<tr>
					<td>11</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>11</td>
				</tr>
				<tr>
					<td>12</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td>12</td>
				</tr>
				<tr>
					<td>13</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>13</td>
				</tr>
				<tr>
					<td>14</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td>14</td>
				</tr>
				<tr>
					<td>15</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>15</td>
				</tr>
				<tr>
					<td>16</td>
					<td class='cellule".$height." '></td>
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
					<td class='cellule".$height." '></td>
					<td>16</td>
				</tr>
				<tr>
					<td>17</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>17</td>
				</tr>
				<tr>
					<td>18</td>
					<td class='cellule".$height." '></td>
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
					<td class='cellule".$height." '></td>
					<td>18</td>
				</tr>
				<tr>
					<td>19</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>19</td>
				</tr>
				<tr>
					<td>20</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td>20</td>
				</tr>
				<tr>
					<td>21</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>21</td>
				</tr>
				<tr>
					<td>22</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td>22</td>
				</tr>
				<tr>
					<td>23</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>23</td>
				</tr>
				<tr>
					<td>24</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td>24</td>
				</tr>
				<tr>
					<td>25</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>25</td>
				</tr>
				<tr>
					<td>26</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td>26</td>
				</tr>
				<tr>
					<td>27</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>27</td>
				</tr>
				<tr>
					<td>28</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td>28</td>
				</tr>
				<tr>
					<td>29</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>29</td>
				</tr>
				<tr>
					<td>30</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td>30</td>
				</tr>
				<tr>
					<td>31</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>31</td>
				</tr>
				<tr>
					<td>32</td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td>32</td>
				</tr>
				<tr>
					<td>33</td>
					<td class='cellule".$height." cellule0001'></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." cellule0001'></td>
					<td>33</td>
				</tr>
				<tr>
					<td>34</td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule0010'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td class='cellule".$height." cellule1000'></td>
					<td>34</td>
				</tr>
				<tr>
					<td>35</td>
					<td class='cellule".$height." cellule0011'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1101'></td>
					<td class='cellule".$height." cellule0111'></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." '></td>
					<td class='cellule".$height." cellule1001'></td>
					<td>35</td>
				</tr>";
		return $sortie;
		}
	}