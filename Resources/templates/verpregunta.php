<?php 
if (!isset($_GET['id'])) {
	header("Location: index.php");

}
$pregunta = Pregunta::getPreguntaById($_GET['id']);
$respuestas = Respuesta::getRespuestas();
 ?>
 <div>
 	<header>
 		<h3><?php echo $pregunta['pregunta']; ?></h3>
 	</header>
 	<div>
 		<div>
 			<?php foreach ($respuestas as $key => $respuesta): ?>
 				<?php if ($respuesta['idPregunta']==$_GET['id']): ?>
 					<div class="flag"><?php echo $respuesta['respuesta']; ?></div>
 				<?php endif ?>
 			<?php endforeach ?>
 		</div>
 	</div>
 </div>