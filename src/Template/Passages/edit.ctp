<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Passage de grade - Edition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $passage->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer le passage {0} ?', $passage->name)]) ?><br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
			    <?= $this->Form->create($passage, ['id'=>'formulaire']) ?>
				<div class="row">
                	<label class="col-md-8 control-label" for="name">Libellé <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($passage->name)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="date_passage">Date du passage <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-14"><?= $this->Form->input('date_passage', ['label' => false,'id'=>'date_passage',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => h($passage->date_passage),
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