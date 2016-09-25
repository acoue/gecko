<?php
namespace App\Controller;

use App\Controller\AppController;
use \Lib\FonctionTirage;

/**
 * Tirages Controller
 *
 * @property \App\Model\Table\TiragesTable $Tirages
 */
class TiragesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	//debug($nblicencies);die();
    	$this->loadModel('Competitions');
    	$competitionSelected = $this->Competitions->find('all')->where(['selected' => '1'])->first();
    	
    	if ($this->request->is('post')) {
    		 
    		$data =$this->request->data;
    		// Recuperation des competiteurs
    		$this->loadModel('Repartitions');
    		$nblicencies = $this->Repartitions->find('all')->where(['competition_id' => $competitionSelected->id])->count();
    		if($nblicencies > 0) {
    			
	    		//Mise à blanc des données dans la table répartition pour les licenciés
	    		$this->loadModel('Repartitions');
	    		$repartition = $this->Repartitions->query();
	    		$repartition->update()
	    		->set(['numero_poule'=>'0','position_poule'=>'0','resultat_combat'=>'0','point_combat'=>'0'])
	    		->where(['competition_id'=>$competitionSelected->id])
	    		->execute();
	    		
	    		//Mise à blanc des combats de la table combat_poule
	    		$this->loadModel('CombatPoules');
	    		$combat = $this->CombatPoules->query();
	    		$combat->delete()
	    		->where(['competition_id'=>$competitionSelected->id])
	    		->execute();
	    		
	    		//Suppression des données de la table resultat_poule
	    		$this->loadModel('ResultatPoules');
	    		$resultat = $this->ResultatPoules->query();
	    		$resultat->delete()
	    		->where(['competition_id'=>$competitionSelected->id])
	    		->execute();
	    		
	    		//Suppression des fichiers poule et tableau dans l'arborescence des fichiers
	    		 
	    		//Type
	    		$poule=$data['poule'];
	    		$tete=$data['tete'];
	    		$club=$data['club'];
	    		$type = "Type de tirage :";
	    		
				if($poule==3) {
					$type.=" poule de 3. ";
				} else if($poule==4) {
					$type.=" poule de 4. ";
				}else if($poule==5) {
					$type.=" poule de 5. ";	
				} else $type .= " tableau direct. ";
				
				if($tete=="O") $type.= "Avec éloignement des têtes de série. ";
				else $type.= "Sans éloignement des têtes de série. ";
				
				if($club=="O") $type.= "Avec éloignement des clubs.";
				else $type.= "Sans éloignement des clubs.";
				
	    		//Tirage au sort
	    		//1er cas : Tirage par poule
				if ($poule > -1 ) { 
					
					// Recuperation des competiteurs
	    			$this->loadModel('Repartitions');
					//Liste en tableau
					$queryCompetiteurs = $this->Repartitions->find()->select('licencie_id')->where(['competition_id' => $competitionSelected->id]);
					$competiteurs=[];
					foreach ($queryCompetiteurs as $key) {
						array_push($competiteurs,$key['licencie_id']);
					}
					//Calcul du nombre de competiteurs
					$nblicencies=count($competiteurs);
					
					//Test du nombre de participants par rapport au nombre de personnes dans la poule
					if($nblicencies < $poule) {
						//Il y a moins de personne que de place dans la poule
						// Tirage simple
						$listeFinale = FonctionTirage::repartitionSimple($competiteurs,$poule);
					} else {
						
						//calcul du nombre de poule 
						$nbPouleChoix=0;
						$nbPoulePlus=0;
						$nbPouleChoix = (int)($nblicencies / $poule);
						$nbPoulePlus = $nblicencies % $poule;
						
						//****************
						//Pas d'ecart club et pas d'ecart tete de serie
						if($club == "N" && $tete == "N") { 
							// Recuperation des competiteurs
							shuffle($competiteurs);
							$listeFinale=$competiteurs;
						}
						//****************
						//Pas d'ecart club et ecart tete de serie
						if($club == "N" && $tete == "O") { 
							//Recuperation des identifiants licenciés des tetes
							($data['tete1'] > -1) ? $tete1 = $data['tete1']:$tete1=null;
							($data['tete2'] > -1) ? $tete2 = $data['tete2']:$tete2=null;
							($data['tete3'] > -1) ? $tete3 = $data['tete3']:$tete3=null;
							($data['tete4'] > -1) ? $tete4 = $data['tete4']:$tete4=null;
							//Tirage des tetes
							$listeFinaleTmp=FonctionTirage::repartitionTete($competiteurs,$poule,$tete1,$tete2,$tete3,$tete4);
							//Tirage des autres
							//on retire les tete du tableau competiteur
							$result=array_diff($competiteurs, $listeFinaleTmp);
							//on fait un tirage simple
							$listeFinale=FonctionTirage::repartitionAleatoire($result,$poule,$listeFinaleTmp);
						}
						//****************
						//Ecart club et pas d'ecart tete de serie
						if($club == "O" && $tete == "N") { 

							//Liste triée par club
							shuffle($competiteurs);
							$compByClub=[];
							$compByClubModel = $this->loadModel('Licencies');
							$query = $compByClubModel->find()->contain(['Clubs']);
							$compTmp = $query->select([
														'club' => 'Clubs.id',
														'count' => $query->func()->count('Licencies.id')])
											 ->where(['licencies.id in ' => $competiteurs])
											 ->group('Clubs.id')
											 ->order('count DESC');
							
							foreach ($compTmp as $key):
								$resComp = $compByClubModel->find('All')
														   ->contain(['Clubs'])
														   ->select('Licencies.id')
														   ->where(['Clubs.id' => $key->club,'licencies.id in ' => $competiteurs])->toArray();
								foreach ($resComp as $resTmp) : 
									array_push($compByClub,$resTmp['id']);			
								endforeach;				
							endforeach;	
							
							$listeFinale=FonctionTirage::repartitionClub($compByClub,$poule);
				
						}		
						//****************
						//Ecart club et ecart tete de serie
						if($club == "O" && $tete == "O") {
							//Recuperation des identifiants licenciés des tetes
							($data['tete1'] > -1) ? $tete1 = $data['tete1']:$tete1=null;
							($data['tete2'] > -1) ? $tete2 = $data['tete2']:$tete2=null;
							($data['tete3'] > -1) ? $tete3 = $data['tete3']:$tete3=null;
							($data['tete4'] > -1) ? $tete4 = $data['tete4']:$tete4=null;
							//Tirage des tetes
							$listeFinaleTmp=FonctionTirage::repartitionTete($competiteurs,$poule,$tete1,$tete2,$tete3,$tete4);
							//Tirage des autres
							
							shuffle($competiteurs);
							$compByClub=[];
							$compByClubModel = $this->loadModel('Licencies');
							$query = $compByClubModel->find()->contain(['Clubs']);
							$compTmp = $query->select([
									'club' => 'Clubs.id',
									'count' => $query->func()->count('Licencies.id')])
									->where(['licencies.id in ' => $competiteurs])
									->group('Clubs.id')
									->order('count DESC');
								
							foreach ($compTmp as $key):
							$resComp = $compByClubModel->find('All')
							->contain(['Clubs'])
							->select('Licencies.id')
							->where(['Clubs.id' => $key->club,'licencies.id in ' => $competiteurs])->toArray();
							foreach ($resComp as $resTmp) :
							array_push($compByClub,$resTmp['id']);
							endforeach;
							endforeach;
							//Tirage pour club
							$listeFinale=FonctionTirage::repartitionClubAvecTete($compByClub,$listeFinaleTmp,$poule);
						}
					} 
					
					//Mise à jour table repatition 
					$iNumero = 1;
					$iBoucle=1;
					if( count($listeFinale) % $poule == 0){
						for($i=0;$i<count($listeFinale);$i++) {
							if ($iNumero > $poule) {
								$iBoucle++;
								$iNumero = 1;
							}
							//Mise a jour de la table Repartition
							$this->loadModel('Repartitions');
							$repartitionQuery = $this->Repartitions->query();
							$repartitionQuery->update()
										 ->set(['numero_poule'=>$iNumPoule,'position_poule'=>$iPosition])
										 ->where(['competition_id'=>$competitionSelected->id,'licencie-id'=>$listeFinale[$i]])
										 ->execute();

							$iNumero++;
						}
					} else {
						$quotient = (int) (count($listeFinale) / $poule); // on prend la partie entiere du resultat de la division
						//$reste = $nbParticipant - ($quotient * $nbInPoule);
						$reste = count($listeFinale) % $poule;
						 
						$iBoucle = 1;
						$iNumero = 1;
						for($i=0;$i<count($listeFinale);$i++) {
							if ($iBoucle <= ($quotient-$reste)){
								if ($iNumero > $poule) {
									$iBoucle++;
									$iNumero = 1;
								}
							} else {
								if ($iNumero > $poule +1) {
									$iBoucle++;
									$iNumero = 1;
								}
							}
							//Mise a jour de la table Repartition
							$this->loadModel('Repartitions');
							$repartitionQuery = $this->Repartitions->query();
							$repartitionQuery->update()
										 ->set(['numero_poule'=>$iBoucle,'position_poule'=>$iNumero])
										 ->where(['competition_id'=>$competitionSelected->id,'licencie_id'=>$listeFinale[$i]])
										 ->execute();

							$iNumero++;
						}
					}
					
					//Creation des combats
					$this->loadModel('CombatPoules');
					$combatQuery = $this->CombatPoules->query();
					$combatQuery
					->insert(['poule','ordre','licencie1','licencie2','competition_id'])
					->values(['poule'=>1,'ordre'=>2,'licencie1'=>'12','licencie2'=>'21','competition_id'=>$competitionSelected->id])
					->execute();
					
					
					debug($listeFinale);
					die();
				
					
				

					//Enregistrement
		     		$tirage = $this->Tirages->newEntity();
					$tirage->type = $type;
					$tirage->competition_id=$competitionSelected->id;
					
					if ($this->Tirages->save($tirage)) {
						$this->Flash->success(__('Le tirage a été effectué.'));
						return $this->redirect(['action' => 'resume']);
					} else {
						$this->Flash->error(__('Erreur lors du tirage au sort.'));
					}					
					
				}
			} else {
				$this->Flash->error(__('Erreur : merci d\'effectuer la répartition.'));
				return $this->redirect(['action' => 'index']);
			}
    	}
    	
    	//Recuperartion des licencies
    	$this->loadModel('Repartitions');
    	$repartitions = $this->Repartitions->find('all')->contain(['Licencies'])->where(['competition_id' => $competitionSelected->id])->order(['licencies.nom'=>'asc']);
    	$repartitionListe = ["-1"=>"Tête de série"];
    	foreach ($repartitions as $value):
    	array_push($repartitionListe,[$value->licencie_id => $value->licency->prenom." ".$value->licency->nom]);
    	endforeach;
    	
    	//debug($repartitionListe);die();
    	//Historique de tirage
        $tirages = $this->Tirages->find('all')->where(['competition_id' => $competitionSelected->id]);

        $this->set(compact('tirages','repartitions','repartitionListe'));
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function resume()
    {
        
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Tirage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tirage = $this->Tirages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tirage = $this->Tirages->patchEntity($tirage, $this->request->data);
            if ($this->Tirages->save($tirage)) {
                $this->Flash->success(__('The tirage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tirage could not be saved. Please, try again.'));
            }
        }
        $competitions = $this->Tirages->Competitions->find('list', ['limit' => 200]);
        $this->set(compact('tirage', 'competitions'));
        $this->set('_serialize', ['tirage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tirage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tirage = $this->Tirages->get($id);
        if ($this->Tirages->delete($tirage)) {
            $this->Flash->success(__('The tirage has been deleted.'));
        } else {
            $this->Flash->error(__('The tirage could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
