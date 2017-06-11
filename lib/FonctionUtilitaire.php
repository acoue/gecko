<?php
namespace Lib;

class FonctionUtilitaire {
	 
	public static function dateLongue($date){
		$strDate = mb_convert_encoding('%A %d %B %Y %Hh%M','ISO-8859-9','UTF-8');
		return iconv("ISO-8859-9","UTF-8",strftime($strDate ,strtotime($date)));
	}
	 
	public static function dateTimeToMySQL($date){
		$tabDate = explode('/' , $date);
		$date  = $tabDate[2].'-'.$tabDate[1].'-'.$tabDate[0];
		$date = date( 'Y-m-d H:i:s', strtotime($date) );
		return $date;
	}
	 
	public static function dateToMySQL($date){
		$tabDate = explode('/' , $date);
		$date  = $tabDate[2].'-'.$tabDate[1].'-'.$tabDate[0];
		$date = date( 'Y-m-d', strtotime($date) );
		return $date;
	}
	

	public static function dateFromMySQL($date){
		$date = date( 'd/m/Y', strtotime($date) );
		return $date;
	}
	public static function dateTimeFromMySQL($date){
		$date = date( 'd/m/Y H:i:s', strtotime($date) );
		return $date;
	} 
	
	public static function replaceCaractereSpeciaux($chaine) {
		$caractereSpeciaux = ['á','à','â','ã','ä','å','æ','Á','À','Â','Ã','Ä','Å','Æ','é','è','ê','ë','É','È','Ê','Ë',
				'Í','Ì','Î','Ï','Í','í','ì','î','ï','ó','ò','ô','õ','º','ö','ð','ø','Ó','Ò','Ô','Õ','Ö','Ø',
				'ú','ù','û','ü','Ú','Ù','Û','Ü','ý','ý','ÿ','Š','š','ç','Ç','Ð','ñ','Ñ','Ý','Ž','ž','þ','Þ','ƒ','ß','Œ','œ'];
		$caractere = ['a','a','a','a','a','a','a','A','A','A','A','A','A','A','e','e','e','e','E','E','E','E',
				'I','I','I','I','I','i','i','i','i','o','o','o','o','o','o','o','o','O','O','O','O','O','O',
				'u','u','u','u','U','U','U','U','y','y','y','S','s','c','C','Dj','n','N','Y','Z','z','b','B','f','ss','Oe','oe'];

		return str_replace($caractereSpeciaux , $caractere,$chaine);
	}
	 
	public static function resumeTexte($texte) {

		if(strlen($texte) > 50 ) return substr($texte,0,45)." (...)";
		else return $texte;
	}
	 
	public static function cleanNomRepertoire($string) {

		//debug($string);
		//debug(mb_detect_encoding($string, "auto"));
		//Tableau caracteres speciaux plus espace
		$caractereSpeciaux = [" ","-","$","&","#","^","$","*","Â£","$","â‚¬","!","%","Â§","?",",",";",":",".","<",">"];
		//Majuscule
		$result = strtoupper($string);
		$result = str_replace($caractereSpeciaux,"_",$result);
		$result = FonctionHas::replaceCaractereSpeciaux($result);

		//debug($result);die();

		return $result;
	}
	 
	public static function cleanTexteToMinuscule($string){

		$tmp = strtolower(FonctionHas::replaceCaractereSpeciaux($string));
		$tmp = str_replace(" ","",$tmp);
		$tmp = str_replace("-","",$tmp);
		$tmp = str_replace("'","",$tmp);
		return $tmp;
	}

	//            public static function hexToUtf8($chaine){
	//                           $chaineUtf8 =  str_replace( ['&#xE0;','&#xE2;','&#xE6;','&#xC7;','&#xE7;','&#xC8;','&#xE8;','&#xC9;','&#xE9;','&#xCA;','&#xEA;','&#xCB;','&#xEB;','&#xCE;','&#xEE;','&#xCF;','&#xEF;','&#xD4;','&#xF4;','&#x152;','&#x153;','&#xD9;','&#xF9;','&#xDB;','&#xFB;','&#xDC;','&#xFC;','&#x80;'],
	//                                                           ['Ã ','Ã¢','Ã¦','Ã‡','Ã§','Ãˆ','Ã¨','Ã‰','Ã©','ÃŠ','Ãª' ,'Ã‹' ,'Ã«','ÃŽ','Ã®','Ã�','Ã¯','Ã”','Ã´','Å’','Å“','Ã™','Ã¹','Ã›','Ã»','Ãœ','Ã¼','â‚¬'],
	//                                                           $chaine);
	//                           return utf8_decode($chaineUtf8);
	//            }

	public static function getListeDossier($repertoire,$idRepSelected){
		//debug($repertoire);die();
		echo "<ul class='repHas'>";
		if(count($repertoire)>0) {
			foreach ($repertoire as $rep) {
				//echo " |--".$this->Html->link($child2['name'], ['action' => 'index', $child2['id']])."<br />";
				echo "<li class='directory collapsed'>";
				if($rep['id']==$idRepSelected) echo "<b><a href='".HTTP_ROOT."/Repertoires/index/".$rep['id']."' target='_self'>".$rep['name']."</a></b>";
				else echo "<a href='".HTTP_ROOT."/Repertoires/index/".$rep['id']."' target='_self'>".$rep['name']."</a>";
				 
				if(count($rep['children']) >0) {
					FonctionHas::getListeDossier($rep['children'],$idRepSelected);
				}
				echo "</li>";
			}
		}
		echo "</ul>";
	}
}