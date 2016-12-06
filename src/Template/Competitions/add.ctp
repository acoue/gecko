<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Competition - Ajout</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($competition, ['id'=>'formulaire']) ?>
			    <div class="row">
                	<label class="col-lg-8 control-label" for="name">Libellé <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="date_competition">Date de compétition <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('date_competition', ['label' => false,'id'=>'date_competition',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br />   
			    <div class="row">
                	<label class="col-lg-8 control-label" for="lieux">Lieux</label>
                    <div class="col-lg-16"><?= $this->Form->input('lieux', ['label' => false,'id'=>'lieux',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="description">Description</label>
                    <div class="col-lg-16"><?= $this->Form->input('description', ['label' => false,'id'=>'description',
														   	'div' => false,'type' => 'textarea', 'escape' => false,
                    										'required'=>'',
															'class' => 'form-control', 'rows' => '5', 'cols' => '80']); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-lg-8 control-label" for="categorie_id">Catégories <span class="obligatoire"> *</span></label>
                	<div class="col-lg-16"><?= $this->Form->input('categorie_id', ['label' => false,
                											'options' => $categories,
                											'div' => false,
															'class' => 'form-control', 
                    										'required' =>'required']) ?>    
                	</div>                 
				</div><br />  
				<div class="row">
                	<label class="col-lg-8 control-label" for="type">Type <span class="obligatoire"> *</span></label>
                	<div class="col-lg-16"><?= $this->Form->input('type', ['label' => false,
                											'options' => [0 => 'Individuelle', 1=>'Equipe'],
                											'div' => false,
															'class' => 'form-control', 
                    										'required' =>'required']) ?>    
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
