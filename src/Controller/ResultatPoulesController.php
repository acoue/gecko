<?php
namespace App\Controller;

use App\Controller\AppController;
use Lib\Tableau4;
use Lib\Tableau6;
use Lib\Tableau8;
use Lib\Tableau12;
use Lib\Tableau16;
use Lib\Tableau24;
use Lib\Tableau32;
/**
 * ResultatPoules Controller
 *
 * @property \App\Model\Table\ResultatPoulesTable $ResultatPoules
 */
class ResultatPoulesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->contain(['Categories'])->where(['selected' => '1'])->first();
    	  
    	$resultatPoules = $this->ResultatPoules->find('all')->contain(['Licencies'])
    	->where(['competition_id'=>$competitionSelected->id])
    	->order('numero_poule')->toArray();
    	     	
        $this->set(compact('resultatPoules','competitionSelected'));
        $this->set('_serialize', ['resultatPoules']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resultat Poule id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($poule = null)
    {
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	
    	if ($this->request->is(['patch', 'post', 'put'])) {
    		
    		foreach ($this->request->data as $key => $value) {
    			$resultatQuery = $this->ResultatPoules->query();
    			$resultatQuery->update()
    					->set(['classement' => $value])
    					->where(['competition_id'=>$competitionSelected->id,'id'=>$key])->execute();
    			
			}
			$this->Flash->success(__('Sauvegarde effectuée'));
			return $this->redirect(['action' => 'index']);
    	}
    	
    	$resultatPoules = $this->ResultatPoules->find('all')->contain(['Licencies'])
    	->where(['competition_id'=>$competitionSelected->id,'numero_poule'=>$poule])
    	->order('numero_poule');
    	
    	$this->set(compact('poule','resultatPoules'));
    	$this->set('_serialize', ['resultatPoules']);
    }
    
    public function makeTableau() {

    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->contain(['Categories'])->where(['selected' => '1'])->first();
    	 
    	$resultatPoules = $this->ResultatPoules->find('all')->contain(['Licencies'])
    	->where(['competition_id'=>$competitionSelected->id, 'classement < ' => 3])
    	->order('numero_poule,classement');
    	
    	$nb = $resultatPoules->count();
    	$tailleTableau = 0;
    	$tabTableau = array(4,6,8,12,16,24,32,36,48,64,96);
    	
    	for ($i=0; $i<count($tabTableau); $i++) {
    		if($nb <= $tabTableau[$i]) {
    			$tailleTableau = $tabTableau[$i];
    			break;
    		}
    	}
    	
    	//entete du tableau
    	$resultat= "
    	<table cellpadding='0' cellspacing='0' width='100%' >
    		<tr>
		    	<td align='left'>Comité National de Kendo F.F.J.D.A.</td>
		    	<td align='right'>Date : ".$competitionSelected->date_competition."</td>
	    	</tr>
	    	<tr>
	    		<td align='left'>Commission sportive</td>
	    		<td></td>
	    	</tr>
	    	<tr>
	    		<td align='left'>Nom et visa du commissaire de table :</td>
	    		<td align='right'>Catégorie : ".$competitionSelected->category->name."</td>
	    	</tr>
	    	<tr>
	    		<td align='center' colspan='2'>".$competitionSelected->name."</td>
	    	</tr>
	    	<tr>
	    		<td align='center' colspan='2'><br /><br /><b><u>Tableau de ".$tailleTableau." combattants</u></b></td>
	    	</tr>
    	</table>";
    	$resultat.="<br /><br /><table cellpadding='0' cellspacing='0' width='100%' style='font-size: 80%;'>";
    	
    	$tailleTableau=32;
    	switch ($tailleTableau) {
    		case 4:
    			$resultat.=Tableau4::dessineTableau('30','50');
    			break;
    		case 6:
    			$resultat.=Tableau6::dessineTableau('20','40');
    			break;
    		case 8:
    			$resultat.=Tableau8::dessineTableau('22','40');
    			break;
    		case 12:
    			$resultat.=Tableau12::dessineTableau('18','25');
    			break;
    		case 16:
    			$resultat.=Tableau16::dessineTableau('15','20');
    			break;
    		case 24:
    			$resultat.=Tableau24::dessineTableau('12','10');
    			break;
    		case 32:
    			$resultat.=Tableau32::dessineTableau('8','20');
    			break;
    	}
    	
    	$resultat.="</table>";
    	
    	$resultatPoules = $this->ResultatPoules->find('all')->contain(['Licencies'])
    	->select(['prenom'=>'prenom', 'nom'=>'nom' , 'res'=> 'concat(numero_poule,".",classement)'])
    	->where(['competition_id'=>$competitionSelected->id,'classement < '=>3])
    	->order('numero_poule asc,classement asc');
    	
    	$tabResultat = [];
    	foreach ($resultatPoules as $value) {
    		$resultat = str_replace("@".$value->res."@",$value->prenom." ".$value->nom,$resultat);
    		
    	}
    	//remplacement des ligne non completees
    	$resultat=preg_replace('/@\d.\d@/', '', $resultat);
    	
    	$this->set(compact('resultat'));
    	 
    }
}
