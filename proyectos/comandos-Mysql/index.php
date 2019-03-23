<?php
$Titulo = "Comandos MySQL";
$key1 = "comandos utilizados en mysql"; $key2 = "comandos basicos de sql"; $key3 = "ejemplos de insert - select - Where - update - delete"; $key4 = "como funcionan los comandos sql";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>

<body>
	<h3 class="text-center mt-5" id="titulo">Comandos en MySQL</h3>

	<section class="container mt-3">
			<div class="row">
					<div class="col">
						<ol>
							<li>Mostrar o Abstraer</li>
							<li>Insertar</li>
							<li>Actualizar o Modificar</li>
							<li>Borrar o Eliminar</li>
							<li>Where o donde</li>
							<li>OR y AND</li>
							<li>IN</li>
							<li>Order By o ordenar</li>
							<li>ASC DESC</li>
							<li>Limit o limite</li>
							<li>Like</li>
							<li>Inner Join</li>
						</ol>
						<h4 class="text-center">Funciones</h4>
						<ol>
							<li>NOW()</li>
							<li>MAX()</li>
							<li>MIN()</li>
							<li>AVG()</li>
							<li>SUM()</li>
							<li>COUNT()</li>
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