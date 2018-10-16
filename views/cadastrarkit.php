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

	<center><h1>Cadastrar Kit</h1></center>
	
	<?php 

	if(isset($_POST['descricaokit']) && !empty($_POST['descricaokit'])) {
		$descrição = addslashes($_POST['descricaokit']);

		$sql = "INSERT INTO kits (kit) VALUES ('$descrição')"; 
		$sql = $pdo->query($sql);
		header('Location:kitslista.php');
	}

	?>

	<div class="col-1">
		<form method="POST">
			Digite apenas a descrição do kit: <br/>
			<input type="text" name="descricaokit" required> <br/>

			<input type="submit" value="Cadastrar">
		</form>
	</div>	
</div>