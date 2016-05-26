<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Catégorie - Edition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Html->link(__('Edition'), ['action' => 'edit', $category->id],['class' => 'btn btn-default']) ?><br /><br />
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $category->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer la catégorie {0} ?', $category->name)]) ?><br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
			    <?= $this->Form->create($category, ['id'=>'formulaire']) ?>
				<div class="row">
                	<label class="col-md-8 control-label" for="name">Libellé</label>
                    <div class="col-md-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' => 'required', 
                    										'value' => h($category->name)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="type">Type <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('type', ['label' => false,'id'=>'type',
														   	'div' => false,
															'class' => 'form-control', 
															'required' =>'required', 
                    										'options' => ['0' => 'Individuel', '1'=>'Equipe'],
                    										'value' => h($category->type)]); ?>
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