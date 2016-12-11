<div class="blocblanc">
	<h2>Inscription</h2>
    <h3>Compétition</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
    			<?= $this->Form->create($inscriptionCompetition, ['id'=>'formulaire']) ?>
			    <div class="row">
                	<label class="col-lg-8 control-label" for="licencie_id">Licencié</label>
                    <div class="col-lg-16"><?= $this->Form->input('licencie_id', ['label' => false,'id'=>'licencie_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $licencies, 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="competition_id">Compétition</label>
                    <div class="col-lg-16"><?= $this->Form->input('competition_id', ['label' => false,'id'=>'competition_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $competitions, 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="commentaire">Commentaire</label>
                    <div class="col-lg-16"><?= $this->Form->input('commentaire', ['label' => false,'id'=>'commentaire',
														   	'div' => false,'type' => 'textarea', 'escape' => false,
                    										'required'=>'',
															'class' => 'form-control', 'rows' => '5', 'cols' => '80']); ?>
                    </div>                          
				</div><br /> <br /> 
				<input type="hidden" id="user_id" name="user_id" value="<?= $user->getId() ?>"/>
				<?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>