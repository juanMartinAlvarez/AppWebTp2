<?php

function borrarTarea($idtareaborrar)
{
  $s = "localhost";
  $u = "root";
  $p = "";
  $db = "jueves";

  $conexion = new mysqli($s, $u, $p, $db);


  $sql = "DELETE FROM tareas where ID=$idtareaborrar";
  if ($conexion->query($sql) === true) {
    echo "Borrado exitosamente";
  } else {
    echo die("Error al borrar " . $conexion->error);
  }
}

function obtenerTareas()
{

  $s = "localhost";
  $u = "root";
  $p = "";
  $db = "jueves";

  $conexion = new mysqli($s, $u, $p, $db);
  $sql = 'SELECT * FROM tareas';
  if ($conexion->query($sql)) {
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
      //muestra los resultados en filas
      while ($row = $result->fetch_assoc()) {
        echo "<br> id: " . $row["id"] . " - Fecha: " . $row["fecha"] . " || Descripcion: " . $row["descripcion"] . " || Tiempo asignado: " . $row["tiempoasignado"] . " || Integrante asignado: " . $row["integranteasignado"] . " || Observaciones: " . $row["observaciones"] . " <br>";
      }
    } else {
      echo "No hay tareas";
    }
  } else {
    echo die("Error al obtener tareas: " . $conexion->connect_error);
  }

  $conexion->close();
}

function modificarTareas($value, $id){
     $s = "localhost";
     $u = "root";
     $p = "";
     $db = "jueves";
    
    $conexion = new mysqli($s, $u, $p, $db);
  
    //en el $value va el id del integrante que le queres asignar la tarea, por ejemplo si lucas es 2 le pongo 2
    //y en el where $id, el id es el de la tarea que queres asignar
    //select cambiar por update
    $sql = 'UPDATE tareas SET integranteasignado = \''.$value.'\' WHERE ID='.$id;
    //"UPDATE tareas set integranteasignado = 'Lucas' where ID=2";
    if ($conexion->query($sql)) {
      echo "Cambio realizado exitosamente";
    } else {
      echo die("Error al actualizar la tarea: " . $conexion->connect_error);
    }
}
