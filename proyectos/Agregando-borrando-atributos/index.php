<?php
$Titulo = "Agregando-Quitar atributos";
$key1 = "Agregar atributos en javascript"; $key2 = "borrar atributo en javascript"; $key3 = "propiedades en javascript"; $key4 = "insertar propiedades y atributos js";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
	<h3 class="text-center mt-5" id="titulo">Agregando y Eliminando atributos</h3>
	<p class="text-center p-2">Insertar atributos a los elementos HTML mediante javascript, tambien puedes borrar los atributos que no necesites para agregar otro.</p>

	<section style="background-color: rgba(10,10,100,0.8); color: #fff ;" class="p-5 m-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="widget">
							<h5 class="widgetheading">Get in touch with us</h5>
							<address>
									<strong>Moderna company Inc</strong><br>
					 				Modernbuilding suite V124, AB 01<br>
					 				Someplace 16425 Earth </address>
							<p>
								<i class="icon-phone"></i> +592 9399103919993<br>
								<i class="icon-envelope-alt"></i> miCorreoFavorito@gmail.com
							</p>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="widget">
							<h5 class="widgetheading">Pages</h5>
							<ul class="link-list">
								<li><a>Press release</a></li>
								<li><a>Terms and conditions</a></li>
								<li><a>Privacy policy</a></li>
								<li><a>Career center</a></li>
								<li><a>Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="widget">
							<h5 class="widgetheading">Latest posts</h5>
							<ul class="link-list">
								<li><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
								<li><a>Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
								<li><a>Natus error sit voluptatem accusantium doloremque</a></li>
							</ul>
						</div>
					</div>
			</div>
		</div>
		</section>

		<div class="container">
				<div class="row justify-content-center">
						<div class="col-4">
							<form id="formulario">
								<select id="seleccionar_elemento" class="form-control">
									<option>Elemento</option>
									<option value="rotar">Rotar</option>
									<option value="fondo">Color Fondo</option>
									<option value="clase">Agregar Clase</option>
									<option value="cambiar_texto">Cambiar Texto</option>
									<option value="dirigir_pagina">Dirigir a pagina</option>
								</select>
								<button class="btn btn-success form-control" type="button" onclick="agregar()">Agregar</button>
							</form>
						</div>
				</div>
		</div>

<?php
include('../modelo_video.php');
?>

<script src="../../js/bootstrap.js"></script>
<script src="js/agregar.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>