<div class="blocblanc">
	<h2>Saisie des résultats</h2>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th scope="col"><?= $this->Paginator->sort('licencie_id') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('resultat_id') ?></th>
			                <th scope="col" class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
			            <?php foreach ($resultatCompetitions as $resultatCompetition): ?>
			            <tr>
			                <td><?= $resultatCompetition->licency->display_name ?></td>
			                <td><?= $resultatCompetition->resultat->name ?></td>
			                <td class="actions">
			                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $resultatCompetition->id]) ?>
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $resultatCompetition->id], ['confirm' => __('Confirmation de la suppression ?')]) ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
					<p align="center">
						<?= $this->Html->link(__('Créer un résultat'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
					</p>
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div> 