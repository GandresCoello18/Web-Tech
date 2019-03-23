<style type="text/css">
  #formulario{
  border-radius: 10px;
  background:-webkit-linear-gradient(
    40deg, #008B8B,#66CDAA,#8FBC8F
    );
}
#formulario label{
  font-weight: bold;
  left: -5px;
  position: relative;
  color: #fff;
}
#formulario h3{
  color: #fff;
}
#formulario #rojo{
  color: red;
  font-size: 1.3em;
}
footer{
  top: 0px;
}
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
#pie{
  position: relative;
  left: -70px;
}
.categoria{
  position: relative;
  text-align: center;
  top: -90px;
}
.categoria ul li{
  list-style: none;
}
.categoria ul li a{
  color: #fff;
  text-decoration: none;
}
.descarga a{
  color: #fff;
  text-decoration: none;
  position: relative;
  top: -50px;
}

</style>
<footer class="container-fluid mt-5" id="sobre">

       <div class="row pie">
            <div class="col-12 col-md-6 justify-content-center d-flex">

              <div id="informacion">
              <b class="p-3">Sobre Nosotros</b>
              <ul>
                <li><a href="../sobre_mi" id="sobre_nosotros">Quien Soy</a></li>
                <li><a href="../sobre_nosotros" id="vision">Quienes Somos</a></li>
              </ul>
             </div>

            </div>
            <div class="col-12 col-md-6 justify-content-center d-flex">
                 
               <div id="informacion-2">  
                 <b class="p-3">Publicaciones</b>
                 <ul>
                  <li><a href="../quieres_publicar" id="publicar">Nuevo Tema</a></li>
                  <li><a href="#" id="contacto" data-toggle="modal" data-target="#myModal">Contacto</a></li>
                 </ul>
              </div>   

            </div>
       </div>

       <div class="modal fade" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
<!-- Modal Header -->
          <div class="modal-header">
                <h4 class="modal-title">Formulario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
<!-- Modal body -->
<div class="modal-body">
  <div class="row">
            <div class="col">    
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formulario pie" class="mr-md-5" style="background:-webkit-linear-gradient(40deg, #008B8B,#66CDAA,#8FBC8F);">
            <h3 class="text-center p-3 mt-2">Interprete - Tech</h3>
            <div id="alertas"></div>
                    <div class="form-group p-3">
                      <h5>Campos Obligatorios <span id="rojo" style="color: red; font-size: 1.3em;}">*</span></h5>
                        <div class="row">
                             <div class="col-12 m-2">
                                  <label for="nombre">Nombre:<span id="rojo" style="color: red; font-size: 1.3em;}">*</span></label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" id="nombre">
                         </div>
                             <div class="col-12 m-2">
                          <label for="apellido">Apellido:<span id="rojo" style="color: red; font-size: 1.3em;}">*</span></label>
                        <input type="text" name="Apellido" class="form-control" placeholder="Apellido" id="apellido">
                             </div>
                        </div>

                        <div class="row">
                             <div class="col-12 m-2">
                                  <label for="correo">Correo:<span id="rojo" style="color: red; font-size: 1.3em;}">*</span></label>
                        <input type="email" name="correo" required="#" class="form-control" placeholder="Correo Electronico" id="correo">
                             </div>
                        </div>

                        <div class="row">
                             <div class="col-12 m-2">
                                  <label for="tema">Tema:<span id="rojo">*</span></label>
                        <input type="text" name="tema" class="form-control" placeholder="De que trata" id="tema">
                             </div>
                             <div class="col">
                                  <label for="descripcion">Descripcion:<span id="rojo" style="color: red; font-size: 1.3em;}">*</span></label>
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
                        </div>
                    </div>
          </form>
            </div>
       </div>
</div>
<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
</div>
            </div>
            </div>
          </div>


     <div class="row mt-4">
          <div class="col-12 col-md-4">
            <div id="dat">  
              <ul>    
                <li><div id="bordes"></div></li>
                <li><span id="espacio">|</span></li>
                <li><h3 id="local" class="m-3" style="top: -113px;">Web-Tech</h3></li>
              </ul>
            </div>
          </div>
          <!--<div class="col-12 mt-md-5 col-md-4 categoria">
            <ul class="mt-md-5">
              <li><h5 class="p-3">Categoria</h5></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
            </ul>
          </div>-->
          <div class="col-12 col-md-4">
            <h5 class="text-center descarga mt-md-5"><a href="../progreso_estudio" target="-blanck">Descarga la APK: Web-Tech ..!</a></h5>
          </div>
     </div>
</footer>

<script src="../js/jquery-3.0.0.min.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">

$("#menu").click(function(){
  $("#navegacion-cell").toggle("fast");
})

$("#cerrar").click(function(){
   $("#navegacion-cell").toggle("fast");  
})

  var btn_enviar = document.getElementById('enviar');
  var btn_limpiar = document.getElementById('limpiar');
  var nombre = document.getElementById("nombre");
  var apellido = document.getElementById("apellido");
  var correo = document.getElementById("correo");
  var tema = document.getElementById("tema");
  var descripcion = document.getElementById("descripcion");
  var alertas = document.getElementById("alertas");
  var formulario = document.getElementById("formulario");
  var formulario_2 = document.getElementById("pie");

  cargar();
  function cargar() {
    btn_enviar.addEventListener("click", enviar);
    btn_limpiar.addEventListener("click", limpiar);
  }

    function opcion(tipo){
      var espacio_mensaje = document.querySelector("#alertas div");
      if (espacio_mensaje != null) {
        espacio_mensaje.remove();
      }
      var mensaje = document.createElement("div");
      
      if (tipo == 'error') {
         mensaje.classList = 'alert alert-danger';
         mensaje.innerHTML = `<strong>Error</strong> por favor llene todo los campos`;
      }else{
         mensaje.classList = 'alert alert-success';
         mensaje.innerHTML = `<strong>Exito</strong> datos ingresados correctamente`;
      }
        alertas.appendChild(mensaje);

        setTimeout(function(){
        mensaje.remove();
        },4000);
    }

    function error_correo(tipo){
      var mensaje_2 = document.createElement("div");
      if (tipo == 'error_correo') {
        mensaje_2.classList = 'alert alert-danger';
        mensaje_2.innerHTML = `<strong>Error</strong> correo electronico invalido`;
      }
      alertas.appendChild(mensaje_2);

      setTimeout(function(){
        mensaje_2.remove();
      },4000);
    }


  function enviar(){
    //e.preventDefault();
  
  if (correo.value.indexOf('@') == -1) {
        error_correo('error_correo');
    
  if (nombre.value.length == 0 || apellido.value.length == 0 || correo.value.length == 0 || tema.value.length == 0 || descripcion.value.length == 0) {
         opcion('error');
  }
}
  else{
         opcion('correcto');
  }

  }

  function limpiar(e){
    e.preventDefault();
      formulario.reset();
      formulario_2.reset();
  }

</script>

</body>
</html>