<style type="text/css">
#bordes{
    width: 110px;
    height: 100px;
    position: absolute;
    left: -10px;
    overflow: ;
    z-index: 99999999999;
    transform: scale(0.5);
    top: -25px;
    border-radius: 50%;
    background-image: url('../../img/logo-wt.png');
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
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
  font-family: 'Share Tech Mono', monospace;
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
                <li><a href="../../sobre_mi.php" id="vision">Quien Soy</a></li>
                <li><a href="../../sobre_nosotros.php" id="sobre_nosotros">Quienes somos</a></li>
              </ul>
             </div>

            </div>
            <div class="col-12 col-md-6 justify-content-center d-flex">
                 
               <div id="informacion-2">  
                 <b class="p-3">Publicaciones</b>
                 <ul>
                  <li><a href="../../quieres_publicar.php" id="publicar">Nuevo Tema</a></li>
                  <li><a href="#" id="contacto">Contacto</a></li>
                 </ul>
              </div>   

            </div>
       </div>

     <div class="row mt-4">
          <div class="col-12 col-md-4">
            <div id="dat">  
            <ul>    
              <li>

                <div id="bordes"></div></li>

              <li><span id="espacio">|</span></li>
              <li><h3 id="local" class="m-3" style="top: -113px;">Web-Tech</h3></li>
            </ul>
           </div>
          </div>
          <div class="col-12 col-md-4">
            <h5 class="text-center descarga mt-md-5"><a href="../../progreso_estudio" target="_blanck">Descarga la APK: Iterprete-Tech ..!</a></h5>
          </div>
     </div>
</footer>

<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/tether.min.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/nuevo_file.js"></script>
<script type="text/javascript">
  $("#menu").click(function(){
  $("#navegacion-cell").toggle("fast");
})

$("#cerrar").click(function(){
   $("#navegacion-cell").toggle("fast");  
})
</script>

</body>
</html>