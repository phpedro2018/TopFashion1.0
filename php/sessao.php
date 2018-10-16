<?php
session_start();
require 'config.php';

if(isset($_SESSION['vn']) && empty($_SESSION['vn']) == false) {
	$id = $_SESSION['vn'];

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if($sql->rowCount() > 0) {
		$info = $sql->fetch();
	} else {
		header("Location: ../views/login");
		exit;
	}

} else {
	header("Location: ../views/login");
	exit;
}
?>