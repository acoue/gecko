<div class="blocblanc">
	<h2>Licencié : <?= $licencie->prenom." ".$licencie->nom." (".$licencie->club->name.")" ?></h2>
    <h3>Ajout Palmarès</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $palmare->id], ['class'=>'btn btn-warning','confirm' => __('Confirmer la suppression ?')]) ?><br /><br/>
				<?= $this->Html->link(__('Retour'), ['action' => 'palmares',$palmare->licencie_id],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($palmare, ['id'=>'formulaire']) ?>
			    <div class="row">
                	<label class="col-lg-8 control-label" for="competition">Competition <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('competition', ['label' => false,'id'=>'competition',
														   	'div' => false,
															'class' => 'form-control', 'value'=>$palmare->competition,
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="lieux">Lieux <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('lieux', ['label' => false,'id'=>'lieux',
														   	'div' => false,
															'class' => 'form-control', 'value'=>$palmare->lieux,
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="date_competition">Date <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('date_competition', ['label' => false,'id'=>'date_competition',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$palmare->date_competition,
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="resultat">Résultat <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('resultat', ['label' => false,'id'=>'resultat',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $resultats,'value'=>$palmare->resultat_id, 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="commentaire">Commentaire</label>
                	<div class="col-lg-16"><?= $this->Form->input('commentaire', ['label' => false,
                											'type' => 'textarea', 'rows' => '5', 'cols' => '80',
                											'div' => false, 'value'=>$palmare->commentaire,
															'class' => 'form-control']) ?>    
                	</div>                 
				</div><br /> 
			    <?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>
				<p align='left'><span class="obligatoire">&nbsp;&nbsp;&nbsp;&nbsp;<sup>*</sup></span> Champ obligatoire</p>	
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>