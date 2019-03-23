<?php
$Titulo = "Fundamentos de Javascript";
$key1 = "fundamentos de programacion con javascript"; $key2 = "primeros pasos con javascript"; $key3 = "conoce el entorno de javascript"; $key4 = "programas y ejemplo de javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>

<body>

	<h3 class="text-center mt-5" id="titulo">Fundamentos de Javascript</h3>
	<p class="text-center p-2 parrafo">Para cade lenguaje de programacion existe una Sintaxis diferente, aqui veremos algunas de las palabras claves que utiliza javascript</p>

	<section class="container mt-3">
			<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<ol>
							<li>Console.log()</li>
							<li>variables</li>
							<li>arreglos</li>
							<li>condiciones</li>
							<li>ciclos</li>
							<li>funciones</li>
							<li>alert()</li>
							<li>prompt()</li>
							<li>innerHTML</li>
							<li>getElementById()</li>
							<li>querySelector()</li>
							<li>onclick()</li>
						</ol>

						<button class="btn btn-info" onclick="ejecutar('coello')">oprimir</button>
					</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="js/fundamentos.js"></script>	

<?php 
include('../pie.php');
?>

</body>
</html>