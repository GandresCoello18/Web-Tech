<?php
/*validar el botom submit*/
if (isset($_POST['envio'])) {

    $nombre = $_POST['Nombre'];
    $apellido  = $_POST['Apellido'];
    $correo = $_POST['correo'];
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];

   /*verificar que todo los campos este llenos*/

    if (empty($nombre) == 1 || empty($apellido) == 1 || empty($correo) == 1 || empty($tema) == 1 || empty($descripcion) == 1) {
        //echo "por favor rellenar todo los campos";
     }else{

      /*conexion con base da datos*/
        $conexion_2 = mysqli_connect("localhost","root","","interprete_tech");
       
      /*insertar datos a la tabla peticion_usuarios*/

       $insertar = "INSERT INTO peticion_usuarios(Nombre, Apellido, correo, tema, descripcion) VALUES ('$nombre','$apellido','$correo','$tema','$descripcion')";

         /*verificar si los datos incresados son iguales*/

        $verificar_usuario_2 = mysqli_query($conexion_2, "SELECT * FROM peticion_usuarios WHERE correo = '$correo'");
       if (mysqli_num_rows($verificar_usuario_2) > 0) {
        /*mostrar mensaje de alerta campo correo*/
         echo '<script>
               alert("Anteriormente estos datos ya han sido registrado");
               window.history.go(-1);
               </script>';
               exit;
       }


       $verificar_usuario = mysqli_query($conexion_2, "SELECT * FROM peticion_usuarios WHERE tema = '$tema'");
       if (mysqli_num_rows($verificar_usuario) > 0) {
        /*mostrar mensaje de alerta campo tema*/
         echo '<script>
               alert("Anteriormente estos datos ya han sido registrado");
               window.history.go(-1);
               </script>';
               exit;
       }


       $verificar_usuario_3 = mysqli_query($conexion_2, "SELECT * FROM peticion_usuarios WHERE descripcion = '$descripcion'");
       if (mysqli_num_rows($verificar_usuario_3) > 0) {
         /*mostrar mensaje de alerta campo descripcion*/
         echo '<script>
               alert("Anteriormente estos datos ya han sido registrado");
               window.history.go(-1);
               </script>';
               exit;
       }



       $resultado = mysqli_query($conexion_2, $insertar);
    
     }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $titulo; ?></title>
  <meta charset="utf-8">
  <meta name="description" content="Web-tech es un sitio creado para la publicacion de articulos y explicaciones tutoriales sobre temas en Tecnologias Web">
  <meta name="keywords" content="<?php echo $key1; ?>, <?php echo $key2; ?>, <?php echo $key3; ?>, <?php echo $key4; ?>"> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
  <meta name="author" content="Web-Tech.info">
  <meta name="owner" content="Andres Coello Goyes">
  <meta name="robots" content="index, follow">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="lang" content="es-ES">
  
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/principales.css">
	<link rel="stylesheet" type="text/css" href="../font/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../css/sobre_nostros.css">
  <link rel="stylesheet" type="text/css" href="../css/quieres_publicar.css">
  <link rel="stylesheet" type="text/css" href="../css/interesante.css">
  <link rel="stylesheet" type="text/css" href="css/estilo_para_los_articulos.css">
  <link rel="shortcut icon" type="image/x-icon" href="../img/logo-wt-2.png">

</head>
<style type="text/css">
  nav{
    font-family: 'Share Tech Mono', monospace;
}
  body{
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  }
  footer{
    font-family: 'Share Tech Mono', monospace;
  }
</style>
<body>
<!--cabezara de la pagina-->
<header class="container">
        <div class="row">
        	   <div class="col">

<div class="row">
    <div class="col-12">
       <!--menu vertical-->
       <div id="barra" class="hidden-md-up">
       	<div id="menu"></div> <div id="busco"><form action="../buscar" method="get"><input type="search" name="palabra" placeholder="Escribe aqui..!" style="height: 40px; width: 150px; top: -40px; left: 150px; position: relative;"><button type="submit" class="nav-link btn btn-info" style="position: relative; left: 300px; top: -80px; height: 40px;"><img src="../png/search - copia.png" style="width: 30px; height: 30px; position: relative; left: -5px; top: -5px;"></button></form></div>

         <nav id="navegacion-cell" style="width: 180px;">
         	<div id="cerrar"></div>
        	<ul class="nav flex-column">
        		<li class="nav-item">

<div id="bordes"></div>

        	    </li>
        		<li class="nav-item inicio">
        			<a href="../inicio">Inicio</a>
        		</li>
        		<li class="nav-item hadware">
        		    <a href="../publico">Articulos</a>	
        		</li>
        		<li class="nav-item software">
        			<div class="btn-group" style="position: relative;left: 25px; font-weight: bold;">
             ¿Como se hace?
            <a class="dropdown-toggle dropdowntoggle-split" data-toggle="dropdown" style="position: relative;left: -30px;top: -10px;">
              <span class="caret"></span>
            </a>
        <div class="dropdown-menu">
          <a class="dropdown-item izq" href="interesantes">Javascript</a>
          <a class="dropdown-item izq" href="interesantes">PHP y Mysql</a>
        </div>
      </div>
        		</li>
        		<li class="nav-item" id="menu_bajo">
        			<div class="bg-info">Menu</div>
        		</li>
        	</ul>
        </nav>
      </div>  

      <div class="lista_de_software hidden-sm-down">
          <a class="dropdown-item" href="interesantes">Javascript</a>
          <a class="dropdown-item" href="interesantes">PHP y Mysql</a>
    </div>

       <!--menu horizontal-->
       <nav id="navegacion" class="hidden-sm-down">
        	<ul class="nav justify-content-center">
        		<li class="nav-item">
        		   
<div id="bordes"></div>

        	    </li>
        		<li class="nav-item">
        			<a href="../inicio" class="nav-link">Inicio</a>
        		</li>
        		<li class="nav-item">
        		    <a href="../publico" class="nav-link">Articulos</a>	
        		</li>
        		<li class="nav-item">
        			<a href="#" class="nav-link software_lista dropdown-toggle">¿Como se hace?</a>
        		</li>
        		<li class="nav-item">
        			<form action="../buscar" method="get"><input type="search" name="palabra" placeholder="Escribe aqui..!" style="height: 40px; top: 5px; position: relative;"><button type="submit" class="nav-link btn btn-info" style="position: relative; left: 100px; top: -35px; height: 40px;"><img src="../png/search - copia.png" style="width: 30px; height: 30px; position: relative; left: -5px; top: -5px;"></button></form>
        		</li>
        	</ul>
        </nav>

     </div>
 </div>
        	   	  
        	   </div>
        </div>
</header>
<script type="text/javascript">
  var software_lista = document.querySelector(".software_lista");
  software_lista.addEventListener("click", mostrar_lista);

  function mostrar_lista() {
    var lista_de_software = document.querySelector(".lista_de_software");
    if(lista_de_software.style.display == "none"){
      lista_de_software.style.display = "block";
    }else{
      lista_de_software.style.display = "none";
    }
  }
</script>