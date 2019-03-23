<?php  
$titulo = '¿Como se hace?';
include('cabeza_sin_carrusel.php');
/*conexion con base de datos */
try{
  $conexion_4 = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
}catch(PDOException $e){
  echo "error" . $e->getMessage();
  die();
}
/*contando paginas*/
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$PostPorPagina = 10;

  $Conocimientos = objetos_usuarios::mostrar_tutoriales($pagina,$conexion_4,$PostPorPagina);
  $numeroPagina = objetos_usuarios::mostrar_paginacion($conexion_4,$PostPorPagina);



if (isset($_POST['mio'])) {
  $carpeta = 'documentos_usuario/';
    
    $Descripcion_arch = $_POST['desc_arch'];
    $nombre_del_documento = $_FILES['subir_documento']['name'];
    $tamano_del_documento = $_FILES['subir_documento']['size'];
    $temporal = $_FILES['subir_documento']['tmp_name'];
    $obtener_archivo_video = $_POST['archivo_video'];

    $carpeta = 'documentos_usuario/';

        try{
            $conexion_subir = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
        }catch(PDOException $e){ 
            echo "error".$e->getMessage();
        }

    $consulta_arch = $conexion_subir->prepare('INSERT INTO archivos_documentos (nroDocumentos, nombre, descripcion, archivo_video ) VALUES (null, :nombre, :descripcion, :archivo_video)');   


         $consulta_arch->execute(array(
          ':nombre' => $nombre_del_documento,
          ':descripcion' => $Descripcion_arch,
          ':archivo_video' => $obtener_archivo_video
          ));

        if($tamano_del_documento != "0" || $tamano_del_documento != 0){
      opendir($carpeta);
      $destino = $carpeta.$nombre_del_documento;
      copy($temporal,$destino);
      echo "<script type='text/javascript'>alert('Archivo subido, Exitosamente')</script>";
      }else if($tamano_del_documento > "2097152"){
        echo "<script type='text/javascript'>alert('Error .El archivo pesa mas de 2MB')</script>";
      }else{
        echo "<script type='text/javascript'>alert('Error .El archivo pesa mas de 2MB')</script>";
      }      

  }
?>

<!--cabeza de la pagina-->
<section class="container mt-5">
	    <div class="row">
        	 <div class="col mt-2 mt-md-4"><h3 class="text-center" id="titulo">Desarrollemos proyectos</h3></div>
        </div>	

         <div class="row">
            <!--ciclo con base de datos conocimientos-->
            <?php foreach ($Conocimientos as $value): ?>
               <div class="col">
                     <article class="mt-5">
                        <ul class="nav nav-pills barra_inte">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#video<?php echo $value['nriConocimiento']; ?>">Video</a></li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#exp<?php echo $value['nriConocimiento']; ?>">Codigo</a></li>
                        <li class="nav-item">
                        <a class="nav-link mr-3 mr-md-5" data-toggle="pill" href="#" id="temas"><?php echo $value['titulo']; ?></a></li>
                        </ul>
                <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active container" id="video<?php echo $value['nriConocimiento']; ?>">
                                <!--<iframe id="tamano_video" height="315" src="<?php #echo $value['video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                            <video src="img/memorizar.mp4" id="tamano_video" class="cuadro fondo" controls=""></video>
                            </div>

                            <div class="tab-pane container bordes" id="exp<?php echo $value['nriConocimiento']; ?>">
                             <p class="p-3"><?php echo $value['explicacion']; ?></p>

                    <!--cierre del ciclo conocimientos-->
                    
<div class="row">
    <div class="col-12 col-md-6">
        <!--explicacion izquierda-->
<pre>
<?php echo $value['codigo_1']; ?> 
</pre>
    </div>
    <div class="col-12 col-md-6">
        <!--explicacion derecha-->
<pre>
<?php echo $value['codigo_2']; ?>
</pre>  
    </div>
</div>
                                
    
                            </div>
                                    </div>
                            </div>
                        </div>
                    </article>

               </div>
               <div class="alert alert-info"><strong>¿Tienes un proyecto parecido pero con diferente logica?</strong> puedes enviar tu pequeño proyecto <b>comprimido .rar o .zip</b> para que la comunidad se pueda beneficiar. Peso del archivo <b>menor a 2MB</b></div>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="subir_arch" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="file" class="file" name="subir_documento" id="file_arch">
                          <input type="text" name="desc_arch" class="mt-2 text-center form-control" placeholder="Descripcion" required="">
                          <input type="text" style="display: none;" name="archivo_video" value="<?php echo $value['titulo']; ?>">
                        </div>
              <hr/>
              </form>
               <hr/>
           <?php endforeach; ?>
         </div>
        
</section>  

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

<!--pie de pagina-->
<?php include('pie.php'); ?> 