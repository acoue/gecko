<div class="blocBlanc">
	<h2>Sélection</h2>
    <h3>Competition</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr align='center'>
			                <th align='center'>Libellé</th>
			                <th align='center'>Catégorie</th>
			                <th>Date</th>
			                <th>Lieux</th>
			                <th>Type</th>
			                <th>Sélectionnée ?</th>
			                <th></th>
                		</tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($competitions as $competition): ?>
				        <tr>
			                <td><?= $competition->name ?></td>
			                <td><?= $competition->category->name ?></td>
			                <td><?= $competition->date_competition?></td>
			                <td><?= $competition->lieux ?></td>
			                <td><?= $competition->type == 1 ? 'Equipe' : 'Individuel'?></td>
			                <td><?= $competition->selected == 1 ? 'Oui' : 'Non' ?></td>
			                <td><? if($competition->selected == 0) echo $this->Html->link('Sélectionner', ['controller'=>'competitions', 'action' => 'choisir/'.$competition->id],['class' => 'btn btn-primary']) ?></td>
				        </tr>
				    <?php endforeach; ?>
				    </tbody>
				   </table>
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>

