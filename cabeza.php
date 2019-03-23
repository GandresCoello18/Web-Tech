<?php
/*verificar el botom submit*/
include('clases.php');
if (isset($_POST['envio'])) {

    $nombre = $_POST['Nombre'];
    $apellido  = $_POST['Apellido'];
    $correo = $_POST['correo'];
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];

      objetos_usuarios::peticion_usuario($nombre,$apellido,$correo,$tema,$descripcion);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $titulo; ?></title>
  <meta charset="utf-8">
  <meta name="description" content="Web-tech es un sitio creado para la publicacion de articulos y explicaciones tutoriales sobre temas en Tecnologias Web">
  <meta name="keywords" content="temas de tecnologias web, tutoriales sobre web, aprende desarrollo web, informacion sobre tecnologias web"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
  <meta name="author" content="Web-Tech.info"> 
  <meta name="owner" content="Andres Coello Goyes">
  <meta name="robots" content="index, follow">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="lang" content="es-ES">
  
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/principales.css">
	<link rel="stylesheet" type="text/css" href="font/flaticon.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/logo-wt-2.png">
  
</head>
<body>
<!--cabezara de la pagina-->
<header class="container">
        <div class="row">
        	   <div class="col">

<div class="row">
    <div class="col-12">
       <!--menu vertical en modo celular-->
       <div id="barra" class="hidden-md-up">
       	<div id="menu"></div> <div id="busco"><form action="buscar" method="get"><input type="search" name="palabra" placeholder="Escribe aqui..!" style="height: 40px; width: 150px; top: -40px; left: 150px; position: relative;"><button type="submit" class="nav-link btn btn-info" style="position: relative; left: 300px; top: -80px; height: 40px;"><img src="png/search - copia.png" style="width: 30px; height: 30px; position: relative; left: -5px; top: -5px;"></button></form></div>

         <nav id="navegacion-cell" style="width: 180px;">
         	<div id="cerrar"></div>
        	<ul class="nav flex-column">
        		<li class="nav-item">
              
<div id="bordes"></div>

        	    </li>
        		<li class="nav-item inicio">
        			<a href="inicio">Inicio</a>
        		</li>
        		<li class="nav-item hadware">
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
        		<li class="nav-item software">
        			<a href="publico">Articulos</a>
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

       <!--menu horizontal vercion ordenador-->
       <nav id="navegacion" class="hidden-sm-down">
        	<ul class="nav justify-content-center">
        		<li class="nav-item">
        		   
<div id="bordes"></div>

        	    </li>
        		<li class="nav-item">
        			<a href="inicio" class="nav-link">Inicio</a>
        		</li>
        		<li class="nav-item">
        		    <a href="publico" class="nav-link">Articulos</a>	
        		</li>
        		<li class="nav-item">
        			<a href="#" class="nav-link software_lista dropdown-toggle">¿Como se hace?</a>
        		</li>
        		<li class="nav-item">
        			<form method="get" action="buscar"><input type="search" name="palabra" placeholder="Escribe aqui..!" style="height: 40px; top: 5px; position: relative;"><button type="submit" class="nav-link btn btn-info" style="position: relative; left: 100px; top: -35px; height: 40px;"><img src="png/search - copia.png" style="width: 30px; height: 30px; position: relative; left: -5px; top: -5px;"></button></form>
        		</li>
        	</ul>
        </nav>

     </div>
 </div>
        	   	  <section id="carrusel">

        	   	  <div id="demo" class="carousel slide" data-ride="carousel">
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
							<li data-target="#demo" data-slide-to="3"></li>
							<li data-target="#demo" data-slide-to="4"></li>
						</ul>
						
 						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/programa.jpg">
									<div class="carousel-caption">

									  <div class="row justify-content-center">
									  	<div class="col-12 col-md-4 caja">
										<h3 class="p-1">Informacion</h3>
										<p> Navega y Conoce</p>
									    </div>
									  </div>
									  	
									</div>
							</div>
							<div class="carousel-item">
								<img src="img/lenguaje.jpg" style="width: 100%; height: 320px;">
								<div class="carousel-caption">
									  <div class="row justify-content-center">
									  	<div class="col-12 col-md-5 caja">
										<h3 class="p-1">Lenguajes de Programacion</h3>
										<p style="font-size: 20px;"></p>
									    </div>
									  </div>	
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/html.jpg" style="width: 100%; height: 320px;">
								<div class="carousel-caption">
									 <div class="row justify-content-center">
									  	<div class="col-12 col-md-5 caja">
										<h3 class="p-1">Etiquetas</h3>
									    </div>
									 </div> 
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/css.jpg" style="width: 100%; height: 320px;">
								<div class="carousel-caption">
									<div class="row justify-content-center">
									  	<div class="col-12 col-md-5 caja">
										<h3 class="p-1">Hojas de estilos</h3>
									    </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/aplic.jpg" style="width: 100%; height: 320px;">
								<div class="carousel-caption">
									<div class="row justify-content-center">
									  	<div class="col-12 col-md-5 caja">
										<h3 class="p-1">Aplicaciones</h3>
									    </div>
									</div>
								</div>
							</div>
						</div>

  						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</a>
    				</div>

                  </section>
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
