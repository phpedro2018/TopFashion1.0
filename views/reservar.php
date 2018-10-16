<?php 

require_once("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");


$reservas = new Reservas($pdo); // injecao de dependencia
$kits = new kits($pdo);
$clientes = new clientes($pdo);


if(!empty($_POST['kit'])) {

	$kit = addslashes($_POST['kit']); 
	$data_retirada = explode('/',addslashes($_POST['data_retirada'])); 
	$data_entrega = explode('/',addslashes($_POST['data_entrega'])); 
	$cliente = addslashes($_POST['cliente']);


	$data_retirada = $data_retirada[2].'-'.$data_retirada[1].'-'.$data_retirada[0];
	$data_entrega = $data_entrega[2].'-'.$data_entrega[1].'-'.$data_entrega[0];

	if($reservas->verificarDisponibilidade($kit, $data_retirada, $data_entrega)) {
		$reservas->reservar($kit, $data_retirada, $data_entrega, $cliente); 
		header("Location:../views/index");
		exit;
	}	else {
		echo 
        " 
        <script>
        alert('O Kit já está reservado nesse período');
        </script>
        ";
	}


}

?>


<div class="conteudo-modal">
	<center><h1>Reservar Kit</h1></center>
		<div class="col-1">
			<form method="POST">
    				<div class="col-1">
	   					Kit de Retirada 
	   					<select name="kit">
    						<?php 
	   							$lista = $kits->getkits();
    							foreach($lista as $kit):
    						?>

    						<option value="<?php echo $kit['id'];?>" > 
    							<?php echo "#".$kit['id'].' - '.$kit['kit']; ?> 
    						</option>

    						<?php 
    						endforeach;
							?>
						</select>



    					</div>
						
						<div class="col-2">
    					Data de Retirada <input type="text" name="data_retirada"  value="<?php echo date('d/m/Y'); ?>" required>
    					</div>

    					<div class="col-2">
    					Data de Entrega <input type="text" name="data_entrega" id="data" required>
    					</div>

    					<div class="col-1">
    					Cliente : <br>
    					<select name="cliente">
    						<?php 
	   							$listaC = $clientes->getclientes();
    							foreach($listaC as $cliente):
    						?>

    						<option value="<?php echo $cliente['nome'];?>" > 
    							<?php echo $cliente['id'].' - '.$cliente['nome']; ?> 
    						</option>

    						<?php 
    						endforeach;
							?>
						</select> 
    					</div>
						
						<div class="col-1">
    					<input type="submit" value="Confirmar Reserva">
    					</div>
    				</form>
    			</div>
	</div>

<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

<?php require_once("../libraries/rodape.php"); ?>
		