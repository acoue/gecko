<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Licenciés</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th><?= $this->Paginator->sort('prenom','Prénom') ?></th>
			                <th><?= $this->Paginator->sort('nom','Nom') ?></th>
			                <th><?= $this->Paginator->sort('club_id','Club') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
            <?php foreach ($licencies as $licency): ?>
			            <tr>
                			<td><?= h($licency->prenom) ?></td>
                			<td><?= h($licency->nom) ?></td>
			                <th><?= h($licency->club->name) ?></th>
			                <td class="actions">
			                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $licency->id]) ?>
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $licency->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $licency->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer le licencié {0} ?', $licency->prenom." ".$licency->nom)]) ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
					<p align="center">
						<?= $this->Html->link(__('Créer un licencié'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
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