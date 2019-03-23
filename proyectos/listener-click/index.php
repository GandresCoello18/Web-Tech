<?php
$Titulo = "Event Listener Click";
$key1 = "evento click en javascript"; $key2 = "programacion moderna con javascript"; $key3 = "eviar formulario con evento click"; $key4 = "ejemplos con javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>

	<h3 class="text-center mt-5" id="titulo">Event Listener "Click"</h3>
	<p class="text-center p-2">Crear un formulario que contenga  un Email y un botom para enviar, verificando que el dato ingresado sean correctos.</p>

	<section class="container mt-4" id="cta">
			<div class="row">
				<div class="col-12">
					<h2>Sign up for beta access</h2>
					<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>
				</div>
				<div class="col-12">
					<form>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="email" class="form-control" id="email" placeholder="Correo Electronico">
							</div>
							<div class="col-4 col-12-mobilep">
								<input type="submit" id="enviar" class="btn btn-success form-control" value="Sign Up">
							</div>
						</div>
					</form>
				</div>	
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/evento_click.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>