<?php include('header.php'); ?>
			<ul class="user">
				<li class="novo">
					<?php echo form_open('raca/inserir', 'id="form-racas"'); ?>
						<table>
							<tr>
								<td colspan="2">
									<h3>NOVA RACA</h3>
								</td>
							</tr>
							<tr>
								<td width="58">
									<label>Nome</label>
								</td>
								<td>
									<input type="text" name="raca">
								</td>
							</tr>
							<tr>
			  					<td>
			  						<label>Vida</label>
			  					</td>
								<td>
			  						<input type="number" name="vida">
			  					</td>
			  				</tr>
			  				<tr>
			  					<td>
									<label>Forca</label>
								</td>
								<td>
									<input type="number" name="forca">
								</td>
							</tr>
							<tr>
			  					<td>
									<label>Agilidade</label>
								</td>
								<td>
									<input type="number" name="agilidade">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" value="SALVAR" title="Cadastrar nova Raca!">
								</td>
							</tr>
						</table>
					<?php echo form_close(); ?>	
				</li>
				<?php $line=1; foreach ($racas as $key=>$r): ?>
					<?php 
						if($line==3){
							$line = 0;
							echo "</ul><ul class='user'>";
						}
					?>
					<li>
						<?php echo form_open('raca/alterar', 'id="form-racas"'); ?>
							<table>
								<tr>
									<td colspan="2">
										<h3>RACA <?php echo $r->id; ?></h3>
										<input type="number" hidden="true" name="id" value="<?php echo $r->id; ?>">
									</td>
								</tr>
								<tr>
									<td width="58">
										<label>Nome</label>
									</td>
									<td>
										<input type="text" name="raca" value="<?php echo $r->raca; ?>">
									</td>
								</tr>
								<tr>
				  					<td>
				  						<label>Vida</label>
				  					</td>
									<td>
				  						<input type="number" name="vida" value="<?php echo $r->vida;?>">
				  					</td>
				  				</tr>
				  				<tr>
				  					<td>
										<label>Forca</label>
									</td>
									<td>
										<input type="number" name="forca" value="<?php echo $r->forca;?>">
									</td>
								</tr>
								<tr>
				  					<td>
										<label>Agilidade</label>
									</td>
									<td>
										<input type="number" name="agilidade" value="<?php echo $r->agilidade;?>">
									</td>
								</tr>
								<tr>
									<td>
										<a href="<?php echo base_url().'index.php/raca/deletar/'.$r->id;?>">
											<input type="button" value="X" title="Excluir Raca <?php echo $r->id; ?>">
										</a>
									</td>
									<td>
										<input type="submit" value="ALTERAR" title="Salvar Alteracoes da Raca <?php echo $r->id; ?>">
									</td>
								</tr>
							</table>
						<?php echo form_close(); ?>
					</li>
				<?php $line++; endforeach;?>	
			</ul>
<?php include('footer.php'); ?>	