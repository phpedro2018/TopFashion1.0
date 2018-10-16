<?php 

require_once("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");

//pegando o valor pelo id ao clicar
if(isset($_GET['id']) && !empty($_GET['id'])) {
	$id = addslashes($_GET['id']); 
	$sql = "SELECT * FROM reservas WHERE id = '$id'"; 
	$sql = $pdo->query($sql);
// termina



	if($sql->rowCount() > 0 ){
		$dados_reserva = $sql->fetch(); 

		if(isset($_POST['atualizar_dataentrega']) && !empty($_POST['atualizar_dataentrega'])){

						$atualizarDataEnt = addslashes($_POST['atualizar_dataentrega']); 

						$sql = "UPDATE reservas SET data_entrega = '$atualizarDataEnt' WHERE id = '$id' "; 
						$sql= $pdo->query($sql);
						header("Location:listareservas");

	}
}

?>

<div class="conteudo-modal">
	<center><h1>Reservar Kit</h1></center>
		<div class="col-1">
			<form method="POST">
				
				<?php date("d/m/Y", strtotime($dados_reserva['data_entrega'])) ?>		
				<div class="col-3">
					<input type="text" value="<?php echo $dados_reserva['data_entrega'] ?>" name="atualizar_dataentrega"  >
				</div>

						
				<div class="col-1">
    				<input type="submit" value="Atualizar Data">
    			</div>
    				</form>
    			</div>
	</div>

<?php } ?>