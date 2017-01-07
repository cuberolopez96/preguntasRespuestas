<?php 
require_once "Modules/config.php";
require_once "Modules/Entity/ConnectDB.php";
require_once "Modules/Entity/Preguntas.php";
require_once "Modules/Entity/Categorias.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
			<li><a href="">HOME</a></li>
			<li><a href="">EXPERTOS</a></li>
			<li><a href="">CATEGORIAS</a></li>
		</ul>
	</nav>
	</main>

</body>
</html>