<?php
$Titulo = "LocalStorage";
$key1 = "como almacenar datos en el navegador"; $key2 = "como utilizar localStorage"; $key3 = "guardar informacion en navegador con javascript"; $key4 = "ejemplos y programas con javascript";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
<body>
	<h3 class="text-center mt-5" id="titulo">LocalStorage</h3>
	<p class="text-center p-2">Crear un formulario de registro y otro de login, poniendo en practica la funcionalidad de localStorage.</p>

	<section class="container mt-3">
			<div class="row justify-content-center">
					<div class="col-12 col-md-6">
						<form id="formulario" class="p-4">
							<h5 class="text-center">Registrate</h5>
							<div class="row">
								<div class="col-12">
									<label>Nombre Usuario</label>
								  <input type="text" class="form-control nombre_usuario" placeholder="Nombre del usuario">
								</div>
								<div class="col-12 mt-2">
									<label>Contraseña</label>
									<input type="password" class="form-control contrasena" placeholder="Contrasena">
								</div>
								<div class="col-12 mt-2">
									<label>Vuelva a escribir la Contraseña</label>
									<input type="password" class="form-control contrasena_2" placeholder="Contrasena">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col">
									<button class="btn btn-success form-control registrar">Registrar</button>
								</div>
								<div class="col">
									<button class="btn btn-info form-control boton_login">Login</button>
								</div>
							</div>
						</form>

						<!--//////////////////////////////////////////////////////////////////-->

						<form id="formulario_2" class="mt-2 p-4">
							<h5 class="text-center">Acceder</h5>
							<div class="row">
								<div class="col-12">
									<label>Usuario</label>
									<input type="text" placeholder="Usuario" class="form-control login_usuario">
								</div>
								<div class="col-12 mt-2">
									<label>Password</label>
									<input type="password" placeholder="Contrasena" class="form-control login_contrasena">
								</div>
								<button class="btn btn-success form-control mt-3 entrar">Entrar</button>
							</div>
						</form>
					</div>
			</div>
	</section>

<?php
include('../modelo_video.php');
?>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="js/localSotage.js"></script>

<?php 
include('../pie.php');
?>

</body>
</html>