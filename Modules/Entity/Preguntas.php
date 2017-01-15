<?php 
/**
* 
*/
class Pregunta 
{
	private $enunciado;
	private $categoria;
	private $experto;
	private $objeto;
	private $tipoObjeto;
	private $nivel;


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
	public function setNivel($nivel){
		$this->nivel = $nivel;
		return $this;
	}
	public function setObjeto($objeto){
		$this->objeto = $objeto;
		return $this;
	}
	public function setTipoObjeto($tipoObjeto){
		$this->tipoObjeto=$tipoObjeto;
		return $this;
	}
	public function setExperto($experto){
		$this->experto = $experto;
		return $this;
	}
	public function getPreguntas(){
		$pdo = new ConnectDB;
		$pre= $pdo->prepare("SELECT * FROM preguntas");
		$pre->execute();
		return $pre->fetchAll();
	}
	public function getPreguntaById($id){
		$preguntas = Pregunta::getPreguntas();
		foreach ($preguntas as $key => $pregunta) {
			if ($pregunta['id']==$id) {
				return $pregunta;
			}
		}
	}
	public function save(){
		$enunciado=$this->enunciado;
		$categoria = $this->categoria;
		$nivel = $this->nivel;
		$objeto = $this->objeto;
		$tipoObjeto = $this->tipoObjeto;
		$experto = $this->experto;
		$this->pdo->exec("INSERT INTO pregunta(pregunta,categoria,Objeto,tipoObjeto,nivel,experto) VALUES('$enunciado','$categoria','$objeto','$tipoObjeto','$nivel','$experto')");
	}
	public function giveLastId(){
		$pdo = new ConnectDB();
		$pre =$pdo->prepare('SELECT MAX(id) AS id FROM pregunta');
		$pre->execute();
		return $pre->fetchAll();
	}
	function __construct($enunciado,$categoria,$objeto,$tipoObjeto,$nivel,$expertop)
	{
		$this->pdo = new ConnectDB();

		$this->setEnunciado($enunciado)->setCategoria($categoria)->setObjeto($objeto)->setTipoObjeto($tipoObjeto)->setNivel($nivel)->setExperto($experto)->save();
	}

}
 ?>