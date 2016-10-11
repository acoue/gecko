<div class="blocBlanc">
	<h2>Administration</h2>
    <h3>Utilisateurs</h3>
	<div class="blocBlancContent">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th width='5%'><?= $this->Paginator->sort('id','Id') ?></th>
			                <th width='10%'><?= $this->Paginator->sort('hasid','HASID') ?></th>
			                <th width='30%'><?= $this->Paginator->sort('name','Nom Prénom') ?></th>
			                <th width='10%'><?= $this->Paginator->sort('actif','Actif') ?></th>
                			<th width='25%'><?= $this->Paginator->sort('lastlogin','Dernière Connexion') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($users as $user): ?>
		 				<tr>
			                <td><?= $this->Number->format($user->id) ?></td>
			                <td><?= $user->hasid ?></td>
			                <td><?= $user->name ?></td>
			                <td><?= ($user->actif = 1) ? "Oui" : "Non"; ?></td>
			                <td><?= h($user->lastlogin) ?></td>
			                <td class="actions">
			                	<?= $this->Html->link('<span><i class="glyphicon glyphicon-eye-open"></i></span>', ['action' => 'view', $user->id], ['escape' => false,'title'=>'Visualisation']); ?>&nbsp;&nbsp;
								<?= $this->Html->link('<span><i class="glyphicon glyphicon-envelope"></i></span>', ['action' => 'contacter', $user->id], ['escape' => false,'title'=>'Contacter']); ?>&nbsp;&nbsp;     
								<?= $this->Html->link('<span><i class="glyphicon glyphicon-send"></i></span>', ['action' => 'sendIdentifiant', $user->id], ['escape' => false,'title'=>'Renvoyer identifiants']); ?>&nbsp;&nbsp;
								<?= $this->Html->link('<span><i class="glyphicon glyphicon-list-alt"></i></span>', ['action' => 'ficheLdap', $user->hasid], ['escape' => false,'title'=>'Voir la fiche LDAP']); ?>     
								
							</td>
			        	</tr>
			        <?php endforeach; ?>
				    </tbody>
				</table>
				<br />
				<div class="paginator">
					<ul class="pagination">
				    	<?= $this->Paginator->prev('< ' . __('Préc.')) ?>
				        <?= $this->Paginator->numbers() ?>
				        <?= $this->Paginator->next(__('Suiv.') . ' >') ?>
				   	</ul>
				    <p><?= $this->Paginator->counter() ?></p>
				</div><br />
			</div>						
			<div class="col-lg-1"></div>
		</div>
	</div>
</div>