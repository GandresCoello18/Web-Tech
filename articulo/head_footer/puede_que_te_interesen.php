<?php

try{
        $conexion = new PDO('mysql:host=localhost;dbname=interprete_tech', 'root','');
    }catch(PDOException $e){
        echo "error" . $e->getMessage();
    }
  $recomendado = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM recomendado ORDER BY nroRecomendado DESC LIMIT 3");

  $recomendado->execute();
  $recomendado = $recomendado->fetchall();
  
?>