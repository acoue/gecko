<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Inscription</h2>
    <h3>Passage de grades</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
			        <thead>
			            <tr>
			                <th width='30%'><?= $this->Paginator->sort('passage_id') ?></th>
			                <th width='30%'><?= $this->Paginator->sort('licencie_id') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('created','Date') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
			            </tr>
			        </thead>
			        <tbody>
			            <?php foreach ($inscriptionPassages as $inscriptionPassage): ?>
			            <tr>
			                <td><?= $inscriptionPassage->passage->name ?></td>
			                <td><?= $inscriptionPassage->licency->display_name ?></td>
			                <td><?= FonctionUtilitaire::dateTimeFromMySQL($inscriptionPassage->created) ?></td>
			                <td class="actions">
			                    <?= $this->Form->postLink(__('Delete'), ['action' => 'Supprimer', $inscriptionPassage->id], ['confirm' => __('Confirmation de la suppression ?')]) ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
			        </tbody>
			    </table>
			   <br />
				<p align="center">
					<?= $this->Html->link(__('Nouvelle inscription'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
					<?php if($this->request->session()->read('UserConnected')->getProfil()=='admin') echo $this->Html->link(__('Valider'), ['action' => ''], ['class'=>'btn btn-success']) ?><br /><br />
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
