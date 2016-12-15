<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Jury - Ajout</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($jury, ['id'=>'formulaire']) ?>
			    <div class="row">
                	<label class="col-lg-8 control-label" for="nom">Nom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="prenom">Prénom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('prenom', ['label' => false,'id'=>'prenom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br />   
			    <div class="row">
                	<label class="col-lg-8 control-label" for="grade">Grade</label>
                    <div class="col-lg-16"><?= $this->Form->input('grade', ['label' => false,'id'=>'grade',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $grades]); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-lg-8 control-label" for="actif">Actif ? </label>
                	<div class="col-lg-16"><?= $this->Form->input('actif', ['label' => false,'id'=>'actif',
                											'options' => [1=>'Oui',0=>'Non'],
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
