<?php 

try {
	$pdo = new PDO("mysql:dbname=projeto_vn; host=localhost; charset=utf8", "root", "root");
} catch (PFOException $e) {
	echo "Erro...".$e->getMessage();
	exit;
}

require_once ("../class/kits.class.php"); 
require_once ("../class/clientes.class.php"); 
require_once ("../class/reservas.class.php"); 
//require_once ("../class/cadastrarkit.class.php"); 



?>