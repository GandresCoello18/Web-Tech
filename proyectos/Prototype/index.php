<?php
$Titulo = "Prototypes Javascript";
$key1 = "poo con prototype"; $key2 = "programacion orientado a objetos"; $key3 = "utilizando poo con javascript"; $key4 = "que son los prototype";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>

<style type="text/css">
	#formulario{
		border: 1px solid #000;
		padding: 20px;
		border-radius: 10px;
	}
</style>

<body>
	<h3 class="text-center mt-5" id="titulo">Prototypes Javascript</h3>
	<p class="text-center p-2">Crear cotizador para la venta de telefonos celulares, el precio dependera de las opciones que escoja es usuario.</p>

	<section class="container mt-3">
			<div class="row justify-content-center">
			 		<div class="col-12 col-md-6">
			 			<form id="formulario">
			 				<div class="row">
			 					<div class="col-12">
			 						<h4 class="text-center m-2">Comprar celulares Samsung</h4>
			 						<label>Modelo</label>
			 				<select class="form-control" id="modelo">
			 					<option value="Seleccionar">Seleccionar</option>
			 					<option value="j1_mini">j1 mini</option>
			 					<option value="j2_normal">j2 normal</option>
			 					<option value="j2_prime">j2 prime</option>
			 					<option value="j5_normal">j5 normal</option>
			 					<option value="j5-prime">j5 prime</option>
			 					<option value="j5_pro">j5 pro</option>
			 				</select>
			 					</div>
			 					<div class="col-12 mt-2">
			 						<label>Producto de paquete</label>
			 						<select class="form-control" id="producto">
			 							<option value="Seleccionar">Seleccionar</option>
			 							<option value="si">SI</option>
			 							<option value="no">NO</option>
			 						</select>
			 					</div>
			 					<div class="col-12 mt-2">
			 						<label>Forma de pago</label>
			 						<select class="form-control" id="pago">
			 							<option value="Seleccionar">Seleccionar</option>
			 							<option value="efectivo">Efectivo</option>
			 							<option value="credito">Credito</option>
			 						</select>
			 					</div>
			 					<div class="col-12 mt-2 insertar">
			 						
			 					</div>
			 					<button class="form-control btn btn-success boton_cotizar mt-3">Cotizar</button>
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
<script src="js/prototype.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>