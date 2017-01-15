<?php 
session_start();
require_once "Modules/config.php";
require_once "Modules/Entity/ConnectDB.php";
require_once "Modules/Entity/Preguntas.php";
require_once "Modules/Entity/Categorias.php";
require_once "Modules/Entity/Usuarios.php";
require_once "Modules/Entity/Respuestas.php";
require_once "Modules/functions.php";
cargarVariablesSesion();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>
	Welcome</title>
	<link rel="stylesheet" href="Resources/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="Resources/css/init.css">
</head>
<body>
	<main>
		
		<div>
			<?php require_once 'Modules/Route.php'; ?>
		</div>
		<nav class="tabs">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="index.php?page=expertos">EXPERTOS</a></li>
			<li><a href="index.php?page=categorias">CATEGORIAS</a></li>
		</ul>
	</nav>
	</main>

</body>
</html>