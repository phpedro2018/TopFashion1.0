<?php require_once("../php/login-ok.php"); ?>
<html>

<head>
<?php require_once("../libraries/head.php"); ?>
<link rel="stylesheet" type="text/css" href="../libraries/login.css">
</head>

<body> 

<div class="container">
	<div class="caixaLogin">

		<div class="logoLogin">
			<div class="logoimg">
				<center><img src="../img/logogrande.jpg" alt=""></center>
			</div>
		</div>

		<div class="formularioLogin">
			<form method="POST">
				Usuário: <br/>
				<input type="text" name="usuario" required> <br/>
				Senha: <br/>
				<input type="password" name="senha" required> <br/>
				<input type="submit" value="Acessar"> <input type="submit" value="Cadastrar"> 
			</form>	
			
			<center>	
				Versão 1.0.0 <br/> <a href="https://www.facebook.com/ph7web/" target="about">Desenvolvido PH7</a>
			</center>
		</div>
	</div>
</div>

</body>
</html>