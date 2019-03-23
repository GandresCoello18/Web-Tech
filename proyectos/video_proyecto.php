<?php
try{
  $conexion_4 = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
}catch(PDOException $e){
  echo "error" . $e->getMessage();
  die();
}         
          /*consulta a la base de datos*/
          $Conocimientos = $conexion_4->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM conocimientos WHERE titulo=:Titulo");
          $Conocimientos->execute(array(':Titulo' => $Titulo));
          $Conocimientos = $Conocimientos->fetchall();

if (isset($_POST['mio'])) {
  $carpeta = '../../documentos_usuario/';
    
    $Descripcion_arch = $_POST['desc_arch'];
    $nombre_del_documento = $_FILES['subir_documento']['name'];
    $tamano_del_documento = $_FILES['subir_documento']['size'];
    $temporal = $_FILES['subir_documento']['tmp_name'];
    $obtener_archivo_video = $_POST['archivo_video'];

    $carpeta = '../../documentos_usuario/';

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