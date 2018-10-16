<?php
session_start();
require 'config.php';

if(isset($_POST['usuario']) && empty($_POST['usuario']) == false) {

	$usuario = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha");
	$sql->bindValue(":usuario", $usuario);
	//$sql->bindValue(":usuario", $nome);
	$sql->bindValue(":senha", $senha);
	$sql->execute();

	if($sql->rowCount() > 0) {
		$sql = $sql->fetch();

		$_SESSION['vn'] = $sql['id'];
		header("Location: ../views/index");
		exit;
	}


}
?>