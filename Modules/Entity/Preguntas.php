<?php 
/**
* 
*/
class Pregunta 
{
	private $enunciado;
	private $pdo;
	public function setEnunciado($enunciado){
		$this->enunciado=$enunciado;
		return $this;
	}
	public function getEnunciado(){
		return $this->enunciado;
	}
	public function getPreguntas(){
		$pdo = new ConnectDB;
		$pre= $pdo->prepare("SELECT * FROM preguntas");
		$pre->execute();
		return $pre->fetchAll();
	}
	public function save(){
		$enunciado=$this->enunciado;
		$this->pdo->exec("INSERT INTO preguntas(enunciado) VALUES('$enunciado')");
	}
	function __construct($enunciado)
	{
		$this->pdo = new ConnectDB();
		$this->setEnunciado($enunciado)->save();
	}

}
 ?>