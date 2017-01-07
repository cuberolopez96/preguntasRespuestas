<?php 
$usuarios = Usuarios::getUsuarios();
if(isset($_POST['login'])){
	$bandera = true;
	if(!isset($_POST['username'])){
		$bandera = false;
	}
	if(!isset($_POST['password'])){
		$bandera = false;
	}
	if($bandera == true){
		foreach ($usuarios as $key => $usuario) {
			if ($usuario['username']==$_POST['username']&&$usuario['password']==md5($_POST['password'])) {
				$_SESSION['usuario']= $usuario;
				header('Location: index.php');
			}
		}
	}
}
 ?>

<div>
	<header>
		<h3>Login</h3>
	</header>
	<div>
		<form action="index.php?page=login" method="post">
			<label for="">Username</label>
			<input type="text" name="username">
			<label for="">Password</label>
			<input type="password" name="password">
			<input type="submit" class="btn" name="login" value="Login" >
			<a href="index.php?page=register">
				¿No tienes cuenta?|Regístrate
			</a>
		</form>
	</div>
</div>