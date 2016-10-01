<div class="blocblanc">
	<h2>Tirage au sort</h2>
	<div class="blocblancContent large-9 medium-8 columns content">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-20"> 
				<div class='pouleTab'>
					<table cellpadding="0" cellspacing="0" class="table table-bordered">
						<tr><th>Poule $poule</th></tr>
						<tr>
							<td>t</td>
						</tr>
						<tr>
							<td>u</td>
						</tr>
						<tr>
							<td>i</td>
						</tr>		
					</table>
				</div>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<div class='pouleTab'>
					<table cellpadding="0" cellspacing="0" class="table table-bordered">
						<tr><th>Poule $poule</th></tr>
						<tr>
							<td>t</td>
						</tr>
						<tr>
							<td>u</td>
						</tr>
						<tr>
							<td>i</td>
						</tr>		
					</table>
				</div>&nbsp;&nbsp;&nbsp;&nbsp;
				<div class='pouleTab'>
					<table cellpadding="0" cellspacing="0" class="table table-bordered">
						<tr><th>Poule $poule</th></tr>
						<tr>
							<td>t</td>
						</tr>
						<tr>
							<td>u</td>
						</tr>
						<tr>
							<td>i</td>
						</tr>		
					</table>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>		
		<?php //debug($repartitions);
		
		foreach ($repartitions as $value) {
			echo $value['numero_poule']." ";
			echo $value['position_poule']." ";
			echo $value['licency']['nom']." ";
			echo $value['licency']['nom'];
			echo"<br />";
		}
		
		
		
		?>
				
