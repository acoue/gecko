<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Utilisateur : <?= $user->prenom." ".$user->nom ?></h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Edition'), ['action' => 'edit', $user->id],['class' => 'btn btn-default']) ?><br /><br />
				<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['class'=>'btn btn-warning','confirm' => __('Confirmation de la suppression')]) ?><br /><br/>
				<?= $this->Html->link(__('Retour'), ['controller'=>'Users','action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="nom">Nom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->nom,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="prenom">Prénom <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('prenom', ['label' => false,'id'=>'prenom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->prenom,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="username">Login <span class="obligatoire"><sup> *</sup></span></label>
                    <div class="col-lg-16"><?= $this->Form->input('username', ['label' => false,'id'=>'username',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->username,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="email">Email</label>
                    <div class="col-lg-16"><?= $this->Form->input('email', ['label' => false,'id'=>'email',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->email,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="active">Actif</label>
                    <div class="col-lg-16"><?= $this->Form->input('active', ['label' => false,'id'=>'active',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text','value' => ($user->profil->id = 0) ? 'Non': 'Oui', 
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="profil_id">Profil</label>
                    <div class="col-lg-16"><?= $this->Form->input('profil_id', ['label' => false,'id'=>'profil_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text','value' => $user->profil->name, 
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="pclub_id">Club</label>
                    <div class="col-lg-16"><?= $this->Form->input('club_id', ['label' => false,'id'=>'club_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text','value' => $user->club->name, 
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /><br />
			    <div class="row">
			    	<label class="col-lg-8 control-label" for="lastlogin">Dernière connexion</label>
                    <div class="col-lg-16"><?= $this->Form->input('lastlogin', ['label' => false,'id'=>'lastlogin',
														   	'div' => false,
															'class' => 'form-control', 
                    										'value' => $user->lastlogin, 
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /><br />
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
    