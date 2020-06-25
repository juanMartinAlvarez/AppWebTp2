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
      nombre VARCHAR(50) NOT NULL,
      edad INT(11) NOT NULL
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
   integranteasignado INT(11),
   observaciones VARCHAR(40) NOT NULL
)";

if($conexion->query($sql) === true){
   echo "La tabla se creo correctamente...";

}else{
   die("Error, no se pudo crear la tabla: " . $conexion->error);
}
 
   $sql = "INSERT INTO `integrantes`(`nombre`, `edad`) VALUES ('Lucas Nahuel Caruso',26)";
   if($conexion->query($sql) === true){
      echo "Nuevo integrante añadido...";
   }else{
      die("Error al añadir integrante: " . $conexion->error);
   }

   $sql = "INSERT INTO `integrantes`(`nombre`, `edad`) VALUES ('Juan Martin Alvarez Falfaro',36)";
   if($conexion->query($sql) === true){
      echo "Nuevo integrante añadido...";
   }else{
      die("Error al añadir integrante: " . $conexion->error);
   }

   $sql = "INSERT INTO `integrantes`(`nombre`, `edad`) VALUES ('Fernando Lamas',21)";
   if($conexion->query($sql) === true){
      echo "Nuevo integrante añadido...";
   }else{
      die("Error al añadir integrante: " . $conexion->error);
   }
   
   $sql=  "INSERT INTO `tareas`(`fecha`, `descripcion`, `tiempoasignado`, `integranteasignado`, `observaciones`) VALUES ('2020-06-25','Armar la base','2 horas',1,'Sin base no funciona')";
   if($conexion->query($sql) === true){
      echo "Nuevo tarea añadida...";
   }else{
      die("Error al añadir tarea: " . $conexion->error);
   }
     
   $sql=  "INSERT INTO `tareas`(`fecha`, `descripcion`, `tiempoasignado`, `integranteasignado`, `observaciones`) VALUES ('2020-06-25','Armar la Logica','7 horas',3,'Sin Logica no hay proyecto')";
   if($conexion->query($sql) === true){
      echo "Nuevo tarea añadida...";
   }else{
      die("Error al añadir tarea: " . $conexion->error);
   }

   $sql=  "INSERT INTO `tareas`(`fecha`, `descripcion`, `tiempoasignado`, `integranteasignado`, `observaciones`) VALUES (2020-06-25,'Armar el estilo','5 horas',2,'Para que sea amigable al usuario')";
   if($conexion->query($sql) === true){
      return "Nuevo tarea añadida...";
   }else{
      return die("Error al añadir tarea: " . $conexion->error);
   }
}
