<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Inscription</h2>
    <h3>Compétition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
			        <thead>
			            <tr>
			                <th width='10%'>Discipline</th>
			                <th width='20%'><?= $this->Paginator->sort('competition_id') ?></th>
			                <th width='15%'><?= $this->Paginator->sort('created','Date') ?></th>
			                <th width='15%'>Catégorie</th>
			                <th width='20%'><?= $this->Paginator->sort('licencie_id') ?></th>
			                <th width='15%'><?= $this->Paginator->sort('user_id','Par') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
			            </tr>
			        </thead>
			        <tbody>
			            <?php foreach ($inscriptionCompetitions as $inscriptionCompetition): ?>
			            <tr>
			                <td><?= $inscriptionCompetition->competition->discipline->name ?></td>
			                <td><?= $inscriptionCompetition->competition->name ?></td>
			                <td><?= FonctionUtilitaire::dateFromMySQL($inscriptionCompetition->created) ?></td>
			                <td><?= $inscriptionCompetition->competition->category->name ?></td>
			                <td><a href="" rel="tooltip" data-placement="top" 
title="Club : <?=  $inscriptionCompetition->licency->club->name." | Grade : ".$inscriptionCompetition->licency->grade->name ?>">
<?= $inscriptionCompetition->licency->display_name ?></a></td>
							<td><?= $inscriptionCompetition->user->prenom." ".$inscriptionCompetition->user->nom ?></td>
			                <td class="actions">
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'Supprimer', $inscriptionCompetition->id], ['confirm' => __('Confirmation de la suppression ?')]) ?>
<?php if($this->request->session()->read('UserConnected')->getProfil()=='admin') 
	echo $this->Html->link(__('Valider'), ['action' => 'validate',$inscriptionCompetition->id], ['class'=>'btn btn-success btn-sm']) ?>
				 
			                
			                </td>
			            </tr>
			            <?php endforeach; ?>
			        </tbody>
			    </table>
			   <br />
				<p align="center">
					<?= $this->Html->link(__('Nouvelle inscription'), ['action' => 'add'], ['class'=>'btn btn-default']) ?><br /><br />
				
				</p><br />
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>