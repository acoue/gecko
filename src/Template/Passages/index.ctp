<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Passages de grades</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th><?= $this->Paginator->sort('discipline_id','Discipline') ?></th>
			                <th><?= $this->Paginator->sort('name','Libellé') ?></th>
			                <th><?= $this->Paginator->sort('date_passage','Date') ?></th>
			                <th><?= $this->Paginator->sort('selected','Selectionné ?') ?></th>
			                <th><?= $this->Paginator->sort('archive','Archivée ?') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($passages as $passage): ?>
				        <tr>
			                <td><?= h($passage->discipline->name) ?></td>
			                <td><?= h($passage->name) ?></td>
			                <td><?= FonctionUtilitaire::dateFromMySQL($passage->date_passage) ?></td>
			                <td><?= h($passage->selected == 1) ? 'Oui' : 'Non' ?></td>
			                <td><?= h($passage->archive == 0) ? "Non" : "Oui"; ?></td>
			               <td class="actions">
								<?= $this->Html->link(__('Voir'), ['action' => 'view', $passage->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $passage->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $passage->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer le passage {0}?', $passage->name)]) ?>
			                </td>
				        </tr>
				
				    <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
		<p align="center">
			<?= $this->Html->link(__('Créer un passage'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
			<?= $this->Html->link(__('Retour'), ['controller'=>'admin', 'action' => 'index'],['class' => 'btn btn-info']) ?> <br /><br />
			<?= $this->Html->link('Selectionner un passage', ['controller'=>'Passages', 'action' => 'select'],['class' => 'btn btn-warning']) ?>
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