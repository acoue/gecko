<div class="blocblanc">
	<h2>Passage de grades : <?=$passage->name ?></h2>
    <h3>Ajout de : <?= $licencie->display_name?></h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['controller'=>'Evalues','action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($evalue, ['id'=>'formulaire']) ?>
			    <input type='hidden' id='licencie_id' name='licencie_id' value='<?= $licencie->id ?>' />
			    <input type='hidden' id='passage_id' name='passage_id' value='<?= $passage->id ?>' />
			    <input type='hidden' id='grade_actuel_id' name='grade_actuel_id' value='<?= $licencie->grade_id ?>' />
			    <div class="row">
                	<label class="col-lg-8 control-label" for="licencie">Licencié</label>
                    <div class="col-lg-16"><?= $this->Form->input('licencie', ['label' => false,'id'=>'licencie',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'value' =>$licencie->display_name,'disabled'=>'disabled']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="grade">Grade actuel</label>
                    <div class="col-lg-16"><?= $this->Form->input('grade', ['label' => false,'id'=>'grade',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $grades, 'value'=>$licencie->grade_id,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />  
			    <div class="row">
                	<label class="col-lg-8 control-label" for="grade_presente_id">Grade présenté</label>
                    <div class="col-lg-16"><?= $this->Form->input('grade_presente_id', ['label' => false,'id'=>'grade_presente_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $grades, 'value'=>($licencie->grade_id) -1,
															'required' =>'required']); ?>
                    </div>                          
				</div><br />   
				
			    <?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>