<div class="blocblanc">
	<h2>Licencié : <?= $licencie->prenom." ".$licencie->nom." (".$licencie->club->name.")" ?></h2>
    <h3>Palmarès</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th scope="col"><?= $this->Paginator->sort('competition') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('lieux') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('date_competition') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('resultat') ?></th>
			                <th scope="col" class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
			            <?php foreach ($palmares as $palmare): ?>
			            <tr>
			                <td><?= h($palmare->competition) ?></td>
			                <td><?= h($palmare->lieux) ?></td>
			                <td><?= h($palmare->date_competition) ?></td>
			                <td><?= h($palmare->resultat) ?></td>
			                <td class="actions">
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $palmare->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $palmare->id], ['confirm' => __('Confirmation de la suppression ?')]) ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
					<p align="center">
						<?= $this->Html->link(__('Créer un palmarès'), ['action' => 'add',$licencie->id], ['class'=>'btn btn-default']) ?><br /><br />
						<?= $this->Html->link(__('Retour'), ['controller'=>'licencie', 'action' => 'index'],['class' => 'btn btn-info']) ?> 
					</p>
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>