<?php 
/**
* 
*/
class ConnectDB
{
	private $pdo;
	function __construct()
	{
		$this->pdo= new PDO(DRIVER.':host='.HOST.';dbname='.DBNAME,USERNAME,PASSWORD);

	}

	public function prepare($consulta){
		return $this->pdo->prepare($consulta);

	}
	public function exec($consulta){
		return $this->pdo->exec($consulta);
	}
}
 ?>