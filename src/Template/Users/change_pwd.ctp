<div class="blocblanc">
	<h2>Edition de son compte utilisateur</h2>
    <h3>Changement de mot de passe</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Html->link(__('Retour'), ['action' => 'compte'],['class' => 'btn btn-info']) ?><br /><br /> 
			</div>
			<?= $this->Form->create($user, ['id'=>'formulaire', 'url' => '/Users/changePwd']) ?>
			<div class="col-lg-15"> 
				<div class="row">
					<div class="alert alert-info">
						<b>Attention : Le mot de passe doit contenir au minimum 8 caractères.</b><br />
						<ul>
							<li>Si le mot de passe ne contient pas de lettres majuscules ou de chiffres, alors il est considéré comme de complèxité faible</li>
							<li>Si le mot de passe contient une lettre majuscule ou un nombre alors il est considéré comme de complèxité moyenne</li>
							<li>Si le mot de passe contient une lettre majuscule, un nombre et un caractère particulier alors il est considéré comme de complèxité forte</li>
						</ul>
					</div>			
				</div><br />
				<div  class="row">		
					<label class="col-lg-8 control-label" for="pass1">Mot de passe <br />(8 caractères minimun)</label>
					<div class="col-lg-8">
						<?= $this->Form->input('pass1', ['label' => false,'id'=>'pass1',
															'class' => 'form-control', 
                    										'type' => 'password',
                    										'data-validation'=>'length',
															'placeholder' => 'Mot de passe',
															'data-validation-length'=>'min8', 
                    										'required' =>'required']); ?>
                    </div>	
                    
				</div><br />
				<div  class="row">		
					<label class="col-lg-8 control-label" for="pass2">Vérification du mot de passe</label>
					<div class="col-lg-8">
						<?= $this->Form->input('pass2', ['label' => false,'id'=>'pass2',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'password',
                    										'data-validation'=>'length',
															'placeholder' => 'Vérification',
															'data-validation-length'=>'min8', 
                    										'required' =>'required']); ?>
                    </div>		
				</div><br />
			</div>						
			<div class="col-lg-2"></div>
		</div>		
	<p align="center">
		<?= $this->Form->button('Valider', ['type' => 'submit','class' => 'btn btn-default']) ?>
		<?= $this->Form->end() ?>
	</p>
	</div>
</div>