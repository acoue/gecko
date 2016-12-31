<div class="blocblanc">
	<h2>Inscription</h2>
    <h3>Compétition</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
    			<?= $this->Form->create(NULL) ?>
			    <div class="row">
                	<label class="col-lg-8 control-label" for="competition_id">Compétition</label>
                    <div class="col-lg-16"><?= $this->Form->input('competition_id', ['label' => false,'id'=>'competition_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $competitions, 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 				
				<div class="row">
                	<label class="col-lg-8 control-label" for="libelle">Licencié : </label>
                    <div class="col-lg-16"><?= $this->Form->input('libelle', ['label' => false,'id'=>'libelle',
														   	'div' => false,
															'class' => 'form-control', 
                    										'type' => 'text']); ?>
                    </div>                          
				</div><br />  
				<div id="listeDiv"></div>
			    <?= $this->Form->end() ?>
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
                url: "<?= $this->Url->build(['controller'=>'InscriptionCompetitions','action'=>'search'])?>",
                data: {
                    libelle: $("#libelle").val(),
                    competition: $("#competition_id").val()
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