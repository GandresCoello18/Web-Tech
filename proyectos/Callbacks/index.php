<?php
$Titulo = "Callbacks";
$key1 = "Callbacks con javascript"; $key2 = "ecmaScript 6"; $key3 = "verificar registro con Callbacks"; $key4 = "buscar usuario con Callbacks";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>

<body>

	<h3 class="text-center mt-5" id="titulo">Callbacks en Javascript</h3>
	<p class="text-center p-2">Simulando una consulta de una base de datos, digita el nombre del usuario y muestra los resultados</p>

	<section class="container mt-5">
			<div class="row justify-content-center">
					<div class="col-6">
						<button class="btn btn-success boton_DB">Verificar usuario en la DB</button>
					</div>
					<div class="col-6 insertar">
						
					</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="js/collback.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>