<?php 
$categorias = Categoria::getCategorias();
if (isset($_POST['add'])) {
	$bandera = true;
	if (!isset($_POST['enunciado'])) {
		$bandera = false;
	}
	if($bandera == true){
		echo $_POST['categoria'];
		$pregunta = new Pregunta($_POST['enunciado'],$_POST['categoria']);
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
			<label for="">Selecciona la categoría</label>
			<select name="categoria" id="">
				<?php foreach ($categorias as $key => $categoria): ?>
					<option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
				<?php endforeach ?>
			</select>
			<input type="submit" name="add"
			class="btn" value="add">
			
		</form>
	</div>
</div>