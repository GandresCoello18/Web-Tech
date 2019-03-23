<?php 
$Titulo = "Consultar MySQL";
$key1 = "comando select en sql"; $key2 = "abstraer registros de base de datos"; $key3 = "mostrar datos en mysql"; $key4 = "mostrar un registros en especifico";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');

if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombre'];
	
$conexion = new PDO("mysql:host=localhost;dbname=pruebas","root","");

$resultado = $conexion->prepare('SELECT * FROM datos_personales WHERE nombre=:nombre');
$resultado->execute(array(':nombre' => $nombre));
$resultado = $resultado->fetchAll();

}

?>

<body>

	<section class="container mt-3">
			<h3 class="text-center mt-5 p-2" id="titulo">Consultar informacion a la base de datos</h3>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control">
						<br>
						<button class="btn btn-success form-control" name="enviar">Enviar</button>
					</form>
			</div>
			<div class="col-12 col-md-6">
			  <?php  
			   if(isset($_POST['enviar'])) : ?>
				<?php foreach ($resultado as $valor) : ?>
		 					<div class="alert alert-info">
							<h6 class="text-center"><?php echo $valor['nombre']; ?></h6>
							<h6 class="text-center"><?php echo $valor['apellido']; ?></h6>
							<h6 class="text-center"><?php echo $valor['edad']; ?></h6>
						</div>		
				<?php  endforeach; ?>
				<?php endif; ?>	
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