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
 		$pre = $this->pdo->exec("INSERT INTO categorias(categoria) VALUES('$nombre')");
 	}
 	public function getCategorias(){
 		$pdo = new ConnectDB();
 		$pre = $pdo->prepare("SELECT * FROM categorias");
 		$pre->execute();
 		return $pre->fetchAll();
 	}
 	public function getCategoriasById($id){
 		$categorias = Categoria::getCategorias();
		foreach ($categorias as $key => $categoria) {
			if ($categoria['categoria'] == $id) {
				return $categoria;
			}
		}
		
 	}
 	

 	function __construct($nombre)
 	{
 		$this->pdo = new ConnectDB();
 		$this->setNombre($nombre)->save();
 	}
 } ?>