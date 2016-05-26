<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Région</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th><?= $this->Paginator->sort('id','Id') ?></th>
			                <th><?= $this->Paginator->sort('name','Libellé') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($regions as $region): ?>
			            <tr>
			                <td><?= $this->Number->format($region->id) ?></td>
			                <td><?= h($region->name) ?></td>
			                <td class="actions">
			                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $region->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $region->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $region->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer la région {0} ?', $region->name)]) ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
					<p align="center">
						<?= $this->Html->link(__('Créer une région'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
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