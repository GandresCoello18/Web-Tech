<?php
$Titulo = "Identificar numero mayor";
$key1 = "juegos con javascript"; $key2 = "programacion interactiva con javascript"; $key3 = "operaciones matematicas con javascript"; $key4 = "introduccion a javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/variables-intuitivas.css">
<body>

		<h3 class="mt-5 text-center" id="titulo">Numero mayor</h3>
		<p class="text-center"><strong>Ejercicio: </strong> Oprimir un botom llamado <b>empezar</b> que me permita digitar 6 numeros enteros o decimales, aquellos numeros seran ingresados en los recuadros <b>rojos</b>, una vez ingresados cambian de color y el botom <b>empezar</b> se bloqueara.</p>
		<p class="text-center">Luego habilita el botom <b>verificar numero</b>, cuando oprimas tal botom se cambiara de color el recuadro con el numero mayor. Si en algun caso ingresas caracteres, este mostrara una alerta llamandote la atencion o si existen mas de 1 numero mayor.</p>
		<hr/>

<section class="container mt-5">
		<div class="row">
				<div class="col"><article class="cuadros" id="valor0" style="height: 100px;">0</article></div>
				<div class="col"><article class="cuadros" id="valor1" style="height: 100px;">0</article></div>
				<div class="col"><article class="cuadros" id="valor2" style="height: 100px;">0</article></div>
		</div>
		<div class="row mt-3">
				<div class="col"><article class="cuadros" id="valor3" style="height: 100px;">0</article></div>
				<div class="col"><article class="cuadros" id="valor4" style="height: 100px;">0</article></div>
				<div class="col"><article class="cuadros" id="valor5" style="height: 100px;">0</article></div>
		</div>

		<div class="row">
				<div class="col">
					<button class="btn btn-success mt-3 ml-3 botom_verificar" onclick="verificar()" disabled="true">Verificar numero</button>
				</div>
				<div class="col">
					<button class="btn btn-success mt-3 ml-3 botom_empezar" onclick="insertar_numeros()">Empezar</button>
				</div>
				<div class="col">
					<button class="btn btn-info mt-3" onclick="reiniciar()">Reiniciar</button>
				</div>
		</div>
</section>

<?php
include('../modelo_video.php');
?>

<script src="js/variables-intuitiva.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/tether.min.js"></script>
<script src="../../js/bootstrap.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>