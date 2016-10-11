<div class="blocBlanc">
<h2>Contacter l'utilisateur : <?= $user->prenom ?> <?= $user->nom?></h2>
<div class="blocBlancContent">
	<div class="row">
		<div class="col-md-2"></div>
    		<?= $this->Form->create($user, ['id'=>'contact_form','name'=>'contact_form','enctype' => 'multipart/form-data']); ?>
			<?= $this->Form->hidden('user_id',['value' => $user->id]);?>
			<div class="col-md-8">	 		
				<div class="row">
                	<label class="col-md-4 control-label" for="sujet">Sujet <span class="obligatoire"><sup> *</sup></span></label> 
                    <div class="col-md-8"><?= $this->Form->input('sujet', ['label' => false,
														   	'div' => false,
															'class' => 'form-control', 
															'placeholder' => 'Sujet',
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>
				</div><br /> 
		 		<div class="row">
                	<label class="col-md-4 control-label" for="body">Message <span class="obligatoire"><sup> *</sup></span></label> 
                    <div class="col-md-8"><?= $this->Form->textarea('body', ['label' => false,
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>
				</div><br /> 
				<div class="row">
					<label class="col-md-4 control-label" for="fichier">Fichier (Taille max : 10 Mo)</span></label>
                    <div class="col-md-8"><?= $this->Form->input('fichier', ['label' => false,'id'=>'fichier',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'file']); ?>
                    </div>
				</div><br /> 	
			</div>
		  	<div class="col-md-2"></div>
		</div><br /><br />
		<p align="center">
			<?= $this->Form->button('Envoyer', ['type' => 'submit','class' => 'btn btn-default']) ?>
			<?= $this->Html->link('Retour', '/users/index', ['class' => 'btn btn-info']);?>
	    </p>
<?= $this->Form->end() ?>
		<p><span class="obligatoire">&nbsp;&nbsp;&nbsp;&nbsp;<sup>*</sup></span> Champ obligatoire</p>
	</div>
</div>