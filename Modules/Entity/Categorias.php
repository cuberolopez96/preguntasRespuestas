<?php 
/**
 * 
 */
 class Categoria 
 {
 	private $nombre;
 	private $pdo;
 	public function setNombre($nombre){
 		$this->nombre = $nombre;
 		return $this;
 	}
 	public function getNombre(){
 		return $this->nombre;
 	}
 	public function save(){
 		$nombre = $this->nombre;
 		$pre = $this->pdo->exec("INSERT INTO categorias(nombre) VALUES('$nombre')");
 	}
 	public function getCategorias(){
 		$pdo = new ConnectDB();
 		$pre = $pdo->prepare("SELECT * FROM categorias");
 		$pre->execute();
 		return $pre->fetchAll();
 	}

 	function __construct($nombre)
 	{
 		$this->pdo = new ConnectDB();
 		$this->setNombre($nombre)->save();
 	}
 } ?>