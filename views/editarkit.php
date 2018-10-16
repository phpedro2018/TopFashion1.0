<?php 


require_once("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");


?>


<div class="conteudo-modal">
	<center><h1>Atualizar Descrição do Kit</h1></center>

	<?php 
			if(isset($_GET['id']) && !empty($_GET['id'])){

				//pegando o kit pedo ld ao clicar
				$id = addslashes($_GET['id']); 
				$sql = "SELECT * FROM kits WHERE id = '$id'"; 
				$sql = $pdo->query($sql); 



				if($sql->rowCount() > 0){

					$dados_kit = $sql->fetch();

					if(isset($_POST['atualizar_descricaokit']) && !empty($_POST['atualizar_descricaokit'])){

						$descricao = addslashes($_POST['atualizar_descricaokit']); 

						$sql = "UPDATE kits SET kit = '$descricao' WHERE id = '$id' "; 
						$sql= $pdo->query($sql);
						header("Location:kitslista");


					
				} 
		}
						

		?>

	<div class="col-1">
		<form method="POST">
			Digite as novas informações do Kit <br/>
			<input value="<?php echo $dados_kit['kit'] ?>" type="text" name="atualizar_descricaokit" required> <br/>

			<input type="submit" value="Atualizar">
		</form>
	</div>	
</div>

<?php } ?>