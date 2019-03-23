<?php

 class objetos_usuarios{

		static function validar($nombre_1,$usuario_1,$contra,$contra_2){
    $errores = 0;

    if (empty($nombre_1) || empty($usuario_1) || empty($contra) || empty($contra_2) ) {
        echo  "<script type='text/javascript'>
                          alert('Por favor rellene todos los campos correctamente.');
                      </script>";
            $errores = $errores +1;             
     }else{
          try{
             $conexion = new PDO("mysql:host=localhost;dbname=interprete_tech","root","");
          }catch(PDOException $e){
             echo "Error".$e->getMessage();
          }
          $consulta = $conexion->prepare('SELECT * FROM cuentas_usuarios WHERE usuario = :usuario LIMIT 1');
          $consulta->execute(array(':usuario' => $usuario_1));
          $resultado = $consulta->fetch();

          if ($resultado != false) {
              echo "<script type='text/javascript'>
                            alert('El usuario ya existe. Por favor digita otro.');
                            </script>";
              $errores = $errores +1;              
          }

          if ($contra_2 != $contra) {
            echo "<script type='text/javascript'>
                          alert('Las contraseñas no coinciden.');
                        </script>";
             $errores = $errores +1;
          }
     }
     return $errores;
}



  static function registrar_usuario($nombre_1,$usuario_1,$contra,$contra_2){

    try{
             $conexion = new PDO("mysql:host=localhost;dbname=interprete_tech","root","");
          }catch(PDOException $e){
             echo "Error".$e->getMessage();
          }
   
         $consulta = $conexion->prepare('INSERT INTO cuentas_usuarios (nrocuentas, nombre, usuario, contrasena, institucion, carrera, foto_perfil, estado, apellidos, fecha_nacimiento, sexo) VALUES (null, :nombre, :usuario, :contrasena, :institucion, :carrera, :foto_perfil, :estado, :apellidos, :fecha_nacimiento, :sexo)');
         $consulta->execute(array(
          ':nombre' => $nombre_1,
          ':usuario' => $usuario_1,
          ':contrasena' => $contra,
          ':institucion' => 'No Especificado',
          ':carrera' => 'No Especificado',
          ':foto_perfil' => '../img/jovenes.jpg',
          ':estado' => 'No Especificado',
          ':apellidos' => 'No Especificado',
          ':fecha_nacimiento' => 'No Especificado',
          ':sexo' => 'No Especificado'
         ));

   }


   static function acceder($usuario_login,$contra_login){

    try{
     $conexion_login = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
    }catch(PDOException $e){ 
       echo "error".$e->getMessage();
    }

    $consulta_login = $conexion_login->prepare('SELECT * FROM cuentas_usuarios WHERE usuario = :usuario AND contrasena = :contrasena');

    $consulta_login->execute(array(
     ':usuario' => $usuario_login,
     ':contrasena' => $contra_login
    ));

    $resultado_login = $consulta_login->fetch();
     
    if ($resultado_login !== false) {
        $_SESSION['usuario'] = $usuario_login;
        $_SESSION['numero_cuenta'] = $resultado_login['nrocuentas'];

            if (isset($_SESSION['usuario'])) {
                header('location: perfil/perfil.php');
            }else{
                header('location: iniciar sesion.php');
            }
    }else{
     return $errores_login = "<li>Datos Incorrectos</li>";
    }
}

static function buscar_principal($palabra){
    $con = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
        $consulta = $con->prepare("SELECT * FROM articulos WHERE titulo LIKE :titulo");
        $consulta->execute(array(':titulo' => "%$palabra%"));
        $resultado_2 = $consulta->fetchAll();
        return $resultado_2; 
}

static function buscar_usuario($palabra){
  $con = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
    $resultado_3 = $con->prepare('SELECT * FROM publicaciones WHERE titulo LIKE :titulo');
       $resultado_3->execute(array(':titulo' => "%$palabra%"));
       $resultado_total_3 = $resultado_3->fetchAll();
       return $resultado_total_3;
}

static function peticion_usuario($nombre,$apellido,$correo,$tema,$descripcion){
  
      if (empty($nombre) == 1 || empty($apellido) == 1 || empty($correo) == 1 || empty($tema) == 1 || empty($descripcion) == 1) {
        //echo "por favor rellenar todo los campos";
     }else{
         $con = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
         $guardar = $con->prepare("INSERT INTO peticion_usuario SET nombre=:nombre, apellido=:apellido, correo=:correo, tema=:tema, descripcion=:descripcion");
         $guardar->execute(array(
          'nombre' => $nombre,
          'apellido' => $apellido,
          'correo' => $correo,
          'tema' => $tema,
          'descripcion' => $descripcion
         ));
     }

}

  static function mostrar_tutoriales($pagina,$conexion_4,$PostPorPagina){
          
          /*consulta a la base de datos*/
          $inicio = ($pagina > 1) ? ($pagina * $PostPorPagina - $PostPorPagina) : 0; 
          $Conocimientos = $conexion_4->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM conocimientos ORDER BY nriConocimiento DESC LIMIT 10");

          $Conocimientos->execute();
          $Conocimientos = $Conocimientos->fetchall();
          return $Conocimientos;
          /*redireccionar si la pagina no existe*/
          if (!$Conocimientos) {
          header('location: inicio.php');
          }
        }

 static function recomendado_articulo(){
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
    }catch(PDOException $e){
        echo "error" . $e->getMessage();
    }
  $recomendado = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM recomendado ORDER BY nroRecomendado DESC LIMIT 3");

  $recomendado->execute();
  $recomendado = $recomendado->fetchall();
  return $recomendado;
  }

    static function articulos_inicio($conexion,$pagina,$PostPorPagina){
      
          $inicio = ($pagina > 1) ? ($pagina * $PostPorPagina - $PostPorPagina) : 0; 
          $articulo = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY nriArticulo DESC LIMIT $inicio, $PostPorPagina");

          $articulo->execute();
          $articulo = $articulo->fetchall();
          return $articulo;
          /*redireccionar si la pagina no exite*/
        if (!$articulo) {
          header('location: inicio.php');
          }
    }


    static function mostrar_paginacion($conexion,$PostPorPagina){
          
          $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
          $totalArticulos = $totalArticulos->fetch()['total'];
          /*validar paginacion*/
          $numeroPagina = ceil($totalArticulos / $PostPorPagina);
          return $numeroPagina;
      }


      static function mostrar_publicacines_usuario($conexion_3,$pagina,$PostPorPagina){

        /*consulta a la base de datos*/
        $inicio = ($pagina > 1) ? ($pagina * $PostPorPagina - $PostPorPagina) : 0; 
        $publico = $conexion_3->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM publicaciones ORDER BY nroPublicaciones DESC LIMIT $inicio, $PostPorPagina");

        $publico->execute();
        $publico = $publico->fetchall();
          return $publico;
        /*redireccionar si la pagina no exite*/
        if (!$publico) {
          header('location: inicio.php');
        }
      }

}


?>