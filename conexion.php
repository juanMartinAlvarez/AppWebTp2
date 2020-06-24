<?php

function conectar(){


 $s = "localhost";
 $u = "root";
 $p = "";
 $db = "jueves";

 $conexion = new mysqli($s,$u,$p);

 $sql = "CREATE DATABASE IF NOT EXISTS $db";
   if($conexion->query($sql) === true){
      echo "Base de datos creada correctamente...";
   }else{
      die("Error al crear base de datos: " . $conexion->error);
   }

  $conexion = new mysqli($s,$u,$p,$db);

   $sql = "CREATE TABLE IF NOT EXISTS integrantes(
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(20) NOT NULL,
      apellido VARCHAR(20) NOT NULL
   )";

   if($conexion->query($sql) === true){
      echo "La tabla se creo correctamente...";

   }else{
      die("Error, no se pudo crear la tabla: " . $conexion->error);
   }


  $sql = "CREATE TABLE IF NOT EXISTS tareas(
   id INT(11) AUTO_INCREMENT PRIMARY KEY,
   fecha DATE NOT NULL,
   descripcion VARCHAR(20) NOT NULL,
   tiempoasignado VARCHAR(20) NOT NULL,
   integranteasignado VARCHAR(20) NOT NULL,
   observaciones VARCHAR(40) NOT NULL
)";

if($conexion->query($sql) === true){
   return "La tabla se creo correctamente...";

}else{
   return die("Error, no se pudo crear la tabla: " . $conexion->error);
}

}
?>
