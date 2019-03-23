<?php $titulo = "Programacion Orientada Objetos";
$key1 = "que es poo"; $key2 = "para que sirve la programacion orienta a objetos"; $key3 = "que son las clases y metodos"; $key4 = "paradigma de programacion poo"; 
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
				<span>22-01-2019</span>
			</div>
	</div>

	<div class="row justify-content-center">
	  	     <div class="col-12 col-md-7 mt-4">
	  	     	<h3 class="text-center">Programacion Orientada a Objetos</h3>
	  	     	<p class="p-2">Quizás haigas oído sobre programación orientada a objeto o lo conoces por sus siglas <strong>POO</strong>, se lo conoce como una <strong>filosofía o un paradigma</strong> de programación, se lo utiliza mucho para tener un código mucho más entendible ya que esta permite crear bloques de códigos dentro de una plantilla.</p>
	  	     	<p class="p-1">Debes de tener en cuenta que existen lenguajes de programación orientados a objetos como <strong>JAVA</strong>  o <strong>C++</strong>. También existen lenguajes que simula este paradigma orientado a objeto como <strong>PHP</strong> o <strong>JAVASCRIPT</strong>.</p>
	  	     	<p class="p-1">Para utilizar este paradigma se necesitan las <strong>CLASES</strong>, una clase se denomina como una plantilla donde se especifica tus <strong>atributos</strong> que en realidad son variables y donde se especifica tus <strong>métodos</strong> que en realidad son funciones. Una vez terminada nuestra CLASE necesitamos instanciar tu CLASE a una variables que será considerado como un <strong>objeto</strong>. Gracias a este objeto puedes manejar o llamar a los métodos que existen en tu clase.</p>
	  	     	<p class="p-1">Ahora veamos un ejemplo: imagina que estas andando en tu <strong>automóvil</strong>, esto tiene atributos como la <code>“Velocidad kml”</code>, <code>“caja de cambios”</code>, <code>“el color”</code>. Y también tiene métodos como la <kbd>“aceleración”</kbd>, <kbd>“Arranque”</kbd>, <kbd>“freno”</kbd>. Entonces tu programa arranca con una Clase llamada Automóvil donde declararas todas tus instrucciones que son atributos y métodos.</p>
	  	     	<p class="p-1">Ahora necesitas instanciar tú Clase hacia una variable, es algo parecido a esto.</p>
	  	     	<p class="p-1">Automóvil mi_objeto = <code>new</code> Automóvil (velocidad, numero_cambios, color);</p>
	  	     	<p class="p-1">El primer nombre se refiere al nombre de la case que va hacer instanciada, el segundo nombre se refiere a tu objeto puedes poner el nombre que guste, asignas el valor gracias al signo de =, el tercer nombre se refiere al <strong>constructor</strong> que básicamente es el mismo nombre de la Clase.</p>
	  	     	<p class="p-1">Los valores que entren por el parámetro son los atributos que serán manejados dentro de tu clase, ahora lo que necesitas es crear <strong>métodos</strong> como “Aceleración”, “Freno”, ”Cambio de velocidad” para realizar procesos.</p>
	  	     	<p class="p-1">Pongamos en ejecución nuestro programa, cuando enciendes tu <strong>Automóvil</strong> mandas a llamar tu método “Arranque” <b>¿Cómo lo mandamos a llamar?</b> Recuerdas el objeto creado gracias a la instancia de la clase, lo utilizaremos para llamar a ese método <b>¿Cómo se escribe?</b></p>
	  	     	<p class="p-1"><code>Mi_objeto.Arranque ();</code> el punto nos permite acceder a una propiedad como es el método, una vez en movimiento nuestro vehículo necesitamos <b>“Acelerar”</b> así que llamamos a ese método pero antes necesitamos llamar al método <b>“caja de cambios”</b>, obviamente cuando el auto acelere el valor del atributo <b>“Velocidad kml”</b> cambiara y estará en aumento. Cuando necesites <b>“Frenar”</b> simplemente llamas al método y la “velocidad kml” estará disminuyendo.</p>

                 <div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Muy bien estas listo para crear tus propios programas con un lenguaje de programación ya sea orientado a objeto o que simule este paradigma. Si quieres manejar de forma excelente este paradigma te recomendaría <strong>“JAVA”</strong> ya que es un lenguaje 100% orientado a objeto y su entorno se basa en clases, si necesitas imprimir un mensaje vas a necesitar Clases  y los métodos que acabamos de ver, también es necesario saber y entender lo que son las <strong>“HERENCIA”</strong>. BUENA SUERTE</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Las clases y métodos también contiene propiedades como PUBLIC, PRIVATE, STATIC, ABSTRACTA, PROTECTE. Que te pueden ser muy útiles dependiendo del programa que deseas desarrollar.</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>

	  	     </div>
	  	     <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>	

<?php include('head_footer/pie.php'); ?>