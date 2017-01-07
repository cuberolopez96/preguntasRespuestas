<?php 
	if (isset($_POST['add'])) {
		$bandera = true;
		if(!isset($_POST['nombre'])){
			$bandera = false;
		}
		# code...
		if ($bandera == true) {
			$categoria = new Categoria($_POST['nombre']);
			header("Location: index.php?page=categorias");
		}

	}
 ?>
<div>
	<header>
		<h3>
			Añadir Categoria
		</h3>
	</header>
	<div>
		<form action="index.php?page=addcategoria" method="post">
			<label for="">Nombre</label>
			<input type="text" name="nombre">
			<input type="submit" class="btn" name="add" values="add">

		</form>
	</div>
</div>