<?php 
require 'config.php';
$reservas = new Reservas($pdo); // injecao de dependencia
$kits = new kits($pdo);


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
		echo "kit já está reservado neste período";
	}


}

?>