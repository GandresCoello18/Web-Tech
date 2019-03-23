<?php $titulo = "¿Como funiona internet?";
$key1 = "Como funciona internet"; $key2 = "procedimiento de internet"; $key3 = "servidores para internet";
$key4 = "tecnologias de internet";
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
				<span>18-01-2019</span>
			</div>
	</div>

	  <div class="row justify-content-center">
	  	     <div class="col-12 col-md-7 mt-4">
	  	     	<h3 class="text-center">¿Como funciona internet?</h3>
	  	     	<p class="p-2">En nuestra vida cotidiana se ha vuelto normal  consultar cosas o solicitar información en internet pero ¿Sabes cuál es el proceso que ejecuta internet para mostrarte los resultados?</p>
	  	     	<p class="p-1">Primeramente necesitamos algún dispositivo con acceso a internet supongamos que estas solicitando una información como ¿Cuál es el último tema de tal artista?  ¿Cuántos años tiene en el mundo de la música? Y cosas así eso lo escribes en el buscador, uno de los más famosos es “GOOGLE” pero existen muchos más. Entonces tu solicitud viaja por internet hasta llegar a un objeto que se llama “Servidor” ¿Qué es esto? Pues los servidores son un ordenador o conjunto de ordenadores que contiene unas bases de datos que almacena muchísima información.</p>
	  	     	<p class="p-1">Dejado esto claro tu petición es procesada por el servidos buscando los datos que solicitaste, una vez listo esos datos regresan de la misma forma que llegaron y se muestra en la pantalla de tu dispositivo. Tomemos encuentra que esta breve explicación es solo para que tengas una idea de cómo funciona, pero en realidad sus procesos son muchos más complejos.</p>
	  	     	<h5 class="text-center">¿Cómo sabe el servidor a que dispositivo mostrar los resultados? </h5><p class="p-1">Bueno cada dispositivo contiene una serie de números llamados IP es algo así  (123.36.28.2)  que sirve para distinguir unos dispositivos de otros esta IP la proporciona tu proveedor de internet.</p>
	  	     	<h5 class="text-center">¿Qué pasaría si alguien más tiene el mismo proveedor de internet?</h5><p class="p-1">Son muchísimas personas que contratan internet con el mismo proveedor pero el numero IP nunca va hacer igual y eso es lo que los diferencia.</p>
	  	     	<h5 class="text-center">¿Te has dado cuenta que tu navegador guarda la información de tus peticiones anteriores o relacionadas con el tema?</h5>
	  	     	<p class="p-1">Eso es gracias a un archivo que se llama COOKIE este elemento contiene un pequeño espacio del disco duro que está dedicado al uso de tus peticiones. Esta cookie normalmente guarda información valiosa como tú nombre de usuario, cuanto tiempo permaneciste activo, la fecha de la última visita y cosas así.</p>
	  	     	<p class="p-1">Cuando haces tus peticiones por internet también viajan estas cookie y son procesados por los servidores, No te preocupes pues todo esto va encriptado ósea se transforma en una serie de caracteres.</p>

                 <div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Un ejemplo puede ser los productos que se vende por internet ellos utilizan cookie para saber si lo visitas por primera vez o por cuarta vez, cuanto tiempo estas en la sección de comprar y que articulo más te interesa</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Navegar por internet no es tan seguro como parace tus datos pueden ser extraidos o eliminados, pero existen metodos para segurar tu informacion una de ellas son las VPN.</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>

	  	     </div>
	  	     <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>

<?php include('head_footer/pie.php'); ?>