<?php $titulo = 'Sobre Mi' ?>
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
.todo{
  height: 650px;
}
.texto{
  top: 240px;
}
#redes{
  width: 120px;
  height: 40px;
  position: relative;
  top: -15px;
  left: 150px;
}
#facebook:before{
  content: '\f125';
  position: absolute;
  font-family: 'flaticon';
  font-size: 1.5em;
  color: #000;
}
#instagram:before{
  content: '\f134';
  position: absolute;
  font-family: 'flaticon';
  font-size: 1.5em;
  left: 42px;
  color: #000;
  top: 1px;
}
#youtube:before{
  content: '\f180';
  position: absolute;
  font-family: 'flaticon';
  font-size: 1.8em;
  left: 85px;
  color: #000;
  top: -1px;
}
#sobre{
  position: relative;
  top: 220px;
}

@media screen and (min-width: 544px){
  #redes{
    left: 210px;
  }
}
@media screen and (min-width: 768px){
  #formulario{
    left: -10px;
  }
  .texto{
    top: 15px;
  }
  #redes{
    left: 280px;
  }
  #sobre{
  top: 0px;
}
}
@media screen and (min-width: 992px){
  .texto{
    left: -0px;
  }
  #redes{
    left: 380px;
  }
  .todo{
  height: 665px;
  }
}

</style>
<section class="container todo">

<div class="row">
	 <div class="col">
	 			<div id="particles-js"></div>
	 	<!--otra fila-->
				<div id="foto"><img src="img/andres-1.jpg"></div>
	 </div>
</div>

<div class="row perfil">
	 <div class="col-12 col-md-6 justify-content-center p-4">
	 	<h3 class="text-center nombre">Andres Coello</h3>
	 	<hr style="height: 1px; background-color: #cdcdcd;" />
	 	<p class="text-center">Nombre</p>
	    <h3 class="text-center profecion ml-4">Desarrollo de Software</h3>
      <hr style="height: 1px; background-color: #cdcdcd;"/>
	    <p class="text-center">Estudiante</p>
	 </div>
	 <div class="col-12 col-md-6 justify-content-center p-4">
	 	<h3 class="text-center cuidad">Babahoyo - Los Rios</h3>
	 	<hr style="height: 1px; background-color: #cdcdcd;"/>
	 	<p class="text-center">Ciudad</p>
	 	<h3 class="text-center">Instituto Tecnologico Superior Babahoyo</h3>
	 	<hr style="height: 1px; background-color: #cdcdcd;"/>
	 	<p class="text-center">Institucion</p>
	 </div>

   <div class="row red">
        <div class="col-12 col-md-2 redes">
          <div id="redes">
              <a href="https://www.facebook.com/andres.coellogoyes" target="_blank"><div id="facebook"></div></a>
              <a href="https://www.instagram.com/coellogoyes/?hl=es-la" target="_blank"><div id="instagram"></div></a>
              <a href="https://www.youtube.com/channel/UCHWsGkCRqlNKnoxYkC_ZRxQ/featured" target="_blank"><div id="youtube"></div></a>
              <a href="https://github.com/GandresCoello18" target="_blank"><img src="png/github-sign.png" width="25" height="25" style="position: relative; left: 130px; top: 5px;"></a>
          </div>
        </div>
   </div>
</div>
</section>
<br/>
<section class="container mt-md-3 mt-5 texto">
	 <div class="row">
	 	  <div class="col sobre_mi p-3">
	 	  	   <p><span>S</span>oy un joven adolecente con ganas de adquirir conocimientos intelectuales desempañados en el área del desarrollo de sistemas e informáticas. He alcanzado tener algunas habilidades en estas profesiones y me gustaría que muchas personas también se beneficien de aquello así como lo sigo haciendo yo. Algo que me ayuda muchísimo a mí, son los artículos e informaciones que encuentras en internet prácticamente se encuentra un sin número de cosas y sobre cualquier cosa, la mayoría de las personas poseemos esta gran herramienta pero <strong>¿Sabes Utilizarla?</strong> En mi opinión 'internet' es una gran fuente de información, conocimiento, y sobre todo ayuda para los estudios.</p>
	 	  	   <p> Es por eso que este sitio fue desarrollado con el fin de beneficiar a la comunidad, publicando artículos que te pueden interesar o que puedes aprender algo nuevo. Si te interesa algún Tema pero no está disponible en el sitio puedes contactarte conmigo mediante un <a href="#" data-toggle="modal" data-target="#myModal">Mensaje hacer click</a> para publicarlo incluido tu nombre y apellido para que la comunidad lo vea.
	 	  </div>
	 </div>
</section>

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
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formulario">
            <h3 class="text-center p-3 mt-2">Interprete - Tech</h3>
            <div id="alertas"></div>
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
                        </div>
                    </div>
          </form>
            </div>
       </div>
</div>
<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
            </div>
            </div>
          </div>

<!--pie de pagina-->
<?php include('pie.php'); ?>


<script src="js/particles_original.js"></script>

<script type="text/javascript">
	particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);
</script>