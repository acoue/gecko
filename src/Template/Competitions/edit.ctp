<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Competition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $competition->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer la compétition # {0} ?', $competition->id)]) ?><br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
			    <?= $this->Form->create($competition, ['id'=>'edit_competition_form']) ?>
				<div class="row">
                	<label class="col-md-8 control-label" for="name">Libellé <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($competition->name)]); ?>
                    </div>                          
				</div><br />
		 		<div class="row">
                	<label class="col-md-8 control-label" for="date_competition">Date <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('date_competition', ['id'=>'date_competition',
                    										'label' => false,
														   	'div' => false,
															'class' => 'form-control', 
															'placeholder' => 'Date de la compétition', 
															'required' =>'required',
                    										'value' => h($competition->date_competition),
                    										'data-location' => 'bottom',
                    										'data-validation'=>'date',
                    										'data-validation-format' => 'dd/mm/yyyy']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-md-8 control-label" for="lieux">Lieux <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('lieux', ['label' => false,'id'=>'lieux',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'value' => h($competition->lieux)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="type">Type <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('type', ['label' => false,'id'=>'type',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required', 
                    										'options' => ['0' => 'Individuel', '1'=>'Equipe'],
                    										'value' => h($competition->type)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="description">Description</label>
                    <div class="col-md-14"><?= $this->Form->input('description', ['label' => false,'id'=>'description',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'textarea', 
                    										'value' => h($competition->description)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="catagorie_id">Catégorie <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-md-14"><?= $this->Form->input('catagorie_id', ['label' => false,'id'=>'catagorie_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'options'=>$categories, 
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


        <?php
            echo $this->Form->input('catagorie_id', ['options' => $categories]);
        ?>