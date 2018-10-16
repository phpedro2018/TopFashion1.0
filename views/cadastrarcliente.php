<?php 
require_once ("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");
//$reservas = new Reservas($pdo); // injecao de dependencia
//$kits = new Kits($pdo);
//$cadastrarkit = new cadastrarKit($pdo);
?>


<div class="conteudo-modal">

	<center><h1>Cadastrar Cliente</h1></center>
	
	<?php 

	if(isset($_POST['campo-nomecliente']) && !empty($_POST['campo-nomecliente'])) {
		$nomeCliente = addslashes($_POST['campo-nomecliente']);
		$cpfcliente = addslashes($_POST['campo-cpfcliente']); 
		$contatoCliente = addslashes($_POST['campo-contatocliente']); 

		$sql = "INSERT INTO  clientes (nome, cpf, contato) VALUES ('$nomeCliente', '$cpfcliente', '$contatoCliente')"; 
		$sql = $pdo->query($sql);
		header('Location:cadastrarcliente');
	}

	?>

	<div class="col-1">
		<form method="POST">

			<div class="col-2">
			Digite o nome do cliente <br/>
			<input type="text" name="campo-nomecliente" required> <br/>	
			</div>

			<div class="col-3">
			Digite o CPF <br/>
			<input type="text" name="campo-cpfcliente" id="CPF" required> <br/>	
			</div>

			<div class="col-3">
			Contato (Telefone/Celular/WhatsApp) <br/>
			<input type="text" name="campo-contatocliente" id="contato" required> <br/>	
			</div>


			<input type="submit" value="Cadastrar">
		</form>
	</div>	
</div>

<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.js"></script>
<script type="text/javascript" src="../js/script.js"></script>