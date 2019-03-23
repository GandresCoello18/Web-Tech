
<?php $titulo = 'Quieres Publicar'; ?>
<?php include('cabeza_sin_carrusel.php'); ?>
<!--cabeza de la pagina-->
<style type="text/css">
#enviar:before{
	content: '\f11e';
	position: absolute;
	font-family: 'flaticon';
	left: 40px;
	top: 6px;
	font-size: 1.2em;
}
#limpiar:before{
	content: '\f12a';
	position: absolute;
	font-family: 'flaticon';
	left: 40px;
	top: 8px;
}	
</style>

<section class="container mt-5">
	   <div class="row titulo-2">
	   	   <div class="col titulo">
	   	   	     <h2 class="text-center mt-5 titulo ">Publica para que los demás lo vean</h2>
	   	   </div>
	   </div>
	   <div class="row justify-content-center mt-0 mt-md-5 texto">
	   	     <div class="col-9 col-lg-7">
	   	     	  <h5 class="text-center">¿Tienes una gran idea? Pero ¿Sabes como compartirla?</h5>
	   	     	  <p class="p-2">Te puedo dar una pequeña ayuda para que la comunidad pueda beneficiarze de tus ideas o conocimientos ¿Como funciona? Manda un mensaje con tus datos y el tema de tu propuesta con una gran parte en descripcion de lo que trata. Se evaluara cada tema para determinar si se acopla o si se relaciona con tecnologias, la publicacion tendra sus datos como nombre y apellido lo cual verifica que usted es autor del tema. El dia de la publicacion se le comunicara por medio del correo electronico (que usted debera introducir con sus datos).</p>
	   	     </div>
	   </div>

       <div class="row mt-5">
       	    <div class="col">	   
                <!--formulario de contacto-->
	   			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formulario">
	   				<h3 class="text-center p-3 mt-2">Interprete - Tech</h3>
	   				
                    <div class="form-group p-3">
                    	<h5>Campos Obligatorios <span id="rojo">*</span></h5>
                    	  <div class="row">
                    	  	   <div class="col-12 m-2">
                    	  	      	<label for="nombre">Nombre:<span id="rojo">*</span></label>
	   	   	    					<input type="text" name="Nombre" class="form-control" placeholder="Nombre" id="nombre">
	   	   	    		       </div>
                    	  	   <div class="col-12 m-2">
	   	   	    		  			<label for="apellido">Apellido:<span id="rojo">*</span></label>
	   	   	    					<input type="text" name="Apellido" class="form-control" placeholder="Apellido" id="apellido">
                    	  	   </div>
                    	  </div>

                    	  <div class="row">
                    	  	   <div class="col-12 m-2">
                    	  	   	    <label for="correo">Correo:<span id="rojo">*</span></label>
	   	   	    					<input type="email" name="correo" required="#" class="form-control" placeholder="Correo Electronico" id="correo">
                    	  	   </div>
                    	  	   <div class="col-12 m-2">
                    	  	   	    <label for="tema">Tema:<span id="rojo">*</span></label>
	   	   	    					<input type="text" name="tema" class="form-control" placeholder="De que trata" id="tema">
                    	  	   </div>
                    	  </div>

                    	  <div class="row">
                    	  	   <div class="col">
                    	  	   	    <label for="descripcion">Descripcion:<span id="rojo">*</span></label>
	   	   	    					<textarea type="text" name="descripcion" class="form-control" placeholder="Descripcion" id="descripcion"></textarea>
                    	  	   </div>
                    	  </div>

                    	  <div class="row mt-4">
                    	  	    <div class="col-6">
                    	  	    	  <button class="btn btn-info form-control" id="enviar" name="envio" type="submit">Enviar</button>
                    	  	    </div>
                    	  	    <div class="col-6">
                    	  	    	 <button class="btn btn-danger form-control" id="limpiar">Limpiar</button>
                    	  	    </div>
                                <div id="alertas" class="justify-content-center mt-4">
                                </div>
                    	  </div>
                    </div>
	   			</form>
       	    </div>
       </div>
</section>


<!--pie de pagina-->
<?php include('pie.php'); ?>