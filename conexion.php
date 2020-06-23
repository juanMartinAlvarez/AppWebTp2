<?php

function conectar(){


 $s = "localhost";
 $u = "root";
 $p = "";
 $db = "jueves";

 $conexion = new mysqli($s,$u,$p, $db);


 /* db ya creada, comentando codigo
 $sql = "CREATE DATABASE jueves";
   if($conexion->query($sql) === true){
      echo "Base de datos creada correctamente...";
   }else{
      die("Error al crear base de datos: " . $conexion->error);
   }
   */ 
/*
   $sql = "CREATE TABLE integrantes(
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(20) NOT NULL,
      apellido VARCHAR(20) NOT NULL
   )";

   if($conexion->query($sql) === true){
      echo "La tabla se creo correctamente...";

   }else{
      die("Error, no se pudo crear la tabla: " . $conexion->error);
   }
   */
/* tabla ya creada.. comentando..
  $sql = "CREATE TABLE tareas(
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
*/
}
?>