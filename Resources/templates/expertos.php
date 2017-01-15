<?php 
comprobarPermisos();
$expertos = Usuarios::getUsuarios();
$vexpertos = array_reverse($expertos);
 ?>
<div class="row">
	<header>
		<h3>Expertos</h3>
		
	</header>
	<div>
		<?php foreach ($vexpertos as $key => $experto): ?>
			<div class="card">
				<img src="Resources/imagenes/foto.png" alt="">
				<div class="card-content">
					<header>
						<h4><?php echo $experto['usuario']; ?></h4>
					</header>
				</div>
			</div>
			
		<?php endforeach ?>
	</div>
</div>