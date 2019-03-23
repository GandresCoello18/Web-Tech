<?php
$Titulo = "De Hijo a Padre";
$key1 = "ingresando al padre desde el hijo js"; $key2 = "DOM de padre a hijo"; $key3 = "parentElement en javascript"; $key4 = "programa con parentElement";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/style.css">
<body>
	<h3 class="text-center mt-5" id="titulo">Seleccionando elementos</h3>
	<p class="p-2 text-center">Manipular los elementos hijos de <strong>HTML</strong> que esten a fondo o dentro de otros elementos padres, colorea sus padres.</p>
					<div  class="container m-5">
							<div class="row justify-content-center mt-4">
									<div class="col-12 col-sm-6"> 

							<div class="widget ml-5">
								<h5 class="widgetheading">Latest posts</h5>
								<ul class="recent">
									<li>
										<img src="img/thumb1.jpg" class="imagenes" alt="" />
										<h6 class="titulos"><a href="#">Lorem ipsum dolor sit</a></h6>
										<article>
											<p class="parrafos">
											Mazim alienum appellantur eu cu ullum officiis pro pri
										</p>
										</article>
									</li>
									<li>
										<img src="img/thumb2.jpg" class="imagenes" alt="" />
										<article>
											<h6 class="titulos"><a href="#">Maiorum ponderum eum</a></h6>
										</article>
										<p class="parrafos">
											Mazim alienum appellantur eu cu ullum officiis pro pri
										</p>
									</li>
									<li>
										<article>
											<img src="img/thumb3.jpg" class="imagenes" alt="" />
										</article>
										<h6 class="titulos"><a href="#">Et mei iusto dolorum</a></h6>
										<p class="parrafos">
											Mazim alienum appellantur eu cu ullum officiis pro pri
										</p>
									</li>
								</ul>
							</div>	
						</div>

					
									<div class="col-6 ">
										<form id="formulario-0">
											<select class="form-control" id="select_elemento">
												<option>Elemento</option>
												<option value="Parrafo">Parrafo</option>
												<option value="Subtitulo">Subtitulo</option>
												<option value="Imagen">Imagen</option>
											</select>
											<button class="btn btn-success mt-5 form-control" type="button" onclick="btn_formulario()">Mostrar</button>
										</form>
									</div>
								</div>
							</div>
<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/hijo-padre.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>