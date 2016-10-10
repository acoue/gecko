<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Passage de grade - Visualisation</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Html->link(__('Edition'), ['action' => 'edit', $passage->id],['class' => 'btn btn-default']) ?><br /><br />
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $passage->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer le passage {0} ?', $passage->name)]) ?><br /><br/>
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
                    										'value' => h($passage->name)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="date_competition">Date du passage</label>
                    <div class="col-lg-14"><?= $this->Form->input('date_passage', ['label' => false,'id'=>'date_passage',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => h($passage->date_passage),
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br /> 
				<div class="related">
			        <h4><?= __('Evalués') ?></h4>
			        <?php if (!empty($passage->evalues)): ?>
			        <table cellpadding="0" cellspacing="0">
			            <tr>
			                <th scope="col"><?= __('Licencie Id') ?></th>
			                <th scope="col"><?= __('Grade Actuel') ?></th>
			                <th scope="col"><?= __('Grade Presente') ?></th>
			                <th scope="col"><?= __('Resultat Passage') ?></th>
			                <th scope="col"><?= __('Resultat Technique') ?></th>
			                <th scope="col"><?= __('Resultat Kata') ?></th>
			            </tr>
			            <?php foreach ($passage->evalues as $evalues): ?>
			            <tr>
			                <td><?= h($evalues->licencie_id) ?></td>
			                <td><?= h($evalues->grade_actuel) ?></td>
			                <td><?= h($evalues->grade_presente) ?></td>
			                <td><?= h($evalues->resultat_passage) ?></td>
			                <td><?= h($evalues->resultat_technique) ?></td>
			                <td><?= h($evalues->resultat_kata) ?></td>
			            </tr>
			            <?php endforeach; ?>
			        </table>
			        <?php endif; ?>
			    </div>
			    <div class="related">
			        <h4><?= __('Jury') ?></h4>
			        <?php if (!empty($passage->juges)): ?>
			        <table cellpadding="0" cellspacing="0">
			            <tr>
			                <th scope="col"><?= __('Jury Id') ?></th>
			            </tr>
			            <?php foreach ($passage->juges as $juges): ?>
			            <tr>
			                <td><?= h($juges->jury_id) ?></td>
			            </tr>
			            <?php endforeach; ?>
			        </table>
			        <?php endif; ?>
			    </div>
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>