<?php $titulo = "Base de Datos";
$key1 = "que es una base de datos"; $key2 = "como guardan informacion las aplicaciones"; $key3 = "donde se guarda mis datos"; $key4 = "SQL tablas campos y atributos"; 
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
	    	  	   <h3 class="text-center">¿Que son las Bases de Datos?</h3>
	    	  	   <p class="p-2">Te has preguntado alguna vez donde se almacena la información de los usuarios ya sea que estés utilizando una aplicación o en un sitio de internet, esto es gracias a las <strong>bases de datos</strong> donde se guardan grandes cantidades de información.</p>
	    	  	   <p class="p-1"> Un ejemplo seria <strong>Facebook</strong> ellos almacena mucha información de cada usuario como nombres y apellidos completos, edad, fecha de nacimiento, nombre Usuario, contraseña, foto de perfil, dirección, numero telefónico y mucho más.</p>
	    	  	   <p class="p-1"> Pero también existe el método <strong>entidad relacion</strong> que es uno de los más utilizados y una vez más Facebook lo utiliza es por eso que en tu perfil existen la sección “amigos en común” por qué tu cuenta puede estar relacionado con otras, es por eso que solo tus amigos puede de enterarse de tus últimas publicaciones. Los <strong>Like</strong> también se relacionan ya que puedes dar like no solo a una publicación sino a muchas y de diferentes personas de igual manera sucede con los comentarios.</p>
	    	  	   <p class="p-1">Ahora hablemos sobre aquellos <strong>gestores de bases de datos</strong> la verdad es que existen muchos, algunos tienen mucho en común y otros tienen diferencias estos son:</p>
	    	  	   <p class="p-1"><strong>MySQL</strong> – <strong>postgreSQL</strong> – <strong>SqlLite</strong> – <strong>SQLserver</strong> - <strong>Mongo DB</strong></p>
	    	  	   <p class="p-1">Uno de los más populares es MySQL, es muy utilizado para aplicaciones web como de escritorio y contiene entidad relación lo cual es muy bueno. Si deseas aprender esta tecnología te invito a descargarlo de internet y empieza a aprender sin límites. Una vez instalado en tu ordenador puedes comenzar a crear una base de datos completamente nueva, lo puedes hacer con la interfaz gráfica o mediante la <strong>línea de comandos</strong>.</p>
	    	  	   <p class="p-1">Una base de datos contiene tablas esas tablas contiene  filas y columnas estas filas y columnas contiene campos y atributos, si gustas puedes profundizar este tema por ti mismo.</p>
	    	  	   <p class="p-1">Imaginemos que tienes un <b>mini Marquet</b> y necesitas registrar los productos que tiene en el almacén, entonces creas una tabla llamada <b>“Productos-Almacenados”</b> con sus respectivos campos como: <code>ID-prod</code>, <code>Nombre-prod</code>, <code>Cantidad-prod</code>, <code>fecha-de-caducacion</code> y con sus respectivos atributos como: tipo de dato varchar, int, float, text, number y la longitud.</p>
	    	  	   <p class="p-1">Una vez termina tu estructura empiezas a llenar tu tabla de información pero <b>¿Cómo lo hacemos?</b> Existen comandos para realizar estas tares como: <code>"INSERT INTO SET"</code> que nos permite insertar información veamos todo el procedimiento.</p>
	    	  	   <p class="p-1"><code>INSERT INTO</code> Producto-Almacenado <code>SET</code> <b>Nombre-prod</b>=’leche’, <b>Cantidad-prod</b>=’32’, <b>Fecha-de-caducacion</b>=’02-03-2020’;</p>
	    	  	   <p class="p-1">Ahora necesitas mostrar la información y eso lo hacemos con el comando ‘<code>SELECT</code>’ veamos el proceso completo.</p>
	    	  	   <p class="p-1"><code>SELECT * FROM</code> Producto-Almacenado;</p>
	    	  	   <p class="p-1">Este nos permite abstraer o mostrar toda la información que está en nuestra tabla, pero ahora imaginemos que solo necesitas mostrar un registro en específico, para eso utilizamos <code>WHERE</code> veamos el ejemplo.</p>
	    	  	   <p class="p-1"><code>SELECT * FROM</code> Producto-Almacenado <code>WHERE</code> <b>Nombre-prod</b>=’leche’;</p>
	    	  	   <p class="p-1">Ahora solo se mostrar aquel registro que tenga en su campo Nombre-prod el valor de ‘Leche’;</p>
	    	  	   <p class="p-1">Ahora imagina que tus clientes comprar leche diariamente por lo tanto tu registro debe ser actualizado y <b>¿Cómo hacemos eso?</b> Veamos el comando a continuación.</p>
	    	  	   <p class="p-1"><code>UPDATE</code> Producto-Almacenado <code>SET</code> <b>Cantidad-prod</b>=’25’ <code>WHERE</code> <b>Nombre-prod</b>=’leche’;</p>
	    	  	   <p class="p-1">El comando UPDATE sirve para actualizar o modificar un registro aunque debes de escribir el nombre de la tabla y el campo que vas a cambiar, si te distes cuenta he utilizado <code>WHERE</code> porque necesito especificar aquel registro a modificar, si en algún caso no utilizaría WHERE el resultado sería que todos los campos se modificaría y en realidad no quisieras eso.</p>
	    	  	   <p class="p-1">Ahora imagina que descartaras un producto porque ya no lo vendes en tu mini Marquet, necesitas eliminar de tu base de datos y <b>¿Cómo lo hacemos?</b> Veamos el comando.</p>
	    	  	   <p class="p-1"><code>DELETE FROM</code> Producto-Almacenado <code>WHERE</code> <b>Nombre-prod</b>=’Leche’;</p>

	    	  	   <div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">El comando <code>DELETE</code> sirve para eliminar registro pero necesitamos especificar la tabla y el registro, y también he utilizado <code>WHERE</code> para especificar el producto que ya no venderé o el producto que deseo eliminar, si no lo utilizaría probablemente se eliminar todos tus registros de tu tabla.</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Las tablas contiene claves Primarias o ‘PRIMARY KEY’  es un campo o a una combinación de campos que identifica de forma única a cada fila de una tabla. 
						Claves foráneas  es una limitación referencial entre dos tablas. Entender esto es muy importante si utilizaras ‘entidad relación’.
						</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>
	    	  </div>
	    	  <?php include('head_footer/articulos_derecha.php'); ?>
	    </div>
</section>

<?php include('head_footer/pie.php'); ?>