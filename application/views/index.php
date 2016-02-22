<?php include('header.php'); ?>
	<form method="post" action="" id="jogoFrm">
		<table class="jogo">
			<tr>
				<th>
					<select name="player1">
						<?php 
							if(!empty($_POST)){
								foreach($pC as $key=>$p)
				  					echo "<option value='$key'".($p->nome==$pC[$_POST["player1"]]->nome ? 'selected' : '').">$p->nome</option>";
							}
				  			else{ 
				  				foreach($pC as $key=>$p)
				  					echo "<option value='$key'>$p->nome</option>";
				  			}
				  		?>
					</select>
				</th>
				<th>Vs</th>
				<th>
					<select name="player2">
						<?php 
							if(!empty($_POST)){
								foreach($pC as $key=>$p)
				  					echo "<option value='$key'".($p->nome==$pC[$_POST["player2"]]->nome ? 'selected' : '').">$p->nome</option>";
							}
				  			else{ 
				  				foreach($pC as $key=>$p)
				  					echo "<option value='$key'>$p->nome</option>";
				  			}
				  		?>
					</select>
				</th>
				<th align="right">
					<input type="submit" value="INICIAR">
				</th>
			</tr>
			<tr>
				<th>JOGADA</th>
				<th>DADO</th>
				<th>ACAO</th>
				<th>DESCRICAO DO MOVIMENTO</th>
			</tr>
			<?php include('jogo.php'); ?>	
		</table>
	</form>
<?php include('footer.php'); ?>	