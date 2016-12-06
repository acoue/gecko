<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Historiques</h3>
	<div class="blocBlancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <div class="row">
                	<label class="col-lg-8 control-label" for="name">Date</label>
                    <div class="col-lg-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$historique->created,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
                	<label class="col-lg-8 control-label" for="hasid">Utilisateur </label>
                    <div class="col-lg-14"><?= $this->Form->input('hasid', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$historique->user->prenom." ".$historique->user->nom,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />   
				<div class="row">
                	<label class="col-md-8 control-label" for="valeur">Valeur </label>
                    <div class="col-md-14"><?= $this->Form->input('valeur', ['label' => false,'id'=>'valeur',
														   	'div' => false,'type' => 'textarea', 'escape' => false,
															'class' => 'form-control', 'rows' => '5', 'cols' => '80',
                    										'value' => $historique->libelle,
                    										'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />	
			</div>									
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>



