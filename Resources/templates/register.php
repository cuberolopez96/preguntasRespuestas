<?php  
if (isset($_POST['register'])) {
	$bandera = true;
	if(!isset($_POST['nombre'])){
		$bandera = false;
	}
	if(!isset($_POST['email'])){
		$bandera = false;
	}
	if(!isset($_POST['username'])){
		$bandera = false;
	}
	if (!isset($_POST['password'])) {
		$bandera = false;
	}
	if(!isset($_POST['cpassword'])){
		$bandera = false;
	}
	if($_POST['password']!=$_POST['cpassword']){
		$bandera = false;
	}
	if($bandera == true){
		$usuario = new Usuarios($_POST['username'],$_POST['password'],$_POST['nombre'],$_POST['email']);
		header("Location: index.php?page=login");
	}
}
?>
<div>
	<header>
		<h3>Registro de expertos</h3>
	</header>
	<div>
		<form action="index.php?page=register" method="post">
			<label for="">Nombre</label>
			<input type="text" name="nombre">
			<label for="">Email</label>
			<input type="text" name="email">
			<label for="">Username</label>
			<input type="text" name="username" >
			<label for="">Password</label>
			<input type="password" name="password" >
			<label for="">Verify Password</label>
			<input type="password" name="cpassword">
			<input type="submit" class="btn" name="register" value="register">
		</form>
	</div>
</div>