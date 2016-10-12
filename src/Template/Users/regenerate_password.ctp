<div class="blocblanc">
	<h2>Administration - Régénération d'un mot de passe utilisateur </h2>
	<h3>Utilisateur : <?= $user->prenom." ".$user->nom?>)</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['controller'=>'users','action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
				<?= $this->Form->create('User', ['id'=>'formulaire']) ?>
				<?= $this->Form->hidden('id',['value' => $user->id]);?>	
				
				<div class="row">
					<div class="alert alert-info">
						<b>Attention : Le mot de passe doit contenir au minimum 8 caractères.</b><br />
						Pour vous indiquerons la compléxité de votre mot de passe :
						<ul>
							<li>Si le mot de passe ne contient pas de lettres majuscules ou de chiffres, alors il est considéré comme de compléxité faible</li>
							<li>Si le mot de passe contient une lettre majuscule ou un nombre alors il est considéré comme de compléxité moyenne</li>
							<li>Si le mot de passe contient une lettre majuscule, un nombre et un caractère particulier alors il est considéré comme de compléxité forte</li>
						</ul>
					</div>			
				</div>
				<div class="row">
					<div class="col-lg-1"></div>
                	<label class="col-lg-8 control-label" for="password">Mot de passe (minimun : 8 caractères)</label> 
                    <div class="col-lg-8"><?= $this->Form->input('password', ['label' => false,
															   	'div' => false,
																'class' => 'form-control', 
																'placeholder' => 'Nouveau mot de passe',
	                    										'type' => 'password', 
                    											'data-validation'=>'length',
																'data-validation-length'=>'min8',
																'required' =>'required']); ?>
                    </div>
                    <div class="col-lg-3">
                    	<div class="" id="messagePwd"></div>
                    </div>
				</div><br />
				<div class="" id="messagePwd"></div>
				
		
			<p align="center">
				<?= $this->Form->button('Envoyer', ['type' => 'submit','class' => 'btn btn-info']) ?>
			</p>
			<?= $this->Form->end() ?>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
    
