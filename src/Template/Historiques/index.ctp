<?php 
use \Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Historique</h3>
	<div class="blocBlancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>			              
			                <th width='5%'><?= $this->Paginator->sort('id') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('created','Date') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('user_id','Utilisateur') ?></th>
			                <th width='45%'><?= $this->Paginator->sort('libelle','Texte') ?></th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				     <?php foreach ($historiques as $historique): ?>
			            <tr>
			                <td><?= $this->Number->format($historique->id) ?></td>
			                <td><?= FonctionUtilitaire::dateTimeFromMySQL($historique->created) ?></td>
			                <td><?= $historique->has('user') ? $historique->user->prenom." ".$historique->user->nom : '' ?></td>
			                <td><?= FonctionUtilitaire::resumeTexte(h($historique->libelle)) ?></td>
			                <td class="actions">
			                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $historique->id], ['escape' => false,'title'=>'Visualisation']); ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
				    </tbody>
				</table>
				<br />
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