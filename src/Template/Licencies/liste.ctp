<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Licenciés</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">

				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr align='center'>
				            <th width='25%'><?= $this->Paginator->sort('prenom','Prénom') ?></th>
				            <th width='25%'><?= $this->Paginator->sort('nom','Nom') ?></th>
				            <th width='25%'><?= $this->Paginator->sort('club','Club') ?></th>
				            <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody>
				    <?php foreach ($licencies as $licencie): ?>
				        <tr>
				            <td><?= h($licencie->prenom) ?></td>
				            <td><?= h($licencie->nom) ?></td>
				            <td><?= h($licencie->club->name) ?></td>
				            <td class="actions">
			                <td class="actions">
			                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $licencie->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $licencie->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $licencie->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer {0} ?', $licencie->disay_name)]) ?>
			                </td>
				        </tr>
				
				    <?php endforeach; ?>
				    </tbody>
				</table>

				<br />
				<p align="center">
					<?= $this->Html->link(__('Créer un licencié'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
					<?= $this->Html->link(__('Retour'), ['controller'=>'Licencies', 'action' => 'index'],['class' => 'btn btn-info']) ?> 
					
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