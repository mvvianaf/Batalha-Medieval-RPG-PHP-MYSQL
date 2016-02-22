<?php 
	$jogada=0;
	$inicioJogadaP1=0;
	$inicioJogadaP2=0;
	if (!empty($_POST)){
		$p1 = $pC[$_POST["player1"]];
		$p2 = $pC[$_POST["player2"]];
		do{
			do{
				$dado1 = rand(1,20);
				$inicioJogadaP1 = $dado1+($p1->agilidade);

				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado1</td><td>VALOR: $inicioJogadaP1</td><td>$p1->nome LANCA 1D20 PARA DEFINICAO DE INICIO</td></tr>";
				$jogada++;

				$dado2 = rand(1,20);
				$inicioJogadaP2 = $dado2+($p2->agilidade);
				
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado2</td><td>VALOR: $inicioJogadaP2</td><td>$p2->nome LANCA 1D20 PARA DEFINICAO DE INICIO</td></tr>";
				$jogada++;
					
			}while($inicioJogadaP1==$inicioJogadaP2);
					
			if($inicioJogadaP1>$inicioJogadaP2){
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>-</td><td>-</td><td>$p1->nome COMECA O ATAQUE DESTE TURNO</td></tr>";
				$jogada++;
			}
			else{
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>-</td><td>-</td><td>$p2->nome COMECA O ATAQUE DESTE TURNO</td></tr>";
				$jogada++;
			}
				
			if($inicioJogadaP1>$inicioJogadaP2){
				$dado = rand(1,20);
				$ataque = $dado + ($p1->agilidade) + ($p1->ataque);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>ATAQUE: $ataque</td><td>$p1->nome TENTA ATACAR $p2->nome</td></tr>";
				$jogada++;
						
				$dado = rand(1,20);
				$defesa = $dado + ($p2->agilidade) + ($p2->defesa);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p2->nome TENTA DEFENDER $p1->nome</td></tr>";
				$jogada++;
						
				if($ataque>$defesa){
					$dado = rand(1,$p1->dado);
					$dano = ($dado+($p1->forca));
					$p2->vida -= $dano;
							
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DANO: $dano</td><td>$p1->nome ATACOU $p2->nome</td></tr>";
					$jogada++;
					
					if($p2->vida<=0)
						break;
				}
				else{
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p2->nome DEFENDEU ATAQUE $p1->nome</td></tr>";
					$jogada++;
				}
				$dado = rand(1,20);
				$ataque = $dado + ($p2->agilidade) + ($p2->ataque);
					
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>ATAQUE: $ataque</td><td>$p2->nome TENTA ATACAR $p1->nome</td></tr>";
				$jogada++;
						
				$dado = rand(1,20);
				$defesa = $dado + ($p1->agilidade) + ($p1->defesa);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p1->nome TENTA DEFENDER $p2->nome</td></tr>";
				$jogada++;
					
				if($ataque>$defesa){
					$dado = rand(1,$p2->dado);
					$dano = ($dado+($p2->forca));
					$p1->vida -= $dano;
						
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DANO: $dano</td><td>$p2->nome ATACOU $p1->nome</td></tr>";
					$jogada++;
					
					if($p1->vida<=0)
						break;
				}
				else{
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p1->nome DEFENDEU ATAQUE $p2->nome</td></tr>";
					$jogada++;
				}
			}
			else{
				$dado = rand(1,20);
				$ataque = $dado + ($p2->agilidade) + ($p2->ataque);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>ATAQUE: $ataque</td><td>$p2->nome TENTA ATACAR $p1->nome</td></tr>";
				$jogada++;
						
				$dado = rand(1,20);
				$defesa = $dado + ($p1->agilidade) + ($p1->defesa);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p1->nome TENTA DEFENDER $p2->nome</td></tr>";
				$jogada++;
						
				if($ataque>$defesa){
					$dado = rand(1,$p2->dado);
					$dano = ($dado+($p2->forca));
					$p1->vida -= $dano;
							
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DANO: $dano</td><td>$p2->nome ATACOU $p1->nome</td></tr>";
					$jogada++;
					
					if($p1->vida<=0)
						break;
				}
				else{
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p1->nome DEFENDEU ATAQUE $p2->nome</td></tr>";
					$jogada++;
				}
				$dado = rand(1,20);
				$ataque = $dado + ($p1->agilidade) + ($p1->ataque);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>ATAQUE: $ataque</td><td>$p1->nome TENTA ATACAR $p2->nome</td></tr>";
				$jogada++;
						
				$dado = rand(1,20);
				$defesa = $dado + ($p2->agilidade) + ($p2->defesa);
						
				echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p2->nome TENTA DEFENDER $p1->nome</td></tr>";
				$jogada++;
						
				if($ataque>$defesa){
					$dado = rand(1,$p1->dado);
					$dano = ($dado+($p1->forca));
					$p2->vida -= $dano;
						
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DANO: $dano</td><td>$p1->nome ATACOU $p2->nome</td></tr>";
					$jogada++;
					
					if($p2->vida<=0)
						break;
				}
				else{
					echo "<tr style=".($jogada%2==0 ? 'background-color:#ecf0f1' : '')."><td>$jogada</td><td>$dado</td><td>DEFESA: $defesa</td><td>$p2->nome DEFENDEU ATAQUE $p1->nome</td></tr>";
					$jogada++;
				}
			}
		}while((($p1->vida)>0) && (($p2->vida)>0));
		echo "<tr><td colspan='4' class='vencedor'>O VENCEDOR E ".($p1->vida>0 ? $p1->nome : $p2->nome)."</td></tr>";
	}
?>		