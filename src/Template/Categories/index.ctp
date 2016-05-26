<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Catégorie</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th><?= $this->Paginator->sort('id','Id') ?></th>
			                <th><?= $this->Paginator->sort('name','Libellé') ?></th>
                			<th><?= $this->Paginator->sort('type') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($categories as $category): ?>
			            <tr>
			                <td><?= $this->Number->format($category->id) ?></td>
			                <td><?= h($category->name) ?></td>
                			<td><?= $category->type == 0 ? "Individuel" : "Equipe"; ?></td>
			                <td class="actions">
			                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $category->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $category->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $category->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer la catégorie {0} ?', $category->name)]) ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
					<p align="center">
						<?= $this->Html->link(__('Créer une catégorie'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
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