<?php
$Titulo = "Entorno PHP";
$key1 = "introduccion a php"; $key2 = "conociendo el entorno de php"; $key3 = "php para principiantes"; $key4 = "sintaxis y sessiones en php";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>

<body>
		<h3 class="text-center mt-5 p-2" id="titulo">Entorno e introduccion a PHP </h3>

	<section class="container mt-3">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<ol>
						<li>$variables</li>
						<li>$arreglo = [];</li>
						<li>$arreglo = array();</li>
						<li>var_dump(expression);</li>
						<li>print_r(expression);</li>
						<li>foreach($arreglo as $value){}</li>
						<li>header(ruta/archivo.php);</li>
						<li>include();</li>
						<li>require();</li>
						<li>new PDO();</li>
						<li>prepare();</li>
						<li>execute();</li>
						<li>$_POST[];</li>
						<li>$_GET[];</li>
						<li>$_FILE[];</li>
						<li>isset();</li>
						<li>........</li>
					</ol>
				</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<?php 
include('../pie.php');
?>

</body>
</html>