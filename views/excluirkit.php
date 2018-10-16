<?php 
require_once("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");




if(isset($_GET['id']) && !empty($_GET['id'])) {

	$id = $_GET['id']; 
	$sql = "DELETE FROM kits WHERE id = '$id'";
	$pdo->query($sql); 

	header("location: kitslista");
} else {
	header("location: excluirkit"); 
}



 ?>