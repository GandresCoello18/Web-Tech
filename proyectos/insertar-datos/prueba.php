<?php 
$Titulo = "Insertar Datos";
$key1 = "comando insert en sql"; $key2 = "ingresando datos a la tabla"; $key3 = "ejemplo con insert sql"; $key4 = "comandos basicos de mysql";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');

$conexion = new PDO("mysql:host=localhost;dbname=pruebas","root","");

if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];

$resultado = $conexion->prepare('INSERT INTO datos_personales SET nombre=:nombre, apellido=:apellido, edad=:edad');
$resultado->execute(array(':nombre' => $nombre,
						':apellido' => $apellido,
						':edad' => $edad
					));

}

$consulta = $conexion->prepare("SELECT * FROM datos_personales");
$consulta->execute();
$consulta = $consulta->fetchAll();

?>

<body>

	<section class="container mt-5">
			<h3 class="text-center p-2" id="titulo">Insertar informacion a la base de datos</h3>
		<div class="row justify-content-center">
			<div class="col-6">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control">
						<label>Apellido:</label>
						<input type="text" name="apellido" class="form-control">
						<label>Edad:</label>
						<input type="number" name="edad" class="form-control">
						<br>
						<button class="btn btn-success form-control" name="enviar">Enviar</button>
					</form>
			</div>
			<div class="col-12 col-md-6 mt-3 mt-0-md">
				<?php foreach ($consulta as $valor) : ?>
		 					<div class="alert alert-info">
							<h6 class="text-center"><?php echo $valor['nombre']; ?></h6>
							<h6 class="text-center"><?php echo $valor['apellido']; ?></h6>
							<h6 class="text-center"><?php echo $valor['edad']; ?></h6>
						</div>		
				<?php  endforeach; ?>
			</div>
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