<?php
use Lib\FonctionUtilitaire;
?>
<div class="blocblanc">
	<h2>Tirage au sort</h2>
	<div class="blocblancContent">
	<br /><br />
		<h4>Historique</h4>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<?php if($tirages->count() > 0) { ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped">
			        <thead>
			            <tr>
			                <th width='10%'><?= $this->Paginator->sort('id') ?></th>
			                <th width='70%'><?= $this->Paginator->sort('type') ?></th>
			                <th width='20%'><?= $this->Paginator->sort('created','Date') ?></th>
			            </tr>
			        </thead>
			        <tbody>
			            <?php foreach ($tirages as $tirage): ?>
			            <tr>
			                <td><?= $this->Number->format($tirage->id) ?></td>
			                <td><?= h($tirage->type) ?></td>
			                <td><?= FonctionUtilitaire::dateFromMySQL($tirage->created) ?></td>
			            </tr>
			            <?php endforeach; ?>
			        </tbody>
			    </table>
				<?php } else {?>
				<p>Aucun tirage effectué.</p>
				<?php }?>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<h4>Paramètres</h4>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20">
			<?= $this->Form->create(null) ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th>Paramètres du tirage</th>
			                <th></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<tr>
				    		<td width='50%'	align='left'>Nombre de compétiteurs dans la poule :</td>
				    		<td width='50%'	align='left'>
					    		<div class="radio">		                
						        	<label for="poule">
						            	<input name="poule" id="poule" value="3" type="radio" required="required" checked> 3
						            </label>
						        </div>
								<div class="radio">		                
						        	<label for="poule">
						            	<input name="poule" id="poule" value="4" type="radio" required="required"> 4
						            </label>
						        </div>
								<div class="radio">		                
						        	<label for="poule">
						            	<input name="poule" id="poule" value="5" type="radio" required="required"> 5
						            </label>
						        </div>
								<div class="radio">		                
						        	<label for="poule">
						            	<input name="poule" id="poule" value="-1" type="radio" required="required"> Tableau
						            </label>
						        </div>
				    		</td>
				    	</tr>
				    	<tr>
				    		<td	align='left'>Eloignement des têtes de série :</td>
				    		<td align='left'>
					    		<div class="radio">		                
						        	<label for="tete">
						            	<input name="tete" id="tete" value="O" type="radio" required="required" checked> Oui
						            </label>
						        </div>
								<div class="radio">		                
						        	<label for="tete">
						            	<input name="tete" id="tete" value="N" type="radio" required="required" > Non
						            </label>
						        </div>
				    		</td>
				    	</tr>	
				    	<tr>
				    		<td colspan='2'>
				    		<div class='divMontre'><b>Têtes de série</</b>
				    		 
				<div class="row">
                	<label class="col-lg-8 control-label" for="tete1">Tête n°1</label>
                	<div class="col-lg-16"><?= $this->Form->input('tete1', ['label' => false,
                											'options' => $repartitionListe,
                											'div' => false,
															'class' => 'form-control'
                    										]) ?>    
                	</div>                 
				</div><br />     		 
				<div class="row">
                	<label class="col-lg-8 control-label" for="tete2">Tête n°2</label>
                	<div class="col-lg-16"><?= $this->Form->input('tete2', ['label' => false,
                											'options' => $repartitionListe,
                											'div' => false,
															'class' => 'form-control'
                    										]) ?>    
                	</div>                 
				</div><br />   		 
				<div class="row">
                	<label class="col-lg-8 control-label" for="tete3">Tête n°3</label>
                	<div class="col-lg-16"><?= $this->Form->input('tete3', ['label' => false,
                											'options' => $repartitionListe,
                											'div' => false,
															'class' => 'form-control'
                    										]) ?>    
                	</div>                 
				</div><br />   		 
				<div class="row">
                	<label class="col-lg-8 control-label" for="tete4">Tête n°4</label>
                	<div class="col-lg-16"><?= $this->Form->input('tete4', ['label' => false,
                											'options' => $repartitionListe,
                											'div' => false,
															'class' => 'form-control'
                    										]) ?>    
                	</div>                 
				</div><br />
				    		
				    		</div>
				    		</td>
				    	</tr>
				    	<tr>
				    		<td	align='left'>Eloignement des clubs :</td>
				    		<td	align='left'>
				    			<div class="radio">		                
						        	<label for="club">
						            	<input name="club" id="club" value="O" type="radio" required="required" checked> Oui
						            </label>
						        </div>
								<div class="radio">		                
						        	<label for="club">
						            	<input name="club" id="club" value="N" type="radio" required="required"> Non
						            </label>
						        </div>
				    		</td>
				    	</tr>  
				    </tbody>
				</table>
				<?= $this->Form->button(__('Effectuer un tirage'),['class'=>'btn btn-default']) ?>
				<?= $this->Form->end() ?>
			</div>
			<div class="col-lg-2"></div>
		</div>	
		<h4>Licenciés sélectionnés :  <?= $repartitions->count() ?></h4>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<table cellpadding="0" cellspacing="0" class="table table-striped">
				    <thead>
				        <tr>
			                <th>Prénom</th>
			                <th>Nom</th>
			                <th>Club</th>
				        </tr>
				    </thead>
				    <tbody> 
				    <?php foreach ($repartitions as $repartition): ?>
			            <tr>
			                <td><?= h($repartition->licency->prenom) ?></td>
			                <td><?= h($repartition->licency->nom) ?></td>
			                <td><?= h($repartition->licency->club->name) ?></td>
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