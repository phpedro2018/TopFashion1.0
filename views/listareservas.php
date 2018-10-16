<?php 
require_once ("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");
//$reservas = new Reservas($pdo); // injecao de dependencia
//$kits = new Kits($pdo);
//$cadastrarkit = new cadastrarKit($pdo);
$sqlListar = "SELECT * FROM reservas";
?>

<div class="conteudo-modal">
	<center>
		<h1>Reservas em Andamento / *Modo Lista</h1>
		<h4>Só é permitido alterar a data de entrega, clique sobre a data para alterar</h4>
	</center>


				<table class="tabela">
					<tr>
						<th>Código da Reserva</th>
						<th>Id do Kit</th>
						<th>Rerirado por</th>
						<th>Data de Reserva</th>
						<th>Data da Entrega</th>
						<th>Ações</th>
					</tr>
					
					
					<?php 
					$sqlListar = $pdo->query($sqlListar);
					foreach($sqlListar->fetchAll() as $reserva){
					?>
					
					<tr>
						<td><?php echo "#".$reserva['id']."<hr>" ?></td>
						<td><?php echo "#".$reserva['id_kit']."<hr>" ?></td>
						<td><?php echo $reserva['nome_cliente']."<hr>" ?></td>
						<td><?php echo date("d-m-Y", strtotime($reserva['data_retirada']))."<hr>" ?></td>
						<td>
							<a href=<?php echo "editarreserva.php?id=".$reserva['id'];?> >
								<?php echo date("d/m/Y", strtotime($reserva['data_entrega'])); ?>
							</a>
							<hr>
						</td>
						
						
						<td> 
							
							<a href=<?php echo "excluirreserva.php?id=".$reserva['id'];?> >
								Apagar 
							</a>

							<hr>
							
						</td>


						
					</tr>


					
					<?php } ?>

				</table>
			
					
			

</div>