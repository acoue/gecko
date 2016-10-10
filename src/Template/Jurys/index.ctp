<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Jury de passage de grades</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th><?= $this->Paginator->sort('nom','Nom') ?></th>
			                <th><?= $this->Paginator->sort('prenom','Prénom') ?></th>
                			<th><?= $this->Paginator->sort('grade') ?></th>
                			<th><?= $this->Paginator->sort('actif') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($jurys as $jury): ?>
				        <tr>
			                <td><?= h($jury->nom) ?></td>
			                <td><?= h($jury->prenom) ?></td>
			                <td><?= $jury->grade ?></td>
			                <td><?= ($jury->actif = 1) ? 'Oui':'Non' ?></td>
			                <td class="actions">
			                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $jury->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $jury->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $jury->id], ['confirm' => __('Etes-vous sûr de svouloir supprimer le jury {0}?', $jury->nom." ".$jury->prenom)]) ?>
			                </td>
				        </tr>
				
				    <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
		<p align="center">
			<?= $this->Html->link(__('Créer un jury'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
			<?= $this->Html->link(__('Retour'), ['controller'=>'admin', 'action' => 'index'],['class' => 'btn btn-info']) ?> 
		</p>
					<div class="paginator">
				        <ul class="pagination">
				            <?= $this->Paginator->prev('< ' . __('Préc.')) ?>
				            <?= $this->Paginator->numbers() ?>
				            <?= $this->Paginator->next(__('Suiv.') . ' >') ?>
				        </ul>
				        <p><?= $this->Paginator->counter() ?></p>
				    </div>
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>