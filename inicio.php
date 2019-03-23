<?php
$titulo = 'Web-Tech: Sobre Tecnologias Web';
 include('cabeza.php'); 
/*concexion con base de datos*/
try{
  $conexion = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
}catch(PDOException $e){
  echo "error" . $e->getMessage();
  die();
}
/*contador de paginas*/
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$PostPorPagina = 12;
/*consulta a la base de datos*/
  $articulo = objetos_usuarios::articulos_inicio($conexion,$pagina,$PostPorPagina);
  $numeroPagina = objetos_usuarios::mostrar_paginacion($conexion,$PostPorPagina);
/*consulta a la base datos RECOMENDACIONES*/
  $recomendado = objetos_usuarios::recomendado_articulo();
?>
<!--contenido-->

<style type="text/css">
  .crad_circle{
    border-radius: 50%; 
    width: 30px; 
    height: 30px;
    position: absolute;
    top: 8px;
    left: 8px;
    background-color: #20B2AA;
}
.crad_circle:before{
  content: '\f16a';
  position: absolute;
  font-family: 'flaticon';
  font-weight: bold;
  color: white;
  left: 8px;
  top: 2px;
}
</style>

<section class="container">
        <div class="row mt-4">
        	 <div class="col"><h1 class="text-center" id="titulo">Interpreta Las Tecnologias Web</h1></div>
        </div>	
<!--creacion de cartas mediante ciclo y bases de datos-->
        <div class="row mt-4 justify-content-center">
        	<?php foreach ($articulo as $valor): ?>
        	 <div class="col-12 col-md-4 col-lg-3 mt-md-0 mb-4">
        	 	    <a style="text-decoration: none;" href="<?php echo $valor['enlace'] ?>" target="_blanck">
        	 	    <div class="card" style="border-bottom: 2px solid #808080;">
        	 	    	<img src="<?php echo $valor['imagen']; ?>" class="card-img-top img-fluid" style="height: 100px;">
                  <span class="p-1 crad_circle"></span>
        	 	    	<div class="card-block">
        	 	    		<h4 class="card-title text-left"><?php echo $valor['titulo']; ?></h4>
        	 	    		<p class="card-text text-center" style="color: #000;"><?php echo $valor['descripcion']; ?></p>
        	 	    	</div>
        	 	    </div>
        	 	  </a>  
        	 </div>
        	<?php endforeach ?>
        	 <!--termina el ciclo de cartas-->
        </div>
       
       <div class="row mt-4 justify-content-lg-center">
       	     <div class="col-12 recomiendo p-4 col-lg-8">
       	       <h3 class="text-center">Recomendado</h3>
       	       <!--ciclo de recomendados con base de datos-->
       	       	<?php foreach ($recomendado as $valor): ?>
       	       <div class="row mt-4">
       	            <div class="col">
       	             		<a style="text-decoration: none;" href="<?php echo $valor['enlace']; ?>" target="_blanck">
       	    	 			<div class="media justify-content-center d-flex">
       	    	 			<img src="<?php echo $valor['imagen']; ?>" width="80" height="100" class="d-flex align-self-start  mr-4">
       	    	 			<div class="media-body">
       	    	 			<h4 style="color: #3299bb"><?php echo $valor['titulo']; ?></h4>
       	    	 			<p style="color: #000;"><?php echo $valor['descripcion']; ?></p>
       	    	 			</div>
       	    	 			</div>
       	    	 		</a>
       	    			</div>
       	    		
       			</div>
<!--cierre del ciclo-->
       			<hr/>
       			<?php endforeach; ?>

       	     </div>
       </div>


       <div class="row mt-5">
       	     <div class="col">
				 <section class="paginacion justify-content-center d-flex">
        			<ul>
        				<!--validar paginacion derecha o izquierda-->
        				<?php if ($pagina == 1):?>
        					<li class="disable">&laquo;</li>
        				<?php else: ?>
        					<li><a href="?pagina=<?php echo $pagina - 1; ?>">&laquo;</a></li>
        				<?php endif; ?>	

        				<?php  

                         for ($i=1; $i <= $numeroPagina; $i++) { 
                         	if ($pagina == $i) {
                         		echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                         	}else{
                         		echo "<li><a href='?pagina=$i'>$i</a></li>";
                         	}
                         }
                       ?>   
                      <!--crecion de numeros de paginas-->
                         <?php if ($pagina == $numeroPagina):?>
        					<li class="disable">&raquo;</li>
        				<?php else: ?>
        					<li><a href="?pagina=<?php echo $pagina + 1; ?>">&raquo;</a></li>
        				<?php endif; ?>	

        			</ul>
        		</section>     
       	     </div>
       </div>

</section>
<!--pie de pagina-->

<?php include('pie.php'); ?>
 