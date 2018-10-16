<?php 

class Reservas{

	private $pdo; 

	public function __construct($pdo) {
			$this->pdo = $pdo; 
	}

	public function getReservas($data_retirada, $data_entrega){
		$array = array(); 

		$sql = "SELECT * FROM reservas WHERE ( NOT (data_retirada > :data_entrega OR data_entrega < :data_retirada) )"; 
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":data_retirada", $data_retirada); 
		$sql->bindValue(":data_entrega", $data_entrega);
		$sql->execute(); 

		if($sql->rowCount() > 0 ){
			$array = $sql->fetchAll(); 
		} 


		return $array;
	}


	public function verificarDisponibilidade($kit, $data_retirada, $data_entrega){

		$sql = "SELECT * FROM reservas WHERE id_kit = :kit 
		AND ( NOT (data_retirada > :data_entrega OR data_entrega < :data_retirada) ) ";
		

		$sql = $this->pdo->prepare($sql); 

		$sql->bindValue(":kit", $kit); 
		$sql->bindValue(":data_retirada",$data_retirada); 
		$sql->bindValue(":data_entrega", $data_entrega); 
		$sql->execute(); 

		if($sql->rowCount() > 0 ) {
			return false; 
		} else {
			return true; 
		}
	

	}

	public function reservar($kit, $data_retirada, $data_entrega, $nome_cliente){
		$sql = "INSERT INTO reservas (id_kit, data_retirada, data_entrega, nome_cliente) VALUES (:kit, :data_retirada, :data_entrega, :nome_cliente)"; 
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":kit", $kit); 
		$sql->bindValue(":data_retirada", $data_retirada); 
		$sql->bindValue(":data_entrega", $data_entrega); 
		//$sql->bindValue(":id_cliente", $id_cliente);
		$sql->bindValue(":nome_cliente", $nome_cliente);

		$sql->execute();
	
	}






}
	
	 


?>