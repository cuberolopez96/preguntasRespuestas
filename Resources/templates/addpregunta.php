<?php 
if (isset($_POST['add'])) {
	$bandera = true;
	if (!isset($_POST['enunciado'])) {
		$bandera = false;
	}
	if($bandera == true){
		$pregunta = new Pregunta($_POST['enunciado']);
		header("Location: index.php");
	}
}
 ?>
<div>
	<header>
		<h3>Añadir Preguntas</h3>
	</header>
	<div>
		<form action="index.php?page=addpregunta" method="post">
			<label for="">Enunciado</label>
			<input type="text" name="enunciado" >
			<input type="submit" name="add"
			class="btn" value="add">
		</form>
	</div>
</div>