<?php
$Titulo = "Event Listener para Input";
$key1 = "eventos para formulario"; $key2 = "eventListener para campos de textos"; $key3 = "animaciones para formulario"; $key4 = "input en javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
		<h3 class="text-center mt-5" id="titulo">Event Listener para Input</h3>
		<p class="text-center p-2">Crear un formulario que muestre los diferentes event listener que existen para input</p>

	<section class="container mt-3">
			<div class="row justify-content-center">
					<div class="col-12 col-md-7 fuera p-5">
						<form>
							<div class="row">
								<div class="col">
									<label>Nombre:</label>
									<input type="text" class="form-control nombre">
								</div>
								<div class="col">
									<label>Correo Electronico:</label>
									<input type="email" class="form-control correo">
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<label>Numero Telefonico</label>
									<input type="number" class="form-control telefono">
								</div>
								<div class="col-12">
									<label>Mensaje</label>
									<textarea class="form-control mensaje"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col mensaje-alert"></div>
							</div>
							<button class="btn btn-success form-control mt-4 enviar">Enviar</button>
						</form>		
					</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/bootstrap.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="js/input.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>