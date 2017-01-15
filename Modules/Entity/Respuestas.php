<?php 
/**
* 
*/
class Respuesta
{
	private $enunciado;
	private $pregunta;
	private $pdo;
	public function setEnunciado($enunciado){
		$this->enunciado = $enunciado;
		return $this;
	}
	public function setPregunta($pregunta){
		$this->pregunta = $pregunta;
		return $this;
	}
	public function save(){
		$enunciado = $this->enunciado;
		$pregunta = $this->pregunta;
		$this->pdo->exec("INSERT INTO respuestas(respuesta,idPregunta) VALUES('$enunciado','$pregunta')");
		return $this;
	}
	public function getRespuestas(){
		$pdo = new ConnectDB();
		$pre = $pdo->prepare("SELECT * FROM respuestas");
		$pre->execute();
		return $pre->fetchAll();
	}
	function __construct($enunciado,$pregunta)
	{
		$this->pdo = new ConnectDB();
		$this->setEnunciado($enunciado)->setPregunta($pregunta)->save();
	}
}
 ?>