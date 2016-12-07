<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Utilisateur - Ajout</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['controller'=>'admin','action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <?= $this->Form->create($user, ['id'=>'formulaire']) ?>
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
			    	<label class="col-lg-8 control-label" for="username">Login <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('username', ['label' => false,'id'=>'username',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'required' =>'required']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="email">Email</label>
                    <div class="col-lg-16"><?= $this->Form->input('email', ['label' => false,'id'=>'email',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->email,
															'required' =>'']); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="password">Mot de passe (minimun : 8 caractères)<span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('password', ['label' => false,'id'=>'password',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'password', 
                    										'data-validation'=>'length',
															'data-validation-length'=>'min8',
                    										'required' =>'required']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="active">Actif</label>
                    <div class="col-lg-16"><?= $this->Form->input('active', ['label' => false,'id'=>'active',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => [0=>'Non', 1=>'Oui'], 
															'required' =>'required']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="profil_id">Profil</label>
                    <div class="col-lg-16"><?= $this->Form->input('profil_id', ['label' => false,'id'=>'profil_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $profils, 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /><br />
							
    			<?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>
				<p align='left'><span class="obligatoire">&nbsp;&nbsp;&nbsp;&nbsp;<sup>*</sup></span> Champ obligatoire</p>	
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
    