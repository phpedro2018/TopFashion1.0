<?php 


class cadastrarKit{
	private $pdo;
	private $descricao;

	public function __construct($pdo){
		$this->pdo = $pdo;
		
		
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao(){
		if(is_string($descricao)) {
		$this->descricao = $descricao;
		}
	}

	public function cadastrarkit($descricao){
		$sql = "INSERT INTO kits (kit) VALUES (:descricao)";
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":descricao", $descricao);
		$sql->execute();

		var_dump($descricao);

	}


}




	
?>