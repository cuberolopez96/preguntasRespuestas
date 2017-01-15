<?php 
/**
 * 
 */
 class Usuarios 

 {
 	private $nombre;
  private $email;
 	private $username;
 	private $password;

 	private $pdo;
    public function setUsername($username){
    	$this->username= $username;
    	return $this;
    }
    public function setPassword($password){
    	$this->password = md5($password);
    	return $this;
    }
    public function setNombre($nombre){
      $this->nombre = $nombre;
      return $this;
    }
    public function setEmail($email){
      $this->email = $email;
      return $this;
    }

   public function getUsuarios(){
   		$pdo = new ConnectDB();
   		$pre=$pdo->prepare("SELECT * FROM expertos");
   		$pre->execute();
   		return $pre->fetchAll();
   }
   public function save(){
   	$username = $this->username;
   	$password = $this->password;
   	$nombre = $this->nombre;
    $email = $this->email;
   	$this->pdo->exec("INSERT INTO expertos(nombre,usuario,password,email) VALUES('$nombre','$username','$password','$email')");
      
   	return $this;
   }

 	function __construct($username, $password,$nombre,$email)
 	{
 		$this->pdo = new ConnectDB();
 		$this->setUsername($username)->setPassword($password)->setNombre($nombre)->setEmail($email)->save();
 	}
 } ?>