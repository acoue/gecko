<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Competition - Visualisation</h3>
	<div class="blocblancContent">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
			<?= $this->Html->link(__('Edition'), ['action' => 'edit', $competition->id],['class' => 'btn btn-default']) ?><br /><br />
			<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $competition->id], ['class'=>'btn btn-warning','confirm' => __('Etes-vous sûr de vouloir supprimer la compétition {0} ?', $competition->name)]) ?><br /><br/>
			<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15">
				<div class="row">
                	<label class="col-md-8 control-label" for="discipline_id">Discipline</label>
                    <div class="col-md-12"><?= $this->Form->input('discipline_id', ['label' => false,'id'=>'discipline_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => $competition->discipline->name,
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="name">Libellé</label>
                    <div class="col-md-14"><?= $this->Form->input('name', ['label' => false,'id'=>'name',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => h($competition->name)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="date_competition">Date de compétition</label>
                    <div class="col-lg-14"><?= $this->Form->input('date_competition', ['label' => false,'id'=>'date_competition',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => FonctionUtilitaire::dateFromMySQL($competition->date_competition),
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br />  
				<div class="row">
                	<label class="col-md-8 control-label" for="lieux">Lieux</label>
                    <div class="col-md-14"><?= $this->Form->input('lieux', ['label' => false,'id'=>'lieux',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
															'disabled' => 'disabled', 
                    										'value' => h($competition->lieux)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="description">Description</label>
                    <div class="col-md-14"><?= $this->Form->input('description', ['label' => false,'id'=>'description',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'textarea', 'disabled' => 'disabled',
                    										'value' => h($competition->description)]); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-md-8 control-label" for="catagorie_id">Catégorie</label>
                    <div class="col-md-12"><?= $this->Form->input('catagorie_id', ['label' => false,'id'=>'catagorie_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text', 
                    										'value' => $competition->category->name,
															'disabled' => 'disabled']); ?>
                    </div>                          
				</div><br />
				<div class="row">
                	<label class="col-lg-8 control-label" for="region_id">Régions</label>
                	<div class="col-lg-12"><?= $this->Form->input('region_id', ['label' => false,
                											'type' => 'text','value'=>h($competition->region->name),
                											'div' => false,
															'class' => 'form-control', 
                    										'disabled' =>'disabled']) ?>     
                	</div>                 
				</div><br />                     		
				<div class="row">
                	<label class="col-lg-8 control-label" for="type">Type</label>
                	<div class="col-lg-12"><?= $this->Form->input('type', ['label' => false,
                											'options' => [0 => 'Individuelle', 1=>'Equipe'],
                											'div' => false,'value'=>$competition->type,
															'class' => 'form-control', 
                    										'disabled' =>'disabled']) ?>    
                	</div>                 
				</div><br /> 
				<div class="row">
                	<label class="col-lg-8 control-label" for="archive">Archivée</label>
                	<div class="col-lg-10"><?= $this->Form->input('archive', ['label' => false,
                											'options' => [0 => 'Non', 1=>'Oui'],
                											'div' => false,'value'=>$competition->archive,
															'class' => 'form-control', 
                    										'disabled' =>'disabled']) ?>    
                	</div>                 
				</div><br /> 
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>