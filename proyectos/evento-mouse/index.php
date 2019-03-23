<?php
$Titulo = "Event-L Mouse";
$key1 = "evento con el puntero en javascript"; $key2 = "eventListener mouse en javascript"; $key3 = "programa con funcion hover en js"; $key4 = "proyectos con javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>

	<h3 class="text-center mt-5" id="titulo">Event Listener Mouse</h3>
	<p class="text-center p-2">Realizar varios ejemplo con los eventos Mouse</p>

	<div class="container mt-3">
			<div class="row justify-content-center">
						<div class="col-12 col-md-10">

							<section class="box special">
								<span class="image featured"><img src="img/pic02.jpg" alt="" /></span>
								<h3>Sed lorem adipiscing</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<ul class="actions special">
									<li><a href="#" class="btn btn-success form-control boton_enter">Mouseenter</a></li>
									<li><a href="#" class="btn btn-success form-control mt-3 boton_leave">Mouseleave</a></li>
									<li><a href="#" class="btn btn-success form-control mt-3 boton_mousemove">Mousemove</a></li>
								</ul>
							</section>

						</div>
					</div>
	</div>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>}
<script src="js/mouse.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>