<?php
$Titulo = "Consumiendo Json con js";
$key1 = "como usar XMLHttpRequest"; $key2 = "res api con ajax"; $key3 = "peticion http con javascript"; $key4 = "consumir json con javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>

<body>
			<h3 class="text-center mt-5" id="titulo">Rest Api con Ajax</h3>
			<p class="text-center p-2">Crear una respt api que me permita leer un archivo <b>Json</b> ediante Ajax e imprimirlo en pantalla.</p>
	
		<section class="container mt-5">
				<div class="row justify-content-center">
						<div class="col-3">

							<button class="btn btn-danger traer">Traer datos</button>
						</div>
						<div class="col-8">
							
								<div class="insertar">
		
								</div>
						</div>
				</div>
				<br/><br/><br/><br/>
		</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/ajax.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>