<?php 
if(!isset($_GET['id'])){
	header('Location: index.php');
}
$categoria = Categoria::getCategoriasById($_GET['id']);
$preguntas = Pregunta::getPreguntas();
$vpreguntas = array_reverse($preguntas);
?>
<div>
	<header>
		<h3><?php echo $categoria['categoria']; ?></h3>
	</header>
	<div>
		<?php foreach ($vpreguntas as $key => $pregunta): ?>
			<?php if ($pregunta['categoria']==$_GET['id']): ?>
				<div class="card">
					<img src="Resources/imagenes/foto.png" alt="">
					<div class="card-content">
						<header>
							<h4><?php echo $pregunta['pregunta']; ?></h4>
							<a href=<?php echo "index.php?page=verpregunta&id=$pregunta[id]" ?> class="right">Ver</a>
						</header>
					</div>
				</div>
			<?php endif ?>
			
		<?php endforeach ?>
	</div>
</div>