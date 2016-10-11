<?php //debug($licency->club_id);die();?>

<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Licenciés - Edition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $licency->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer le licencié {0} ?', $licency->prenom." ".$licency->nom)]) ?><br /><br/>
			<?= $this->Html->link(__('Palmarés'), ['controller'=>'Palmares','action' => 'palmares', $licency->id],['class' => 'btn btn-success']) ?> <br /><br />
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
			    <?= $this->Form->create($licency, ['id'=>'formulaire']) ?>
				<div class="row">
                	<label class="col-md-8 control-label" for="nom">Nom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($licency->nom)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="prenom">Prénom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('prenom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($licency->prenom)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="club_id">Club <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('club_id', ['label' => false,'id'=>'club_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options'=>$clubs, 
                    										'value' => h($licency->club_id),
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
					<?= $this->Form->button('Valider', ['type' => 'submit','class' => 'btn btn-default']) ?>
					<?= $this->Form->end() ?>
			    </div>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>