<?php 
//debug($userLdap);
//die();
?>
<div class="blocBlanc">
	<h2>Administration</h2>
    <h3>Visualisation - Utilisateur : <?= $user->prenom." ".$user->nom ?></h3>
	<div class="blocBlancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-2">
				<?= $this->Html->link(__('Edition'), ['action' => 'edit', $user->id],['class' => 'btn btn-default']) ?><br /><br />
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-8"> 
			    <div class="row">
                	<label class="col-lg-4 control-label" for="hasid">HASID</label>
                    <div class="col-lg-8"><?= $this->Form->input('hasid', ['label' => false,'id'=>'hasid',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->hasid,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-4 control-label" for="prenom">Prénom</label>
                    <div class="col-lg-8"><?= $this->Form->input('prenom', ['label' => false,'id'=>'prenom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$userLdap[0]["givenname"][0],
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-4 control-label" for="nom">Nom</label>
                    <div class="col-lg-8"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$userLdap[0]["sn"][0],
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />  
			    <div class="row">
                	<label class="col-lg-4 control-label" for="email">Email</label>
                    <div class="col-lg-8"><?= $this->Form->input('email', ['label' => false,'id'=>'email',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$userLdap[0]["mail"][0],
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /> 
			    <div class="row">
                	<label class="col-lg-4 control-label" for="username">Login</label>
                    <div class="col-lg-8"><?= $this->Form->input('username', ['label' => false,'id'=>'username',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$userLdap[0]["uid"][0],
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
                	<label class="col-lg-4 control-label" for="actif">Actif ?</label>
                    <div class="col-lg-8"><?= $this->Form->input('actif', ['label' => false,'id'=>'actif',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>(($user->actif == 1)?"Oui":"Non"),
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
                	<label class="col-lg-4 control-label" for="lastlogin">Dernière connexion</label>
                    <div class="col-lg-8"><?= $this->Form->input('lastlogin', ['label' => false,'id'=>'lastlogin',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$user->lastlogin,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />						
				<div class="row">
					<h4><?= __('Historique de l \'utilisateur') ?></h4>
					<table cellpadding="0" cellspacing="0" class="table table-striped">
					    <thead>
					        <tr>
				                <th width='20%'>Id</th>
				                <th width='20%'>Date</th>
				                <th width='50%'>Description</th>
				                <th class="actions"><?= __('Actions') ?></th>
					        </tr>
					    </thead>
					    <tbody> 
							<?php foreach ($user->historiques as $historiques): ?>
				            <tr>
				                <td><?= h($historiques->id) ?></td>
				                <td><?= h($historiques->created) ?></td>
				                <td><?= h($historiques->libelle) ?></td>
				                <td class="actions">
				                	<?= $this->Html->link('<span><i class="glyphicon glyphicon-eye-open"></i></span>', ['action' => 'view', $historiques->id], ['escape' => false,'title'=>'Visualisation']); ?>								
				                </td>
				            </tr>
				            <?php endforeach; ?>
						</tbody>
					</table>
				</div>	
			</div>		
							
			<div class="col-lg-1"></div>
		</div>
	</div>
</div>

