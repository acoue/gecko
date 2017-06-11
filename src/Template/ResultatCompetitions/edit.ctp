<div class="blocblanc">
	<h2>Saisie des résultats</h2>
    <h3>Editiont</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
    			<?= $this->Form->create($resultatCompetition) ?>
    			<input type="hidden" id="competition_id" name="competition_id" value="<?= $competition->id ?>" />
    			
			    <div class="row">
                	<label class="col-lg-8 control-label" for="licencie_id">Compétiteur</label>
                    <div class="col-lg-16"><?= $this->Form->input('licencie_id', ['label' => false,'id'=>'licencie_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $licencies, 'value'=>$resultatCompetition->licencie_id,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
                	<label class="col-lg-8 control-label" for="resultat_id">Résultat</label>
                    <div class="col-lg-16"><?= $this->Form->input('resultat_id', ['label' => false,'id'=>'resultat_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $resultats, 'value'=>$resultatCompetition->resultat_id,
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
    
				<?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>	
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>