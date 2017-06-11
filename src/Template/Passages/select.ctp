<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Sélection</h2>
    <h3>Passage de grade</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr align='center'>
			                <th align='center'>Discipline</th>
			                <th align='center'>Région</th>
			                <th align='center'>Libellé</th>
			                <th>Date</th>
			                <th>Selectionné ?</th>
                		</tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($passages as $passage): ?>
				        <tr>
			                <td><?= $passage->discipline->name ?></td>
			                <td><?= $passage->region->name ?></td>
			                <td><?= $passage->name ?></td>
			                <td><?= FonctionUtilitaire::dateFromMySQL($passage->date_passage) ?></td>
			                <td><?= $passage->selected == 1 ? '<span class="badge badge-success">Oui</span>' : $this->Html->link('Sélectionner', ['controller'=>'Passages', 'action' => 'choisir/'.$passage->id],['class' => 'btn btn-primary']) ?></td>
				        
				        </tr>
				    <?php endforeach; ?>
				    </tbody>
				   </table><?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			
				    <br /><br />
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>

