<?php 

class Clientes{

	private $pdo; 

	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function getClientes(){
		$array = array();

		$sql = "SELECT * FROM clientes"; 
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0 ){
			$array = $sql->fetchAll();	
		}

		return $array;
	}
}


?>