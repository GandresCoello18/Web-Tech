<?php
$Titulo = "Apk Compras";
$key1 = "aplicacion de compras con javascript"; $key2 = "akp con js"; $key3 = "proyecto con js"; $key4 = "programa de compras js";
include('../video_proyecto.php');
include('../cabeza_proyecto.php');
?>
<link rel="stylesheet" href="css/estilo.css">
  <body>
    <div class="app-page" data-page="home">
      <div class="bg-success cabeza">
        <div class="text-center p-2">Registrador de Compras</div>
      </div>


      <section class="container mt-2 scroll">
          <div class="row justify-content-center">
              <div class="col-12 col-md-7">
                  
                  <div class="app-content">
                    <div class="app-section">

                      <div class="row">
                        <div class="col-12">
                          <form>
                              <input type="text" class="form-control mt-2" id="producto" placeholder="Nombre del Producto">
                              <input type="number" class="form-control mt-3" id="cantidad" placeholder="Cantidad">
                              <button class="btn btn-info form-control mt-3" type="button" onclick="guardar()">Guardar</button>
                          </form>
                        </div>

                        <div class="col-12 insertar">
                          
                        </div>

                        <div class="col-12 mt-5">
                          <button class="btn btn-info form-control mt-5" onclick="limpiar()">Limpiar</button>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
          </div>
      </section>


    </div>

<!--/////////////////////////////////////////////////////////-->

<?php
include('../modelo_video.php');
?>

    <script src="js/zepto.js"></script>
    <script src="js/app.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/compras.js"></script>
    <script>
      App.controller('home', function (page) {
        // put stuff here
      });

      App.controller('page2', function (page) {
        // put stuff here
      });

      try {
        App.restore();
      } catch (err) {
        App.load('home');
      }
    </script>

<?php 
include('../pie.php');
?>

  </body>
</html>