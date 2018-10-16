<?php 

class Kits{

	private $pdo; 

	public function __construct($pdo) {
			$this->pdo = $pdo; 
	}

	public function getKits(){
		$array = array();

			$sql = "SELECT * FROM kits "; 
			$sql = $this->pdo->query($sql);

			if($sql->rowCount() > 0 ){
				$array = $sql->fetchAll();
			}

			return $array; 
	}

}


?>