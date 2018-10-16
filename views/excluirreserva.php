<?php 
require_once("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");




if(isset($_GET['id']) && !empty($_GET['id'])) {

	$id = $_GET['id']; 
	$sql = "DELETE FROM reservas WHERE id = '$id'";
	$pdo->query($sql); 

	header("location: listareservas");
} else {
	header("location: excluirreserva"); 
}



 ?>