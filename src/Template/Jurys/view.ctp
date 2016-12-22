<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Jury - Visualisation</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Edition'), ['action' => 'edit', $jury->id],['class' => 'btn btn-default']) ?><br /><br />
				<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $jury->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer le jury {0} ?', $jury->nom." ".$jury->prenom)]) ?><br /><br/>
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			
				</div>
			<div class="col-lg-15"> 
				<div class="row">
                	<label class="col-md-8 control-label" for="discipline_id">Discipline</label>
                    <div class="col-md-12"><?= $this->Form->input('discipline_id', ['label' => false,'id'=>'discipline_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => $jury->discipline->name,
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br />
			    <div class="row">
                	<label class="col-lg-8 control-label" for="nom">Nom</label>
                    <div class="col-lg-16"><?= $this->Form->input('nom', ['label' => false,'id'=>'nom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$jury->nom,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="prenom">Prénom</label>
                    <div class="col-lg-16"><?= $this->Form->input('prenom', ['label' => false,'id'=>'prenom',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 'value'=>$jury->prenom,
															'disabled' =>'disabled']); ?>
                    </div>                          
				</div><br />   
			    <div class="row">
                	<label class="col-lg-8 control-label" for="grade">Grade</label>
                    <div class="col-lg-16"><?= $this->Form->input('grade', ['label' => false,'id'=>'grade',
														   	'div' => false,
															'class' => 'form-control', 'value'=>$jury->grade->name,
                    										'type' => 'text','disabled'=>'disabled']); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-lg-8 control-label" for="actif">Actif ? </label>
                	<div class="col-lg-16"><?= $this->Form->input('actif', ['label' => false,'id'=>'actif',
                											'options' => [1=>'Oui',0=>'Non'],'value'=>$jury->actif,
                											'div' => false,
															'class' => 'form-control', 
                    										'disabled' =>'disabled']) ?>    
                	</div>                 
				</div><br /> 
				 <div class="related">
			        <h4><?= __('Related Juges') ?></h4>
			        <?php if (!empty($jure->juges)): ?>
			        <table cellpadding="0" cellspacing="0">
			            <tr>
			                <th scope="col"><?= __('Passage Id') ?></th>
			            </tr>
			            <?php foreach ($jure->juges as $juges): ?>
			            <tr>
			                <td><?= h($juges->passage_id) ?></td>
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

   