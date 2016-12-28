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
			                <th width='15%'>Discipline</th>
			                <th width='20%'><?= $this->Paginator->sort('passage_id') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('licencie_id') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('created','Date') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('user_id','Par') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
			            </tr>
			        </thead>
			        <tbody>
			            <?php foreach ($inscriptionPassages as $inscriptionPassage): ?>
			            <tr>
			                <td><?= $inscriptionPassage->passage->discipline->name ?></td>
			                <td><?= $inscriptionPassage->passage->name ?></td>
			                <td><?= $inscriptionPassage->licency->display_name ?></td>
			                <td><?= FonctionUtilitaire::dateFromMySQL($inscriptionPassage->created) ?></td>
			                <td><?= $inscriptionPassage->user->prenom." ".$inscriptionPassage->user->nom ?></td>
			                <td class="actions">
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'Supprimer', $inscriptionPassage->id], ['confirm' => __('Confirmation de la suppression ?')]) ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
			        </tbody>
			    </table>
			   <br />
				<p align="center">
					<?= $this->Html->link(__('Nouvelle inscription'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
					<?php if($this->request->session()->read('UserConnected')->getProfil()=='admin') echo $this->Html->link(__('Valider'), ['action' => ''], ['class'=>'btn btn-success']) ?><br /><br />
				</p><br />
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
