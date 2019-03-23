<?php $titulo = "La importancia de utilizar php";
$key1 = "por que utilizar php"; $key2 = "comportamineto de php"; $key3 = "codigo limpio en php"; $key4 = "que es php";
include('head_footer/cabeza_2.php'); 
include('head_footer/puede_que_te_interesen.php');
?>

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
	  	   	    <h3 class="text-center">La importancia de utilizar PHP</h3>
	  	   	    <p class="p-2">Php es un lenguaje de programación y fue uno de los primeros creados para realizar sitios <strong>dinámicos</strong>, aunque es amado por unos y odiado por otros debido a su indisciplina en codificación obteniendo como resultado un código <strong>“Espagueti”</strong> algo que es muy complejo de entender.</p>
	  	   	    <p class="p-1">Con el transcurso del tiempo fue evolucionando y facilitándose su desarrollo. Lo único que necesitas para empezar es un editor de código para la escritura de tus instrucciones o incluso solo el bloc de notas de tu dispositivo. Un servidor <b>local</b> para realizar la ejecución de tus instrucciones si deseas crearlo y configurarlo tú mismo, no hay ningún problema pero recuerda que existen programas como <strong>XAMPP o WAMPSERVER</strong> para facilitar esta etapa.</p>
	  	   	    <p class="p-1">Lo siguiente es conocer la sintaxis de php ya que todos los lenguajes tienen algo interesante para conocer, <b>¿cómo se escribe y cuál es su funcionalidad?</b> Veamos algunas palabras claves.</p>
	  	   	    <p class="p-1"><code>echo</code> “hola mundo”; - su funcionalidad es imprimir en pantalla lo especificado.</p>
	  	   	    <p class="p-1">
	  	   	    <code>$</code>miVariable = “soy una variable”;  - su funcionalidad es crear variables ya sea de tipo <code>String, number, boolean, int, float</code>.</p>
	  	   	    <p class="p-1">
				<code>$</code>arreglo = <code>array</code> (“andes”, ”Coello”, ”Goyes”); - su funcionalidad es crear arreglos. Un arreglo simplemente es una variable que puede contener muchos valores.</p>
				<p class="p-1">
				<code>var-dump</code> ($arreglo); - sirve para mostrar al arquitectura de un arreglo.</p>
				<p class="p-1">Si deseas un código más simple y entendible, puedes aprender a utilizar el paradigma <strong>POO</strong> – Programación Orientado a Objetos.</p>
				<div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Lo que lo hace muy popular son sus funcionalidades como: conexiones  a bases de datos, gestión de directorios, manipulación de archivos, creación de Sesiones, creación de Cookies, seguridad, Usa extensiones.</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Gracias a Php se construyeron grandes proyectos y aplicaciones donde nosotros utilizamos día a día como Facebook y Wikipedia.</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>
	  	   </div>
	  	   <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>

<?php include('head_footer/pie.php'); ?>