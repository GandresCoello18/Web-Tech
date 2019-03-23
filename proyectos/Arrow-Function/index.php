<?php
$Titulo = "Arrow Functions";
$key1 = "arrow function js"; $key2 = "funcion de flecha js"; $key3 = "funcion en ecmaScript 6"; $key4 = "javascript moderno arrow funcion";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
	<h3 class="text-center mt-5" id="titulo">Arrow Functions</h3>
	<p class="text-center p-2">Crear un cronometro que me permita ver los segundos, minutos y horas. Desarrollado con Arrow function</p>

	<section class="container mt-3">
			<div class="row justify-content-center">
					<div class="col">
						<button class="btn btn-success iniciar" onclick="empezar_cronometro()">Empezar</button>	
					</div>
					<div class="col">
					
					</div>
					<div class="col">
						<button class="btn btn-danger" onclick="restaurar()">Restaurar</button>
					</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-10 col-md-6 insertar">
			 
				</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/arrow.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>