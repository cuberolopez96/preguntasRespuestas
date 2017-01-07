<?php 
/**
 * 
 */
 class Usuarios 

 {
 	
 	private $username;
 	private $password;
 	private $role;
 	private $pdo;
    public function setUsername($username){
    	$this->username= $username;
    	return $this;
    }
    public function setPassword($password){
    	$this->password = md5($password);
    	return $this;
    }
    public function setRole($role){
    	$this->role=$role;
    	return $this;

    }
   public function getUsuarios(){
   		$pdo = new ConnectDB();
   		$pre=$pdo->prepare("SELECT * FROM usuarios");
   		$pre->execute();
   		return $pre->fetchAll();
   }
   public function save(){
   	$username = $this->username;
   	$password = $this->password;
   	$role = $this->role;
   	$this->pdo->exec("INSERT INTO usuarios(username,password,role) VALUES('$username','$password','$role')");
   	return $this;
   }

 	function __construct($username, $password,$role)
 	{
 		$this->pdo = new ConnectDB();
 		$this->setUsername($username)->setPassword($password)->setRole($role)->save();
 	}
 } ?>