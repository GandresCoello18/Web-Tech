<?php
$Titulo = "Creando elementos";
$key1 = "Creando elementos con javascript"; $key2 = "createElement en javascript"; $key3 = "como crear etiquetas html con javascript"; $key4 = "ejemplo con createElement js";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
	<h3 class="text-center mt-5" id="titulo">Creando Elementos</h3>
	<p class="p-2 text-center">Crear varios elementos y de diferentes tipos con javascript, con sus respectivos atributos.</p>

		<div class="container">
			<div class="row gris m-1 p-3">
				<div class="col-12 caja">
					<h6 class="text-center">Div</h6>

					<hr/>			
				</div>
				<div class="col-12 parrafo">
					<hr/>
					<h6 class="text-center">Parrafo</h6>
					
					<hr/>
				</div>
				<div class="col-12 lista">
					<hr/>
					<h6 class="text-center">Ul - Li</h6>
					
					<hr/>
				</div>
				<div class="col-12 enlace">
					<hr/>
					<h6 class="text-center">Enlace</h6>

					<hr/>
				</div>
				<div class="col-12 botones">
					<hr/>
					<h6 class="text-center">Boton</h6>

					<hr/>
				</div>
				<div class="col-12 caja_texto">
					<hr/>
					<h6 class="text-center">Caja de texto</h6>

					<hr/>
				</div>
				<div class="col-12">
					<button class="btn btn-success form-control" onclick="seleccionar()">Seleccionar</button>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<form id="formulario" style="z-index: 99;">
						<select id="seleccionar_elemento" class="form-control">
							<option>Elemento</option>
							<option value="div">Div</option>
							<option value="parrafo">Parrafo</option>
							<option value="lista">Lista</option>
							<option value="enlace">Enlace</option>
							<option value="boton">Boton</option>
							<option value="caja_de_texto">Caja de texto</option>
						</select>
						<button class="btn btn-success form-control mt-4" type="button" onclick="crear_elemento()">Crear Elemento</button>
					</form>
				</div>
			</div>
		</div>

<?php
include('../modelo_video.php');
?>

<script src="../../js/bootstrap.js"></script>
<script src="js/crear.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>