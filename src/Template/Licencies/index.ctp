<div class="blocblanc">
	<h2>Administration</h2>
    <h3>Licenciés</h3>
	<div class="blocblancContent">
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
	</div>
</div>


<?php $this->append('script');?>
	<script>
	$(function () {

		$("#libelle").bind('input', function () {
            $.ajax({
                url: "<?= $this->Url->build(['controller'=>'licencies','action'=>'search'])?>",
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