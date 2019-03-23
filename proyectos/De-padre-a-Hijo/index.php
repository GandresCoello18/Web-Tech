<?php
$Titulo = "De Padre a Hijo";
$key1 = "DOM de padre a hijo con Javascript"; $key2 = "manipulando el hijo con DOM"; $key3 = "ejemplos con DOM"; $key4 = "programa en javascript manipulando hijo";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/style.css">
<body>

	<h3 class="text-center mt-5" id="titulo">Seleccionando Elementos</h3>
	<p class="text-center p-2">Manipula los elementos <strong>hijos</strong> de <b>html</b> desde "Javascript" crea un menu con la lista de los elemetos a manipular.</p>
	<hr/>

<div class="container azul-0">
		<div class="row justify-content-center">
				<div class="col-12 col-md-7">
							<div class="pricing-box-alt">
								<div class="pricing-heading verde-0">
									<h3>Very <strong>Basic</strong></h3>
								</div>
								<div class="pricing-terms rojo-0">
									<h6>&#36;15.00 / Month</h6>
								</div>
								<div class="pricing-content purpura-0">
									<ul>
										<li>100 applications</li>
										<li>24x7 support available</li>
										<li>No hidden fees</li>
										<li>Free 30-days trial</li>
										<li>Stop anytime easily</li>
									</ul>
								</div>
								<div class="pricing-action chocolate-0">
									<button class="btn btn-success" onclick="MostrarMenu()">Mostrar Elemento</button>
								</div>
							</div>
						</div>

						<form id="formulario">
							<h6 class="p-2 text-primary">Selecciona elemento a mostrar</h6>
							<select class="form-control mt-2" id="select_elemento">
								<option>Elemento</option>
								<option value="Contenedor">Area-Contendor</option>
								<option value="Titulo">Area-Titulo</option>
								<option value="Precio">Area-Precio</option>
								<option value="Listas">Area-Listas</option>
								<option value="Boton">Area-Boton</option>
							</select>
							<button class="btn btn-success form-control mt-3" type="button" onclick="btn_formulario()">Mostrar</button>
						</form>
		</div>
</div>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/padre-hijo.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>