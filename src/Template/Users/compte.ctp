<div class="blocblanc">
	<h2>Edition de son compte utilisateur</h2>
	<div class="blocBlancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
				<div class="row">
                	<label class="col-md-8 control-label" for="nom">Nom</label>
                    <div class="col-md-12"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->nom,
                    										'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-md-8 control-label" for="prenom">Prénom</label>
                    <div class="col-md-12"><?= $this->Form->input('prenom', ['label' => false,'id'=>'prenom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'texte', 'value'=>$user->prenom,                    		
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="profil">Profil</label>
                    <div class="col-md-12"><?= $this->Form->input('profil', ['label' => false,'id'=>'profil',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'texte', 'value'=>$user->profil->name ,                    		
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-md-8 control-label" for="username">Login</label>
                    <div class="col-md-12"><?= $this->Form->input('username', ['label' => false,'id'=>'username',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'texte', 'value'=>$user->login ,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />   
			</div><br />						
			<div class="col-lg-2"></div>
		</div><br />
<?= "<p align='center'>".$this->Html->link('Changer son mot de passe', ['controller'=>'users', 'action'=>'changePwd'], ['class' => 'btn btn-warning'])."</p>";?>
		
	</div>
</div>