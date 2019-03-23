<?php 
$Titulo = "Eliminar Datos MySQL";
$key1 = "comando para eliminar registros"; $key2 = "como funciona el comando delete"; $key3 = "eliminando un registro en especifico"; $key4 = "delete y where como funcionan";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');

$conexion = new PDO("mysql:host=localhost;dbname=pruebas","root","");

if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombre'];

$resultado = $conexion->prepare('DELETE FROM datos_personales WHERE nombre=:nombre');
$resultado->execute(array(':nombre' => $nombre));
}

$mostrar = $conexion->prepare('SELECT * FROM datos_personales');
$mostrar->execute();
$mostrar = $mostrar->fetchAll();
?>

<body>

	<section class="container mt-3">
			<h3 class="text-center mt-5 p-2" id="titulo">Borrar o eliminar informacion a la base de datos</h3>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<label>registro a cambiar:</label>
						<input type="text" name="nombre" class="form-control">
						<br>
						<button class="btn btn-success form-control" name="enviar">Enviar</button>
					</form>
			</div>
			<div class="col-12 col-md-6 mt-3">
				<?php foreach ($mostrar as $valor) : ?>
		 					<div class="alert alert-info">
							<h6 class="text-center"><?php echo $valor['nombre']; ?></h6>
							<h6 class="text-center"><?php echo $valor['apellido']; ?></h6>
							<h6 class="text-center"><?php echo $valor['edad']; ?></h6>
						</div>		
				<?php  endforeach; ?>
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