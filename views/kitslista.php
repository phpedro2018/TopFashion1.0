<?php 
require_once ("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");
//$reservas = new Reservas($pdo); // injecao de dependencia
//$kits = new Kits($pdo);
//$cadastrarkit = new cadastrarKit($pdo);
$sqlListar = "SELECT * FROM kits";
?>

<div class="conteudo-modal">
	<center>
		<h1>Lista dos Kits Cadastrados</h1>
	</center>


				<table class="tabela">
					<tr>
						<th>Id do Kit</th>
						<th>Descrição</th>
						<th>Ações</th>
					</tr>
					
					
					<?php 
					$sqlListar = $pdo->query($sqlListar);
					foreach($sqlListar->fetchAll() as $kit){
					?>
					
					<tr>
						<td><?php echo "#".$kit['id']."<hr>" ?></td>
						<td><?php echo $kit['kit']."<hr>" ?></td>
						
						<td> 
							
							
							<a href=<?php echo "editarkit.php?id=".$kit['id'];?> >
								Editar
							</a> |

							<a href=<?php echo "excluirkit.php?id=".$kit['id'];?> >
								Apagar 
							</a>

							<hr>
							
						</td>


						
					</tr>


					
					<?php } ?>

				</table>
			
					
			

</div>