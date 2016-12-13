<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Licenciés - Visualisation</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Html->link(__('Edition'), ['action' => 'edit', $licency->id],['class' => 'btn btn-default']) ?><br /><br />
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $licency->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer le licencié {0} ?', $licency->prenom." ".$licency->nom)]) ?><br /><br/>
			<?= $this->Html->link(__('Palmarès'), ['controller'=>'Palmares','action' => 'palmares',$licency->id],['class' => 'btn btn-success']) ?> <br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
				<div class="row">
                	<label class="col-md-8 control-label" for="nom">Nom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => h($licency->nom)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="prenom">Prénom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('prenom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => h($licency->prenom)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="region_id">Club <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('club_id', ['label' => false,'id'=>'club_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => h($licency->club->name),
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-md-8 control-label" for="ddn">Date de naissance</label>
                    <div class="col-md-14"><?= $this->Form->input('ddn', ['label' => false,'id'=>'ddn',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => h($licency->ddn)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="sexe">Sexe</label>
                    <div class="col-md-14"><?= $this->Form->input('sexe', ['label' => false,'id'=>'sexe',
														   	'div' => false,
															'class' => 'form-control',
															'disabled' => 'disabled', 
                    										'options'=>[''=>'','F'=>'Femme','H'=>'Homme'],
                    										'value' => $licency->sexe]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="licence">Numéro de licence </label>
                    <div class="col-md-14"><?= $this->Form->input('licence', ['label' => false,'id'=>'licence',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text',  
															'disabled' => 'disabled',
                    										'value' => h($licency->licence)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="grade">Grade</label>
                    <div class="col-md-14"><?= $this->Form->input('grade', ['label' => false,'id'=>'grade',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled',
                    										'value' => h($licency->grade->name)]); ?>
                    </div>                          
				</div><br />
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>