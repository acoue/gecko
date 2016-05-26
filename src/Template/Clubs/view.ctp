<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Club - Visualisation</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Html->link(__('Edition'), ['action' => 'edit', $club->id],['class' => 'btn btn-default']) ?><br /><br />
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $club->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer le club {0} ?', $club->name)]) ?><br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
				<div class="row">
                	<label class="col-md-8 control-label" for="name">Libellé</label>
                    <div class="col-md-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => h($club->name)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="region_id">Région</label>
                    <div class="col-md-14"><?= $this->Form->input('region_id', ['label' => false,'id'=>'region_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => $club->region->name,
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br /><br />
				<div class="row">
					<table cellpadding="0" cellspacing="0" class="table table-striped">
					<caption>Licenciés </caption>
					    <thead>
					        <tr>
				                <th><?= __('Prenom') ?></th>
				                <th><?= __('Nom') ?></th>
				                <th class="actions"><?= __('Actions') ?></th>
					        </tr>
					    </thead>
					    <tbody> 
				            <?php foreach ($club->licencies as $licencies): ?>
				            <tr>
				                <td><?= h($licencies->prenom) ?></td>
				                <td><?= h($licencies->nom) ?></td>
				                <td class="actions">
				                    <?= $this->Html->link(__('View'), ['controller' => 'Licencies', 'action' => 'view', $licencies->id]) ?>
				                </td>
				            </tr>
				            <?php endforeach; ?>
					    </tbody>
				    </table>
				</div>				
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>