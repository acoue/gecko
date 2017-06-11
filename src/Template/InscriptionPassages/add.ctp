<div class="blocblanc">
	<h2>Inscription</h2>
    <h3>Passage de grades</h3>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-5">
				<?= $this->Html->link(__('Retour'), ['action' => 'index'],['class' => 'btn btn-info']) ?> 
			</div>
			<div class="col-lg-15"> 
			<h4>Merci de remplir le formulaire du haut vers le bas</h4>
    			<?= $this->Form->create(null) ?>
			    <div class="row">
                	<label class="col-lg-8 control-label" for="passage_id">Passage de grades</label>
                    <div class="col-lg-16"><?= $this->Form->input('passage_id', ['label' => false,'id'=>'passage_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $passages, 
															'required' =>'required']); ?>
                    </div>                          
				</div><br /> 	    
			    <div class="row">
                	<label class="col-lg-8 control-label" for="grade_presente_id">Grade présenté</label>
                    <div class="col-lg-16"><?= $this->Form->input('grade_presente_id', ['label' => false,'id'=>'grade_presente_id',
														   	'div' => false,
															'class' => 'form-control', 
                    										'options' => $grades,
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
                url: "<?= $this->Url->build(['controller'=>'InscriptionPassages','action'=>'search'])?>",
                data: {
                    libelle: $("#libelle").val(),
                    passage: $("#passage_id").val(),
                    grade: $("#grade_presente_id").val()
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