<?php
namespace Lib;

class FonctionTirage {

	function repartitionSimple($listeCompetiteur,$nbInPoule) {

		//Shuffle
		shuffle($listeCompetiteur);
		while($nbInPoule > count($listeCompetiteur)) {
			array_push($listeCompetiteur,1); // Ajout a la liste finale du licencié 1 : -
		}
		return $listeCompetiteur;
	}
	
	function repartitionAleatoire($competiteurs,$poule,$listeAvecTete){
		shuffle($competiteurs);
		$placement=0;
		$pos = 0;	
		for($i=0; $i<count($listeAvecTete);$i++) {
			if($listeAvecTete[$placement]=="#") {
				if($pos < count($competiteurs) ) {
					$listeAvecTete[$placement] = $competiteurs[$pos];
					$pos++;
				}
			}
			$placement++;
		}
		return $listeAvecTete;
	}
	
	function repartitionClubAvecTete($competiteurs,$final,$poule) {

		$tailleListeFinale = count($final);
		$pos=0;
		$placement=0;
		
		for($i=0; $i< $tailleListeFinale;$i++) {
			if($placement > $tailleListeFinale) {
				if( $pos < $tailleListeFinale) $pos++;
				else $pos=0;
				$placement=$pos;
			}
			if($final[$placement]=="#" && in_array($final[$placement],$final) ) {
				$final[$placement] = $competiteurs[$i];
			}
			$placement += $poule;
		}
		return $final;
	}
	
	function repartitionClub($competiteurs,$poule) {
		$final=[];
		while(count($competiteurs) > count($final)) array_push($final,"#");
		
		$tailleListeFinale = count($final);
		$pos=0;
		$placement=0;
		
		for($i=0; $i< $tailleListeFinale;$i++) {
			if($placement > $tailleListeFinale) {
				if( $pos < $tailleListeFinale) $pos++;
				else $pos=0;
				$placement=$pos;
			} 
			if($final[$placement]=="#") {
				$final[$placement] = $CompSansTete[$i];
			} 
			$placement += $poule;	
		}
		return $final;		
	}
	
	function repartitionTete($competiteurs,$poule,$tete1,$tete2,$tete3,$tete4) {
		
		$final=[];
		//Remplissage de la liste final
		while(count($competiteurs) > count($final)) array_push($final,"#");
		//Calcul du nombre de tetes
		$nbTete=0;
		if($tete1) $nbTete++;
		if($tete2) $nbTete++;
		if($tete3) $nbTete++;
		if($tete4) $nbTete++;
		
		//positionnement de la tete 1
		if($tete1) $final[0]=$tete1*1;
		//positionnement de la tete 2
		if($tete2){
			//Si place 
			if($final[$poule] && $final[$poule]=="#") $final[$poule]=$tete2*1; 
			else {//sinon on place au premier emplacement libre
				for($i=0; $i<count($final);$i++) {
					if($final[$i]=="#") {
						$final[$i]=$tete2*1;
						break;
					}
				}
			}
		}
		//positionnement de la tete 3
		if($tete3){
			if($final[$poule*2] && $final[$poule*2]=="#") $final[$poule*2]=$tete3*1;
			else {//sinon on place au premier emplacement libre
				for($i=0; $i<count($final);$i++) {
					if($final[$i]=="#") {
						$final[$i]=$tete2*1;
						break;
					}
				}	
			}
		}
		//positionnement de la tete 4
		if($tete4){
			if($final[$poule*3] && $final[$poule*3]=="#") $final[$poule*3]=$tete4*1; 
			else {//sinon on place au premier emplacement libre mais en partant de la fin
				for($i<count($final);$i=0;$i--) {
					if($final[$i]=="#") {
						$final[$i]=$tete2*1;
						break;
					}
				}
			}
		}			
		return $final;
	}
}