<?php include('header.php'); ?>
			<ul class="user">
				<li class="novo">
					<?php echo form_open('personagem/inserir', 'id="form-personagens"'); ?>
						<table>
							<tr>
								<td colspan="2">
									<h3>NOVO PERSONAGEM</h3>
								</td>
							</tr>
							<tr>
								<td width="58">
									<label>Nome</label>
								</td>
								<td>
									<input type="text" name="nome">
								</td>
							</tr>
							<tr>
								<td>
									<label>Raca</label>
								</td>
								<td>
									<select name="raca">
										<?php 
			  								foreach ($racas as $r)
			  									echo "<option value='$r->id'>$r->raca</option>";
			  							?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
			  						<label>Arma</label>
			  					</td>
								<td>
			  						<select name="arma">
			  							<?php 
			  								foreach ($armas as $a)
			  									echo "<option value='$a->id'>$a->descricao</option>";
			  							?>
			  						</select>
			  					</td>
			  				</tr>
			  				<tr>
			  					<td>
									<label>Dado</label>
								</td>
								<td>
									<input type="number" name="dado">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" value="SALVAR" title="cadastrar o personagem criado.">
								</td>
							</tr>
						</table>
					<?php echo form_close(); ?>	
				</li>
				<?php $line=1; foreach ($personagens as $key=>$p): ?>
					<?php 
						if($line==3){
							$line = 0;
							echo "</ul><ul class='user'>";
						}
					?>
					<li>
						<?php echo form_open('personagem/alterar', 'id="form-personagens"'); ?>
							<table>
								<tr>
									<td colspan="2">
										<h3>PERSONAGEM <?php echo $p->id; ?></h3>
										<input type="number" hidden="true" name="id" value="<?php echo $p->id; ?>">
									</td>
								</tr>
								<tr>
									<td width="58">  
										<label>Nome</label>
									</td>
									<td>
										<input type="text" name="nome" value="<?php echo $p->nome; ?>">
									</td>
								</tr>
								<tr>
									<td>
										<label>Raca</label>
									</td>
									<td>
										<select name="raca">
											<?php 
				  								foreach ($racas as $r)
				  									echo "<option value='$r->id' ".($p->raca==$r->id ? 'selected' : '').">$r->raca</option>";
			  								?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
				  						<label>Arma</label>
				  					</td>
									<td>
				  						<select name="arma">
			  								<?php 
				  								foreach ($armas as $a)
				  									echo "<option value='$a->id' ".($p->arma==$a->id ? 'selected' : '').">$a->descricao</option>";
			  								?>
			  							</select>
				  					</td>
				  				</tr>
				  				<tr>
				  					<td>
										<label>Dado</label>
									</td>
									<td>
										<input type="number" name="dado" value="<?php echo $p->dado;?>">
									</td>
								</tr>
								<tr>
									<td>
										<a href="<?php echo base_url().'index.php/personagem/deletar/'.$p->id;?>">
											<input type="button" value="X" title="Excluir Personagem <?php echo $p->id; ?>">
										</a>
									</td>
									<td>
										<input type="submit" value="ALTERAR" title="Salvar Alteracoes do Personagem <?php echo $p->id; ?>">
									</td>
								</tr>
							</table>
						<?php echo form_close(); ?>
					</li>
				<?php $line++; endforeach;?>	
			</ul>
<?php include('footer.php'); ?>	