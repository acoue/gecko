<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Utilisateur</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th width='5%'><?= $this->Paginator->sort('id','Id') ?></th>
			                <th width='25%'><?= $this->Paginator->sort('name','Nom Prénom') ?></th>
			                <th width='10%'><?= $this->Paginator->sort('actif','Actif') ?></th>
                			<th width='30%'><?= $this->Paginator->sort('lastlogin','Dernière Connexion') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($users as $user): ?>
		 				<tr>
			                <td><?= $this->Number->format($user->id) ?></td>
			                <td><?= $user->prenom." ".$user->nom ?></td>
			                <td><?= ($user->active == 1) ? "Oui" : "Non"; ?></td>
			                <td><?= h($user->lastlogin) ?></td>
			                <td class="actions">
			                	<?= $this->Html->link('Voir', ['action' => 'view', $user->id]); ?>&nbsp;&nbsp;
								<?= $this->Html->link('Editer', ['action' => 'edit', $user->id]); ?>&nbsp;&nbsp;    
								<?= $this->Form->postLink('Supprimer',['action' => 'delete', $user->id],['confirm'  => 'Etes-vous sûr de supprimer ?']);?>&nbsp;&nbsp;   
								<?= $this->Html->link('Password', ['action' => 'regeneratePassword', $user->id]); ?>
				
							</td>
			        	</tr>
			        <?php endforeach; ?>
				    </tbody>
				</table>
				<br />
					<p align="center">
						<?= $this->Html->link(__('Créer un utilisateur'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
						<?= $this->Html->link(__('Retour'), ['controller'=>'admin', 'action' => 'index'],['class' => 'btn btn-info']) ?> 
					</p>
					<div class="paginator">
				        <ul class="pagination">
				            <?= $this->Paginator->prev('< ' . __('Préc.')) ?>
				            <?= $this->Paginator->numbers() ?>
				            <?= $this->Paginator->next(__('Suiv.') . ' >') ?>
				        </ul>
				        <p><?= $this->Paginator->counter() ?></p>
				    </div><br />
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>