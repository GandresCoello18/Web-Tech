<?php 
$Titulo = "Actualizar Datos MySQL";
$key1 = "Comando update en php"; $key2 = "como actualizal un registro"; $key3 = "modificar registro de base de datos"; $key4 = "comando sql para editar registro";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');

$conexion = new PDO("mysql:host=localhost;dbname=pruebas","root","");

if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombre'];
	$nuevo = $_POST['nuevo'];

$resultado = $conexion->prepare('UPDATE datos_personales SET apellido = :nuevo WHERE nombre=:nombre');
$resultado->execute(array(':nombre' => $nombre, ':nuevo' => $nuevo));
}

$mostrar = $conexion->prepare('SELECT * FROM datos_personales');
$mostrar->execute();
$mostrar = $mostrar->fetchAll();

?>

<body>

	<section class="container mt-5">
			<h3 class="text-center mt-5 p-2" id="titulo">Actualizar o modificar informacion a la base de datos</h3>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<label>registro a cambiar:</label>
						<input type="text" name="nombre" class="form-control">
						<label>Nueva informacion:</label>
						<input type="text" name="nuevo" class="form-control">
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