<div class="blocblanc">
	<h2>Résultats poules n° <?= $poule ?></h2>
	
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5"><br /><br />
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
			    <?= $this->Form->create(null, ['id'=>'formulaire']) ?>
			
			
			<?php 
			$tabClassement=[];
			if($resultatPoules->count() == 3) $tabClassement=[1=>"1er",2=>"2ème",3=>"3ème"];
			else if($resultatPoules->count() == 4) $tabClassement=[1=>"1er",2=>"2ème",3=>"3ème",4=>"4ème"];
			else if($resultatPoules->count() == 5) $tabClassement=[1=>"1er",2=>"2ème",3=>"3ème",4=>"4ème",5=>"5ème"];
				
			foreach ($resultatPoules as $value) { ?>
				
				<div class="row">
                    <div class="col-md-15"><?= $this->Form->input( $value->id.'-name', ['label' => false,'id'=>$value->id.'-name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => $value->licency->prenom." ".$value->licency->nom]); ?>
                    </div>
                    <div class="col-md-4"><?= $this->Form->input( $value->id, ['label' => false,'id'=>$value->id,
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $tabClassement, 
                    										'value' => $value->classement]); ?>
                    </div>                          
				</div><br />
				
				
				
				
			<?php }?><br />
				<div class="row">
					<?= $this->Form->button('Valider', ['type' => 'submit','class' => 'btn btn-default']) ?>
					<?= $this->Form->end() ?>
			    </div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>