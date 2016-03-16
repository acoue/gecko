<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Competition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr align='center'>
 <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('date_competition') ?></th>
                <th><?= $this->Paginator->sort('lieux') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('selected') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($competitions as $competition): ?>
				        <tr>
                <td><?= $this->Number->format($competition->id) ?></td>
                <td><?= h($competition->name) ?></td>
                <td><?= h($competition->date_competition) ?></td>
                <td><?= h($competition->lieux) ?></td>
                <td><?= $this->Number->format($competition->type) ?></td>
                <td><?= $this->Number->format($competition->selected) ?></td>
               <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?>
                </td>
				        </tr>
				
				    <?php endforeach; ?>
				    </tbody>
				   </table>
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
		<p align="center">
			<?= $this->Html->link(__('Créer une compétition'), ['action' => 'add'], ['class'=>'btn btn-default']) ?>
		</p>
	</div>
</div>