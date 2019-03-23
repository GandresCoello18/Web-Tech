<?php $titulo = "https y https";
$key1 = "que son los protocolos http y https"; $key2 = "cual es el protocolo mas seguro"; $key3 = "como funciona los protocolos"; $key4 = "encriptación realizado por protocolos";
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
	  	   	    <h3 class="text-center">¿Como funciona http y https?</h3>
	  	   	    <p class="p-2">En internet existen 2 tipos de protocolos  el primero es <strong>HTTPS</strong> y  de seguro has visto que también existe <strong>HTTP</strong>.</p>
	  	   	    <p class="p-1">“HTTP” no suele ser seguro que quiero decir: por ejemplo si envías datos confidenciales, personales, privados viajan al servidor tal como lo especificaste  no contiene ningún tipo de seguridad, o encriptación lo cual es muy malo si se trata de un sitio de compras donde tienes que utilizar la tarjeta de crédito, o si te registras con tus datos en algún formulario. </p>
	  	   	    <h5 class="text-center">¿Qué riesgos contiene http?</h5>
	  	   	    <p class="p-1">Bueno cuando la información viaja hacia el servidor casi nunca se obtiene una conexión directa que quiero decir: supongamos que tú envías algo desde tu ordenador en ecuador y el servidor se encuentra en chile. Esa información pasa por diferentes computadores para que pueda llegar a su destino, en el transcurso del proceso esos computadores pueden leer tus datos sin ningún problema y es ahí donde surge el robo de información.</p>
	  	   	    <p class="p-1">Los “Sniffers” son los encargados del monitorear el tráfico de internet atraves de los puertos que conocemos y es ahí donde los hacker aprovechan para tener acceso a tus datos.</p>
	  	   	    <h5 class="text-center">¿Hablemos de https?</h5>
	  	   	    <p class="p-1">“HTTPS” su proceso es mucho más complejo y eso es algo bueno 
				Interactúa con un mini documento o certificado  que contiene unas series de números que certifican quien eres.  Entonces eso pasa por un proceso para comprobar si esta todo correcto tomando el ejemplo anterior cuando tratas de enviar información al servidor, el ordenador se conecta a una red encriptada permitiendo que tus datos sean seguro. </p>
				<p class="p-1">ósea si tu digitas “1234” durante el proceso se transformara en “7f3t” pero sigue siendo la misma información al llegar al servidor esta se dese cripta.</p>
				<h5 class="text-center">¿Qué pasa si otro ordenar recibe el mismo certificado?</h5>
				<p class="p-1">En el proceso de comprobación del certificado también provee unas llaves únicas por así decirlo esa llave se llama key Publicó y el servidor contiene una llave llamada key privada. Puede que el certificado coincida. Pero la llave es diferente así que la información encriptada es diferente a tus datos encriptados ósea no significa lo mismo.</p>
				<p class="p-1">Tomando en cuenta  el mismo ejemplo anterior: los computadores encargados de transmitir la información hacia el servidor, ellos observan los datos encriptados “7f3t” pero no entiende lo que quiere decir.</p>
				<div class="row">
	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<p class="p-1">Es así como los hacker también los ven pero no los entienden ya que está cifrado de extremo a extremo entonces eso se vuelve una información confidencial y segura.</p>
	   	   	   	</div>

	   	   	   	<div class="col-12 col-md-6">
	   	   	   		<div id="sabias">
	   	   	   			<h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			<p class="p-2">Si estas en un sitio web y necesitas hacer transacciones o comprar algo asegurate que en la parte superior izquierda de tu navegador en la URL contenga las letra "https//".</p>
	   	   	   		</div>
	   	   	   	</div>
              </div>
	  	   </div>
	  	   <?php include('head_footer/articulos_derecha.php'); ?>
	  </div>
</section>

<?php include('head_footer/pie.php'); ?>