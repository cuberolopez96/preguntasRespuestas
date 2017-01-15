<?php 
comprobarPermisos();
$categorias = Categoria::getCategorias();
$vcategorias = array_reverse($categorias);
 ?>
<div>
	<header>
		<h3>Categorias</h3>
		<a href="index.php?page=addcategoria" class="right">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
	</header>
	<div>
		<?php foreach ($vcategorias as $key => $categoria): ?>
			<div class="card">
				<img src="Resources/imagenes/foto.png" alt="">
				<div>
					<header>
						<h4><?php echo $categoria['categoria'] ?></h4>
						<a href=<?php echo "index.php?page=vercategoria&id=".$categoria['categoria'] ?> class="right">Ver</a>
					</header>
				</div>

				
			</div>
			
		<?php endforeach ?>
	</div>
	
</div>