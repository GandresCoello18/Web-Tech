<?php
$Titulo = "Delegation Javascript";
$key1 = "contains en javascript"; $key2 = "ejemplo de delegation js"; $key3 = "programa para agregar notas"; $key4 = "agregando y borrando notas javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
	<h3 class="text-center mt-5" id="titulo">Delegation Javascript</h3>
	<p class="text-center p-2">Crear un pequeno programa para anotar las tareas a relizar.</p>

	<section class="container mt-3">
			<div class="row justify-content-center">
					<div class="col-12 col-md-6">
						<form>
							<div class="row">
									<div class="col-12">
										<input type="text" placeholder="tarea" class="form-control tarea">
									</div>
									<div class="col-12 mt-2">
										<input type="date" class="form-control dia">
									</div>
									<div class="col-12 mt-2">
										<button class="btn btn-success form-control boton_crear">Crear nota</button>
									</div>
							</div>
						</form>
					</div>
					<div class="col-12 col-md-6 cosas mt-3">
						<h5 class="text-center">Cosas por hacer</h5>
					</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/delegation.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>