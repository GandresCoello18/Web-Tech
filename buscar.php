
<?php $titulo = "Buscar" ?>
<?php include('cabeza_sin_carrusel.php'); ?>
<?php 
/*consulta a base de datos para  buscar palabra introducida*/
   if($_GET['palabra'] == ''){
    header('location: inicio.php');
   }else if (isset($_GET['palabra'])) {

   	   $palabra = $_GET['palabra'];
      $resultado_2 = objetos_usuarios::buscar_principal($palabra);
      $resultado_total_3 = objetos_usuarios::buscar_usuario($palabra); 
   }

?>
<script type="text/javascript"></script>
<style type="text/css">
	#mensaje{
		display: none;
	}
  .crad_circle{
    border-radius: 50%; 
    width: 30px; 
    height: 30px;
    position: absolute;
    top: 8px;
    left: 8px;
    background-color: #20B2AA;
}
.crad_circle:before{
  content: '\f16a';
  position: absolute;
  font-family: 'flaticon';
  font-weight: bold;
  color: white;
  left: 8px;
  top: 2px;
}
</style>
<section class="container mt-5">
	   <div class="row">
	   	   <div class="col mt-5"><h2 class="text-center">Tu Busqueda</h2></div>
       </div>
             <div class="row mt-4 justify-content-center" id="aviso">
              <!--mostrar los resultados de la busqueda-->
        	<?php foreach ($resultado_2 as $valor): ?>
        	 <div class="col-12 col-md-4 col-lg-3 mt-md-0 mb-4">
                <a style="text-decoration: none;" href="<?php echo $valor['enlace'] ?>" target="_blanck">
                <div class="card" style="border-bottom: 2px solid #808080;">
                  <img src="<?php echo $valor['imagen']; ?>" class="card-img-top img-fluid">
                  <span class="p-1 crad_circle"></span>
                  <div class="card-block">
                    <h4 class="card-title text-left"><?php echo $valor['titulo']; ?></h4>
                    <p class="card-text text-center" style="color: #000;"><?php echo $valor['descripcion']; ?></p>
                  </div>
                </div>
              </a>  
           </div>
        	<?php endforeach ?>
          <!--cierre del ciclo de la busqueda-->
<?php foreach ($resultado_total_3 as $value): ?>
          <div class="card mt-2">
    <div class="card-header">
        <a class="card-link" style="text-decoration: none;" data-toggle="collapse" data-parent="#accordion" href="#num<?php echo $value['nroPublicaciones']; ?>">
        <?php echo $value['titulo']; ?>
        </a>
    </div>

<div id="num<?php echo $value['nroPublicaciones']; ?>" class="collapse show">
        <div class="card-body">
        <p class="p-1"><?php echo $value['descripcion']; ?> <a href="<?php echo $value['enlace']; ?>">Leer mas aqui..</a></p>
        </div>
</div>

</div>
<?php endforeach; ?>
<!--cierre del ciclo de la busqueda-->        	 
        </div>

        <div class="row">
        	   <div class="col">
        	   	 	 <div class="alert alert-danger" id="mensaje">
                  <!--mensaje de contenido no encontrado-->
						<strong>Lo Sentimos: </strong> No se encontro lo que especificastes. Pero puedes ayudarnos a que mas adelante este disponible, Envianos el tema y una descripcion y con gusto lo publicaremos <a href="quieres_publicar.php" class="alert-link">Mensaje click aqui.</a>
				  	</div>
        	   </div>
        </div>
</section>

<script type="text/javascript">
  //mostrar el mansaje si no se obtubieron resultados
	var mensaje = document.getElementById('mensaje');
	var verificar = document.querySelector('#aviso div');
	if (verificar == null) {
		mensaje.style.display = "block";
	}
	//console.log(verificar);

</script>
<?php include('pie.php'); ?>
