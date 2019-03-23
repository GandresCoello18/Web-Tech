<?php $titulo = "Bit - Byte";
$key1 = "que son bit y byte"; $key2 = "minimo almacenamiento informatica"; $key3 = "cuantos bit tiene bytes"; $key4 = "difrencia entre bit y byte";
include('head_footer/cabeza_2.php'); 
include('head_footer/puede_que_te_interesen.php');
?>
<style type="text/css">
	#bit{
		position: relative;
		margin: auto;
		border:1px solid #000;
		font-weight: bold;
	}
	#bit tr td{
		border: 1px solid #000;
		padding: 10px;
	}
</style>

<section class="container mt-5" id="fondo">
	
<div class="row justify-content-center ml-md-5">
			<?php include('head_footer/compartir_facebook.php'); ?>
			<div class="col-2 mt-4">
				<figure id="foto_articulo"><img src="../img/andres-2.jpg"></figure>	
			</div>
			<div class="col-4 mt-4">
				<span>24-01-2019</span>
			</div>
	</div>

	
	  <div class="row justify-content-center">
	  	   <div class="col-12 col-md-7 mt-4">
	  	   	    <h3 class="text-center">¿Que es Bit y Byte?</h3>
	  	   	    <p class="p-2">Bit es la unidad mínima de información en informática. Nuestro entorno digital se basa en bit es  decir <strong>(0 – 1) ceros y unos</strong>, todo esto tiene que ver gracias a la electricidad que contiene nuestros dispositivos informaticos. La electricidad se basa en 2 componentes <strong>(Encendido – Apagado)</strong> es asi como 0 significa “apagado” y 1 significa “encendido”. </p>
	  	   	    <h5 class="text-center">¿Pero que tiene que ver con la informatica?</h5>
	  	   	    <p class="p-1">El lenguaje de Maquina es el idioma oficial de los ordenadores y se denomina<strong> lenguaje binario (0-1)</strong> para nosotros los seres humanos puede que se nos dificulte mucho escribir una serie de instrucción en lenguaje de Maquina es por esa misma razon que no existian tantos programadores en los tiempos de antes debido a su gran complejidad. Pero para el ordenador es super facil de entender e interpretar.</p>
	  	   	    <p class="p-1">Los binarios funcionan con sistemas de <strong>base 2</strong> es decir que la columna vale <b>2</b> veces más que el de la derecha.</p>
	  	   	    <table id="bit">
	  	   	    	<tr>
	  	   	    		<td>64</td><td>32</td><td>16</td><td>8</td><td>4</td><td>2</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td>
	  	   	    	</tr>
	  	   	    </table>
	  	   	    <p class="p-1">Supongamos que el numero <b>104</b> es ingresado por el usuario, el procedimiento que realiza el ordenador es summar todas las casiillas que esten encendidas es decir los que contengan 1.</p>
				<p class="p-1"><b>64+32+8=104</b></p>
				<p class="p-1">Existr algo llamado compilador que tiene como tarea traduccir los valores que ingresa el usiario a lenguaje de maquina es por esta razon que mucha mas personas se animan a programar por lo que ahí mas facilodad de escribir codigo.</p>
				<h5 class="text-center">¿Que son los byte?</h5>
				<p class="p-1">Para poder representar o codificar más información se hizo necesario crear una nueva unidad de medida llamada <b>Byte</b>.</p>

				<table id="bit">
	  	   	    	<tr>
	  	   	    		<td>01000011</td><td>c</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>01100101</td><td>e</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>01101100</td><td>l</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>01110101</td><td>u</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>01101100</td><td>l</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>01100001</td><td>a</td>
	  	   	    	</tr>
	  	   	    	<tr>
	  	   	    		<td>01110010</td><td>r</td>
	  	   	    	</tr>
	  	   	    </table>

				<div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Un bytes es una unidad de memoria que guarda un carácter y cada bytes esta compuesto por un conjunto de <strong>8 bits</strong> o también llamado <strong>octetos</strong>. Veamos ahora cuantos bits y bytes ocupa una palabra.</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Los bit y byte se encuentra en todas partes de la informatica en los arduinos, aplicaciones, redes, circuitos electronicos, pero muchos lo llegaron a conocer mas afondo en la programacion, ya que te preguntaras como hace el ordenador para traducir el codigo.</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>
	  	   </div>
	  	   <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>

<?php include('head_footer/pie.php'); ?>