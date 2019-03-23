<?php $titulo = "¿Como estan echas los sitios o aplicaciones web?";
$key1 = "sitios web"; $key2 = "aplicaciones web"; $key3 = "tecnologias para la web";
$key4 = "paginas estaticas y dinamicas";
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
				<span>20-01-2019</span>
			</div>
	</div>

<div class="row justify-content-center">
	  	     <div class="col-12 col-md-7 mt-4">
	  	     	<h3 class="text-center">¿Como estan echas los sitios o aplicaciones web?</h3>
	  	     	<p class="p-2">Los sitios o aplicaciones web se dividen en 2 partes. La parte que se visualiza y la parte que no se visualiza, los desarrolladores lo conocen como <strong>Frontend</strong> y <strong>Backend</strong>. El Frontend utiliza tecnologías como <strong>HTML</strong> que es un lenguaje de etiquetas e impertexto. <strong>CSS</strong> son estilos en cascadas útiles para mejorar la apariencia y diseño de tu sitio. <strong>JAVASCRIPT</strong> es un lenguaje programación y es el encargado de realizar la interactividad hacia el usuario. </p>
	  	     	<p class="p-1">Si dominas estas 3 tecnologías Felicidades ya puedes desarrollar un sitio <strong>ESTATICO</strong>, quiere decir un sitio donde solo muestre información como: título, párrafo, imágenes, enlaces, videos y más… </p>
	  	     	<p class="p-1">Pero también existen los sitios <strong>DINAMICOS</strong> que utiliza tecnologías del Frontend y Backend estos son. <strong>PHP</strong> es un lenguaje de programación que funciona del lado del <strong>servidor</strong> esto hace que el código sea secreto y el usuario no pueda modificarlo. <strong>MySQL</strong> es un gestor de base de datos que me permite construir tablas, campos, relaciones. Es aquí donde se guarda la información del usuario.</p>
	  	     	<p class="p-1">Si no estás a gusto con estas tecnología existen otras que son NODE.JS que es un entorno de ejecución para <strong>JAVASCRIPT</strong> quiere decir que podrás utilizar JAVASCRIPT tanto en el navegador como en el servidor. <strong>MONGO DB</strong> es una base de datos NO relacional.</p>
	  	     	<p class="p-1">También existe otra tecnología llamado <strong>DJANGO</strong> que es un Framework del lenguaje de programación <strong>PYTHON</strong> y puedes utilizar MySQL como base de datos.</p>
	  	     	<p class="p-1">Una vez que domines las tecnologías para el backend Felicidades ya puedes desarrollar un sitio Dinámico o una Aplicación web. Normalmente las personas que están comenzando en  este mundo aprender PHP y MySQL ya que se le resulta más fácil.</p>
	  	     	<p class="p-1">Muy bien ahora pongamos un ejemplo de la vida cotidiana para que lo puedas entender mucho mejor, imagina que tienes <strong>10.000$</strong> y quieres construir tu propia casa. Lo primero que necesitas es tu terreno o área donde se construirá tu casa.  Lo primero que haces es levantar los pilares o columnas para que sea resistente a temblores o fuertes torrenciales. Luego colocas los ladrillos o bloques y con una buena arquitectura y tejado obtendrás tu casa. Aunque ya puede ser habitada tu casa puedes decorarla o pintarla incluso realizar una fachada hermosa. También necesitaras puertas para entrar y salir, ventanas para que entre luz o aire.</p>
	  	     	<p class="p-1">Hasta aquí hemos utilizado las tecnologías del FRONTEND <strong>¿Cómo así en que momento?</strong>
				HTML son los pilares o columnas de tu casa, CSS es el diseño y apariencia de tu casa Y JavaScript son las puertas  y ventanas que interactúan con el usuario como abrir o cerrar las puertas o ventanas.
				</p>
				<p class="p-1">Ahora imagina que en tu casa colocas una pequeña tienda tu propio negocio, ese negocio es administrado por una sola persona y contiene muchos productos que vender. Los clientes se acercan para comprar lo que necesite.</p>

                 <div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Hasta aquí hemos visto las tecnologías del Backend <strong>¿Cómo así en que momento?</strong> Psi el Backend simplemente muestra las peticiones que especifica el usuario. 
					La persona que administra la tienda es considerado PHP y los productos almacenados en tu tienda es <strong>MySQL</strong>, cuando el usuario hace una petición de un producto a comprar el administrador busca en su almacenamiento aquel producto y lo muestra o se lo vende al usuario.</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">
						Para desarrollar un sitio DINAMICO necesitas de programas como Xampp o Wampserver que te permitirá ejecutar código PHP y comandos MySQL . Es un servidor local que te permitirá ver los resultados sin la necesidad de subir tus archivos a un Hosting.
						</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>

	  	     </div>
	  	     <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>

<?php include('head_footer/pie.php'); ?>