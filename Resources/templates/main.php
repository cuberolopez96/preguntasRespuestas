<?php 
comprobarPermisos();
$preguntas = Pregunta::getPreguntas();
$vpreguntas = array_reverse($preguntas);

 ?>
<div>
	<header>
		<h3>Preguntas</h3>
		<a href="index.php?page=addpregunta" class="right">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
	</header>
	<div>
		<?php foreach ($vpreguntas as $pregunta): ?>
		<div class="card">
			<img src="Resources/imagenes/foto.png" alt="">
			<div class="card-content">
				<header>
					<h4><?php echo $pregunta['pregunta']; ?></h4>
					<a href=<?php echo "index.php?page=verpregunta&id=$pregunta[id]" ?> class="right">Ver</a>
				</header>
			</div>
		</div>
	<?php endforeach ?>
	</div>


</div>