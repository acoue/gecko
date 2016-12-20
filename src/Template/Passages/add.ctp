<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Passage de grade - Ajout</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($passage, ['id'=>'formulaire']) ?>
				<div class="row">
                	<label class="col-md-8 control-label" for="discipline_id">Discipline</label>
                    <div class="col-md-12"><?= $this->Form->input('discipline_id', ['label' => false,'id'=>'discipline_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $disciplines, 
                    										'value' => $passage->discipline_id]); ?>
                    </div>                          
				</div><br />
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
                	<label class="col-lg-8 control-label" for="date_passage">Date du passage <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('date_passage', ['label' => false,'id'=>'date_passage',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 	
				<div class="row">
                	<label class="col-lg-8 control-label" for="archive">Archivé</label>
                	<div class="col-lg-16"><?= $this->Form->input('archive', ['label' => false,
                											'options' => [0 => 'Non', 1=>'Oui'],
                											'div' => false,'value'=>$passage->archive,
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
