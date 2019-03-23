
<section class="container mt-5">
<link rel="stylesheet" href="../../css/fileinput.css">
<link rel="stylesheet" href="../../css/interesantes.css">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/principal.css">
<link rel="stylesheet" href="../../font/flaticon.css">	

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
                            <video src="../../img/memorizar.mp4" id="tamano_video" class="cuadro fondo" controls=""></video>
                            </div>

                            <div class="tab-pane container bordes" id="exp<?php echo $value['nriConocimiento']; ?>">
                             <p class="p-3"><?php echo $value['explicacion']; ?></p>

                    <!--cierre del ciclo conocimientos-->
                    
<div class="row">
    <div class="col-12 col-md-6 p-2" style="background-color: rgb(50,50,50); border-radius: 10px;">
        <!--explicacion izquierda-->
<pre>
<?php echo $value['codigo_1']; ?> 
</pre>
    </div>
    <div class="col-12 col-md-6 p-2 mt-4 mt-md-0" style="background-color: rgb(50,50,50); border-radius: 10px; color: #fff;">
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
               <div class="alert alert-info"><strong>Tienes un proyecto parecido pero con diferente logica?</strong> puedes enviar tu pequeno proyecto <b>comprimido .rar o .zip</b> para que la comunidad se pueda beneficiar. Peso del archivo <b>menor a 2MB</b></div>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="subir_arch" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="file" class="file" name="subir_documento" id="file_arch">
                          <input type="text" name="desc_arch" class="mt-2 text-center form-control" placeholder="Descripcion" required="">
                          <input type="text" style="display: none;" name="archivo_video" value="<?php echo $value['titulo']; ?>">
                        </div>
              </form>
              <hr/>
           <?php endforeach; ?>
         </div>
        
</section>

