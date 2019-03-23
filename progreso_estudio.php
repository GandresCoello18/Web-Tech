<?php
$titulo = 'Deascargar APK';
include('cabeza_sin_carrusel.php');
?>
<style type="text/css">
	#descargar{
		width: 350px;
		height: 600px;
		position: relative;
		margin: auto;
	}
	#marco{
		width: 340px;
		height: 650px;
		position: relative;
		top: -125px;
		transform: scale(0.6);
	}
	#galeria_foto{
		width: 190px;
		height: 320px;
		background-image: url(img/principal.png);
		background-repeat: no-repeat;
  		background-size: 99% 310px;
		position: absolute;
		top: 250px;
		left: 75px;
		-webkit-animation: cambiar 20s infinite;
	}
	#dentro{
		width: 100%;
		height: 100%;
		border-radius: 5px;
	}
	@-webkit-keyframes cambiar {
		30%{
			background-image: url(img/teoria.png);
		}
		50%{
			background-image:  url(img/ti.png);
		}
		70%{
			background-image: url(img/secc.png);
		}
		90%{
			background-image: url(img/pregt.png);
		}
	}
</style>
<section class="container mt-5">
	  <div class="row">
	  	  <div class="col">
	  	  	    <div id="descargar">
	  	  	    	<h4 class="text-center mt-3">APK Web-Tech</h4>
	  	  	    	<p class="text-center">Ahora puedes descargar la version movil, con la que podras aprender mas sobre <b>tecnologias web</b> sin conexion. Version del android  recomendado ( de <strong>5</strong> en adelante)</p>
	  	  	    	<form>
	  	  	    		<a href="Interprete Tech.apk" download class="btn btn-success form-control">Descargar APK</a>
	  	  	    	</form>
	  	  	    	
	  	  	    		<img src="img/celular- marco.png" id="marco">
	  	  	    		<div id="galeria_foto">
	  	  	    			<!--<img src="../img/principal.png" id="dentro">-->
	  	  	    		</div>
	  	  	    </div>
	  	  </div>
	  </div>
</section>

<?php include('pie.php'); ?>