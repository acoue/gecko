<div class="blocblanc">
	<h2>Tableau</h2>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
				<p align='center' >
					<?= $resultat ?>
				</p>
				<br /><br />
				<p align='center' >
					<?= $this->Html->link(__('Imprimer'), ['action' => ''],['class' => 'btn btn-info']) ?> 
				</p>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>
				
