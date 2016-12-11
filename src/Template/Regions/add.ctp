<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Région - Ajout</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
    <?= $this->Form->create($region, ['id'=>'formulaire']) ?>
    <fieldset>
        <legend><?= __('Add Region') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
<?= $this->Form->button(__('Valider'),['class'=>'btn btn-default']) ?>
			    <?= $this->Form->end() ?>
				<p align='left'><span class="obligatoire">&nbsp;&nbsp;&nbsp;&nbsp;<sup>*</sup></span> Champ obligatoire</p>	
			</div>						
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
    
