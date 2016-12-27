<?php 
//debug($notes->toArray());die();
$listeDebut = "<select id='@' name='@' class='form-control'>";

$listeOui="<option value=-1 >Indécis</option><option value=0 >Non</option><option value=1 selected='selected' >Oui</option>";
$listeNon = "<option value=-1 >Indécis</option><option value=0 selected='selected' >Non</option><option value=1 >Oui</option>";
$listeIndecis = "<option value=-1 selected='selected' >Indécis</option><option value=0 >Non</option><option value=1 >Oui</option>";
 
$listeFin = "</select>";

?>
<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Passages de grades</h3>
	<div id="exTab2" class="container">	
		<ul class="nav nav-tabs">
			<li class="active">
	        	<a  href="#1" data-toggle="tab">Jurys</a></li>
			<li><a href="#2" data-toggle="tab">Postulants</a></li>
			<li><a href="#3" data-toggle="tab">Résultats</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="1">
				<h4>Membres du jury</h4>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-20"> 
						<table cellpadding="0" cellspacing="0" class="table table-striped">
						    <thead>
						        <tr>
					                <th>Nom</th>
					                <th>Prénom</th>
					                <th>Grade</th>
					                <th></th>
						        </tr>
						    </thead>
						    <tbody> 
						    <?php foreach ($juges as $juge): ?>
						        <tr>
					                <td><?= $juge->jury->prenom ?></td>
					                <td><?= $juge->jury->nom ?></td>
					                <td><?= $juge->jury->grade->name ?></td>
					                <td class="actions">
										<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $juge->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer le passage {0}?', $passage->name)]) ?>
			                		</td>
						        </tr>
						
						    <?php endforeach; ?>
						    </tbody>
						</table>
						<br /><br />						
						<p align="center">
							<?= $this->Html->link(__('Ajouter'), ['controller'=>'Juges','action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
						</p>
					</div>					
					<div class="col-lg-2"></div>
				</div>
			</div>
			<div class="tab-pane" id="2">
				<h4>Evalués</h4>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-20"> 
						<table cellpadding="0" cellspacing="0" class="table table-striped">
						    <thead>
						        <tr>
					                <th>Licencié</th>
					                <th>Numéro</th>
					                <th>Grade actuel</th>
					                <th>Grade presenté</th>
					                <th></th>
						        </tr>
						    </thead>
						    <tbody> 
						    <?php foreach ($evalues as $evalue): ?>
						        <tr>
					                <td><?= $evalue->licency->display_name ?></td>
					                <td><?= $evalue->numero ?></td>
					                <td><?= $tabGrades[$evalue->grade_actuel_id] ?></td>
					                <td><?= $tabGrades[$evalue->grade_presente_id] ?></td>
					                <td class="actions">
										<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $evalue->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer le passage {0}?', $passage->name)]) ?>
			                		</td>
						        </tr>
						
						    <?php endforeach; ?>
						    </tbody>
						</table>
						<br /><br />						
						<p align="center">
							<?= $this->Html->link(__('Ajouter'), ['controller'=>'evalues','action' => 'index'], ['class'=>'btn btn-default']) ?><br /><br />
							<?= $this->Html->link(__('Attribuer les numéros'), ['controller'=>'evalues','action' => 'numero'], ['class'=>'btn btn-info']) ?><br /><br />
						
						</p>
					</div>					
					<div class="col-lg-2"></div>
				</div>
				
				
				
				
			</div>
	        <div class="tab-pane" id="3">
				<h4>Résultats par membre du jury pour chaque postulant</h4>
				<div class="row">
					<div class="col-lg-24"> 
						<?= $this->Form->create(NULL,['id'=>'formulaire','url'=>'/evalues/note']); ?>
						<input type='hidden' id='passage_id' name='passage_id' value='<?= $passage->id ?>' />
						<table cellpadding="0" cellspacing="0" class="table tabResultat">		
							<thead>
								<tr>
									<th class='celluleGrise'>Postulant</th>
									<?php for($i=1; $i<=count($juges->toArray());$i++) echo "<th class='celluleGrise'>Jury n°".$i."</th>";?>
									<th class='celluleGrise'>Décision 1</th> 
									<?php for($i=1; $i<=count($juges->toArray());$i++) echo "<th class='celluleGrise'>Jury n°".$i."</th>";;?>
									<th class='celluleGrise'>Décision 2</th> 
									<th class='celluleGrise'>Resultat</th> 
								</tr>
							</thead>				    
						    <tbody> 
						    
						    <?php foreach ($evalues as $evalue): 

						    $noteNonTechnique=0;
						    $noteOuiTechnique=0;
						    $noteNonKata=0;
						    $noteOuiKata=0;
						    ?>
						        <tr>
					                <td class='celluleGrise'><?= $evalue->numero ?></td>
					                <?php 
					                for($i=1; $i<=count($juges->toArray());$i++) {
										$idEvalue = $evalue->licency->id;
										$idJuge = $juges->toArray()[$i-1]['id'];
										$idListe=$idEvalue."#".$idJuge;	
										
					                	foreach($notes as $note) {
											if($idEvalue == $note->licencie_id && $idJuge == $note->juge_id) {
												if($note->resultat_technique == 0) {
													echo "<td>".str_replace('@', "T#".$idListe,$listeDebut).$listeNon.$listeFin."</td>";
													$noteOuiTechnique++;
												} else if($note->resultat_technique == 1) {
													echo "<td>".str_replace('@', "T#".$idListe,$listeDebut).$listeOui.$listeFin."</td>";
													$noteNonTechnique++;
												} else echo "<td>".str_replace('@', "T#".$idListe,$listeDebut).$listeIndecis.$listeFin."</td>";
												
											} else echo "<td>".str_replace('@', "T#".$idListe,$listeDebut).$listeIndecis.$listeFin."</td>";
										}
					                }
					                ?>
					                <td><?php echo $noteOuiTechnique."<br />".$noteNonTechnique;?></td>					                
					                <?php 
					                for($i=1; $i<=count($juges->toArray());$i++) {
										$idEvalue = $evalue->licency->id;
										$idJuge = $juges->toArray()[$i-1]['id'];
										$idListe=$idEvalue."#".$idJuge;	
										
					                	foreach($notes as $note) {
											if($idEvalue == $note->licencie_id && $idJuge == $note->juge_id) {
												if($note->resultat_kata == 0) {
													echo "<td>".str_replace('@', "K#".$idListe,$listeDebut).$listeNon.$listeFin."</td>";
													$noteOuiKata++;
												} else if($note->resultat_kata == 1) {
													echo "<td>".str_replace('@', "K#".$idListe,$listeDebut).$listeOui.$listeFin."</td>";
													$noteNonKata++;
												} else echo "<td>".str_replace('@', "K#".$idListe,$listeDebut).$listeIndecis.$listeFin."</td>";
												
											} else echo "<td>".str_replace('@', "K#".$idListe,$listeDebut).$listeIndecis.$listeFin."</td>";
										}
					                }
					                ?>
					                <td><?php echo $noteOuiKata."<br />".$noteNonKata;?></td>		
					                <td>N/O</td>
						        </tr>						
						    <?php endforeach; ?>
						    </tbody>
						</table>
						<br /><br />						
						<p align="center">
			    			<?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
							<?= $this->Form->end() ?>
						</p>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>