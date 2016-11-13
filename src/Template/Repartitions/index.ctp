<div class="blocblanc">
	<h2>Sélection des licenciés</h2>
	<div class="blocblancContent">
	<br /><br />
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
							<?= $this->Form->create(NULL); ?>
				<div class="row">
                	<label class="col-md-6 control-label" for="libelle">Entrez un Libellé pour la recherche : </label>
                    <div class="col-md-14"><?= $this->Form->input('libelle', ['label' => false,'id'=>'libelle',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text']); ?>
                    </div> 
                    <div class="col-md-3"></div>                         
				</div><br />  
			
			<?= $this->Form->end() ?>
				<div id="listeDiv"></div>
				</div>						
			<div class="col-lg-2"></div>
		</div>
	
	<h4>Déjà sélectionné</h4>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
				        	<th>Id</th>
			                <th>Prénom</th>
			                <th>Nom</th>
			                <th>Poule n°</th>
			                <th>Position</th>
			                <th class="actions"><?= __('Actions') ?></th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($repartitions as $repartition): ?>
			            <tr>
			                <td><?= $this->Number->format($repartition->id) ?></td>
			                <td><?= h($repartition->licency->prenom) ?></td>
			                <td><?= h($repartition->licency->nom) ?></td>
			                <td><?= h($repartition->licency->numero_poule) ?></td>
			                <td><?= h($repartition->licency->position_poule) ?></td>
			                <td class="actions">
			                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $repartition->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer la ligne ?')]) ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
				    </tbody>
				   </table>
				   <br />
				</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>


<?php $this->append('script');?>
	<script>
	$(function () {

		$("#libelle").bind('input', function () {
            $.ajax({
                url: "<?= $this->Url->build(['controller'=>'Repartitions','action'=>'search'])?>",
                data: {
                    libelle: $("#libelle").val()
                },
                length: 3,
                dataType: 'html',
                type: 'post',
                success: function (html) {
                    $("#listeDiv").html(html);
                }
            })
        });
		
	});
	</script>
<?php $this->end();?>