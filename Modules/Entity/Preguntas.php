<?php 
/**
* 
*/
class Pregunta 
{
	private $enunciado;
	private $categoria;
	private $pdo;

	public function setEnunciado($enunciado){
		$this->enunciado=$enunciado;
		return $this;
	}
	public function setCategoria($categoria){
		$this->categoria = $categoria;

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
		$categoria = $this->categoria;
		
		$this->pdo->exec("INSERT INTO preguntas(enunciado,categoria) VALUES('$enunciado','$categoria')");
	}
	function __construct($enunciado,$categoria)
	{
		$this->pdo = new ConnectDB();

		$this->setEnunciado($enunciado)->setCategoria($categoria)->save();
	}

}
 ?>