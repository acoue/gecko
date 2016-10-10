<div class="blocGris">
	<h2>Administration des paramètres</h2>
	<div class="container">
		<div class="table-responsive">
	    	<table class="table" width="60%">
			    <tbody>
			        <tr>
			            <td width='70%'>Administration des Utilisateurs</td>
			            <td width='30%'><?= $this->Html->link('Utilisateurs', ['controller'=>'users', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td width='70%'>Administration des Compétitions</td>
			            <td width='30%'><?= $this->Html->link('Compétitions', ['controller'=>'competitions', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td width='70%'>Administration des Passages de grades</td>
			            <td width='30%'><?= $this->Html->link('Passages', ['controller'=>'passages', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td>Administration des Régions</td>
			            <td><?= $this->Html->link('Régions', ['controller'=>'Regions', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>	
			        <tr>
			            <td>Administration des Clubs</td>
			            <td><?= $this->Html->link('Club', ['controller'=>'Clubs', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td>Administration des Catégories</td>
			            <td><?= $this->Html->link('Catégorie', ['controller'=>'Categories', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td>Administration des Jurys de passages de grades</td>
			            <td><?= $this->Html->link('Jurys', ['controller'=>'Jurys', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td width='70%'>Administration des Palmarès</td>
			            <td width='30%'><?= $this->Html->link('Palmarès', ['controller'=>'palmares', 'action' => 'index'],['class' => 'btn btn-default']) ?></td>
			        </tr>
			        <tr>
			            <td>Import des données via fichier : Club</td>
			            <td><?= $this->Html->link('Import des clubs', ['controller'=>'', 'action' => ''],['class' => 'btn btn-default']) ?></td>
			        </tr>	
			        <tr>
			            <td>Import des données via fichier : Licenciés</td>
			            <td><?= $this->Html->link('Import des licenciés', ['controller'=>'', 'action' => ''],['class' => 'btn btn-default']) ?></td>
			        </tr>	
			        <tr>
			            <td>Import des données via fichier : Répartition</td>
			            <td><?= $this->Html->link('Import des répartitions', ['controller'=>'', 'action' => ''],['class' => 'btn btn-default']) ?></td>
			        </tr>	
			    </tbody>
		    </table>
		</div>
	</div>
</div>