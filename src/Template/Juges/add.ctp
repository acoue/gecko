<div class="blocblanc">
	<h2>Passage : <?= $passage->name ?></h2>
    <h3>Ajout d'un membre du jury</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['controller'=>'passages','action' => 'gestion'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($juge, ['id'=>'formulaire']) ?>
			    <input type='hidden' id='passage_id' name='passage_id' value='<?= $passage->id ?>' />
				<div class="row">
                	<label class="col-md-8 control-label" for="jury_id">Membre du Jury</label>
                    <div class="col-md-12"><?= $this->Form->input('jury_id', ['label' => false,'id'=>'jury_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $jurys]); ?>
                    </div>                          
				</div><br />				
			    <?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
