<?php include('header.php'); ?>
			<ul class="user">
				<li class="novo">
					<?php echo form_open('arma/inserir', 'id="form-armas"'); ?>
						<table>
							<tr>
								<td colspan="2">
									<h3>NOVA ARMA</h3>
								</td>
							</tr>
							<tr>
								<td width="58">
									<label>Nome</label>
								</td>
								<td>
									<input type="text" name="descricao">
								</td>
							</tr>
							<tr>
								<td>
									<label>Ataque</label>
								</td>
								<td>
									<input type="number" name="ataque">
								</td>
							</tr>
							<tr>
								<td>
			  						<label>Defesa</label>
			  					</td>
								<td>
									<input type="number" name="defesa">
								</td>
			  				</tr>
			  				<tr>
								<td colspan="2">
									<input type="submit" value="SALVAR" title="Cadastrar o Arma.">
								</td>
							</tr>
						</table>
					<?php echo form_close(); ?>	
				</li>
				<?php $line=1; foreach ($armas as $key=>$a): ?>
					<?php 
						if($line==3){
							$line = 0;
							echo "</ul><ul class='user'>";
						}
					?>
					<li>
						<?php echo form_open('arma/alterar', 'id="form-armas"'); ?>
							<table>
								<tr>
									<td colspan="2">
										<h3>ARMA <?php echo $a->id; ?></h3>
										<input type="number" hidden="true" name="id" value="<?php echo $a->id; ?>">
									</td>
								</tr>
								<tr>
									<td width="58">
										<label>Nome</label>
									</td>
									<td>
										<input type="text" name="descricao" value="<?php echo $a->descricao; ?>">
									</td>
								</tr>
								<tr>
									<td>
										<label>Ataque</label>
									</td>
									<td>
										<input type="text" name="ataque" value="<?php echo $a->ataque; ?>">
									</td>
								</tr>
								<tr>
									<td>
				  						<label>Defesa</label>
				  					</td>
									<td>
										<input type="text" name="defesa" value="<?php echo $a->defesa; ?>">
									</td>
				  				</tr>
				  				<tr>
									<td>
										<a href="<?php echo base_url().'index.php/arma/deletar/'.$a->id;?>">
											<input type="button" value="X" title="Excluir Arma <?php echo $a->id; ?>">
										</a>
									</td>
									<td>
										<input type="submit" value="ALTERAR" title="Salvar Alteracoes da Arma <?php echo $a->id; ?>">
									</td>
								</tr>
							</table>
						<?php echo form_close(); ?>
					</li>
				<?php $line++; endforeach;?>	
			</ul>
<?php include('footer.php'); ?>	