<?php $titulo = "Responsive Design";
$key1 = "paginas adaptables a pantallas"; $key2 = "como utilizar responsive design"; $key3 = "sitios web elasticos"; $key4 = "que es medias query";
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
				<span>23-01-2019</span>
			</div>
	</div>

	<div class="row justify-content-center">
	  	   <div class="col-12 col-md-7 mt-4">
	  	   	    <h3 class="text-center">¿Que es Responsive Design?</h3>
	  	   	    <p class="p-2">Uno de los objetivos de los <strong>desarrolladores web</strong> es que su diseño pueda tener una buena apariencia en cualquier tamaño de pantalla, en cualquier resolución, en cualquier dispositivo. Quizás te preguntes <b>¿Se crear un diseño diferente para cada dispositivo o pantalla?</b></p>
	  	   	    <p class="p-1">Pues la verdad que no es así, el <strong>Responsive Design</strong>  se trata de crear un solo diseño y adaptarlo para cada tamaño de pantalla.</p>
	  	   	    <p class="p-1">Si entras a un sitio web desde un ordenador probablemente te habrás dado cuenta que se visualiza mucha información porque hay suficiente espacio, pero si vas achicando tu pantalla y llegas al tamaño de una Tablet te darás cuenta que algunas informaciones se ocultaron y ahora está disponible dentro de un menú vertical.</p>
	  	   	    <p class="p-1">Esto pasa por que el espacio horizontal se va disminuyendo y llegara al punto de que todos los elementos estén unos encima de otros. Esto puede perjudicar a la <b>experiencia de usuario</b> ya que no se podrá navegar en tal sitio debido a que no puedas entender nada.</p>
	  	   	    <p class="p-1">Entonces <b>¿Cómo lo hacen?</b> Pues existen algunas maneras, una de ellos se llama <code>“MEDIAS QUERY”</code> y se llevan a cabo gracias al lenguaje de estilos en cascada llamado <code>CSS</code>, esta tiene una funcionalidad de saber cuál es el tamaño de la pantalla actual, dependiendo en tamaño especificado realizara los cambios respectivos en tu sitio. Aunque no es tan difícil de dominarlo requiere tiempo de práctica.</p>
				<p class="p-1">Otra forma seria gracias a los <strong>FRAMEWORK:</strong> un framework es un conjunto de código escrito por otros desarrolladores, para la comunidad y facilitando el desarrollo en algún proyecto. Por ejemplo si necesitas un <b>‘carrusel’</b> para tu sitio no es necesario escribir todo el código para realizarlo, simplemente llamas al elemento que deseas utilizar y realizar modificaciones a tu gusto como serían las imágenes a mostrar.</p>
				<p class="p-1"> Uno de los más populares es <strong>‘Bootstrap’</strong> debido a su sistema de <b>grillas</b>, es decir utiliza filas y columnas para los elementos y de esta forma cada elemento está en su respectivo lugar sin afectar a los demás elementos.</p>
				<div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Te animo a que utilices estas tecnologías ya que todos los <strong>navegadores</strong> lo acepta, ahora <b>¿Qué tan importante es el Responsive Design?</b> Un primer lugar mejora la experiencia del usuario, es decir que si tu sitios es agradable y probablemente los usuarios vuelvan a visitarla, y también es importante en temas de <code>SEO</code> ya que <code>GOOGLE</code> sabe muy bien cuando un sitio es RESPONSIVO o NO.</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Existe el método de realizar ZOOM colocando los 2 dedos en tu pantalla móvil, esto es muy favorable si tu sitio no es RESPONSIVE DESIGN. De lo contrario si quiere evitar esta acción existe una pequeña línea de código que lo hace posible.  <code>&ltmeta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0"&gt</code></p>
	   	   	   		</div>
	   	   	   	</div>
              </div>
	  	   </div>
	  	   <hr/>
	  	   <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>

<?php include('head_footer/pie.php'); ?>