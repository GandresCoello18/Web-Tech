<?php
$Titulo = "Clases y Herencias";
$key1 = "programacion orientado a objetos"; $key2 = "poo clases y herencias"; $key3 = "tienda online con clases"; $key4 = "ejemplos con herencias, clases y metodos";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
	<h3 class="text-center mt-5" id="titulo">Clases y Herencias</h3>
	<p class="text-center p-2">Desarrollar una tienda en linea que me permita ver los precios y los descuentos.</p>

	<section class="container mt-3">
		<div class="row justify-content-center m-3">
			<div class="col-4 mt-3">
				<div class="row">
					<div class="col">
						<h6 class="text-center">Carrito</h6>
					</div>
					<div class="col">
						<div id="carrito">0</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<button class="btn btn-danger form-control boton_factura">50% OFF</button>
			</div>
		</div>
		<div class="row">
					<div class="col-12">
						<ul id="lista_carrito">
							
						</ul>
					</div>
				</div>
			<div class="row justify-content-center insertar">
		
			</div>

			<div class="insertar_factura">
				
			</div>

	</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/clase.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>