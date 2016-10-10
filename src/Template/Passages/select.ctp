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
			                <th align='center'>Libellé</th>
			                <th>Date</th>
			                <th>Sélectionnée ?</th>
			                <th></th>
                		</tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($passages as $passage): ?>
				        <tr>
			                <td><?= $passage->name ?></td>
			                <td><?= $passage->date_passage ?></td>
			                <td><?= $passage->selected == 1 ? 'Oui' : 'Non' ?></td>
			                <td><? if($passage->selected == 0) echo $this->Html->link('Sélectionner', ['controller'=>'passages', 'action' => 'choisir/'.$passage->id],['class' => 'btn btn-primary']) ?></td>
				        </tr>
				    <?php endforeach; ?>
				    </tbody>
				    <br /><br />
				   </table><?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>

