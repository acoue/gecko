	
<div class="blocblanc">
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-9"></div>
			<div class="col-lg-6">
				<div class="users form_login">
				<!-- Formulaire de connexion -->
				<?= $this->Form->create() ?>
					<legend>Connectez-vous</legend>
					<?= $this->Form->input('username', array('label' => false,'div' => false,'class' => 'form-control', 'size' => '70px', 'placeholder' => 'Identifiant', 'required' =>'required','autofocus'=>'autofocus')); ?><br />
					<?= $this->Form->input('password', array('label' => false,'div' => false, 'class' => 'form-control','size' => '70px', 'type'=>'password','placeholder' => 'Mot de passe', 'required' =>'required')); ?><br />
					<p align="center"><?= $this->Form->button('Se connecter', ['class' => 'btn btn-default']) ?></p>
				<?= $this->Form->end() ?>
				</div>
			</div>						
			<div class="col-lg-9"></div>
		</div>
	</div>
</div>
			