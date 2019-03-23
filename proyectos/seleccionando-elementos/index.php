<?php
$Titulo = "Seleccionando elementos";
$key1 = "intrduccion al DOM"; $key2 = "primeros pasos con DOM"; $key3 = "Document Objet Modal"; $key4 = "manipulando elementos con DOM";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/style.css">
<body>

	<h3 class="text-center mt-5" id="titulo">Seleccionando Elementos</h3>
	<p class="text-center">Manipula elementos <b>html</b>, atributos y estilos <b>css</b> desde "Javascript" crea un menu con la lista de los elemetos a manipular.</p>
	<hr/>

<div class="container">
		<div class="row justify-content-center">
				<div class="col-12 col-md-7">
							<div class="pricing-box-alt">
								<div class="pricing-heading">
									<h3>Very <strong>Basic</strong></h3>
								</div>
								<div class="pricing-terms">
									<h6>&#36;15.00 / Month</h6>
								</div>
								<div class="pricing-content">
									<ul>
										<li>100 applications</li>
										<li>24x7 support available</li>
										<li>No hidden fees</li>
										<li>Free 30-days trial</li>
										<li>Stop anytime easily</li>
									</ul>
								</div>
								<div class="pricing-action">
									<button class="btn btn-success" onclick="MostrarElemento()">Mostrar Elemento</button>
								</div>
							</div>
						</div>

						<form id="formulario">
							<h6 class="p-2 text-primary">Selecciona elemento a mostrar</h6>
							<select class="form-control mt-2" id="select_elemento">
								<option>Elemento</option>
								<option value="Titulo">Titulo</option>
								<option value="Cuerpo">Cuerpo</option>
								<option value="Boton">Boton</option>
								<option value="Listas">Listas</option>
							</select>
							<button class="btn btn-success form-control mt-3" type="button" onclick="btn_formulario()">Mostrar</button>
						</form>
		</div>
</div>

<?php
include('../modelo_video.php');
?>

<script src="js/seleccionando.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>