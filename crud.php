<?php

require_once("instanciadeconexion.php");
require_once("administrarTarea.php");

function borrarTarea($idtareaborrar)
{
  $conexion = conectar();


  $sql = "DELETE FROM tareas where ID=$idtareaborrar";
  if ($conexion->query($sql) === true) {
    echo "Borrado exitosamente";
  } else {
    echo die("Error al borrar " . $conexion->error);
  }
}

function obtenerTareas()
{

  $conexion = conectar();


  $sql = 'SELECT * FROM tareas';
  if ($conexion->query($sql)) {
    $result = $conexion->query($sql);
    $listadetareas = [];

    if ($result->num_rows > 0) {
      //muestra los resultados en filas
      while ($row = $result->fetch_assoc()) {
        $myTarea = new Tarea();
        $myTarea->setId($row['id']);
        $myTarea->setFecha($row['fecha']);
        $myTarea->setdescripcion($row['descripcion']);
        $myTarea->settiempoasignado($row['tiempoasignado']);
        $myTarea->setintegranteasignado($row['integranteasignado']);
        $myTarea->setobservaciones($row['observaciones']);
        $listadetareas[]=$myTarea;
        //echo "<br> id: " . $row["id"] . " - Fecha: " . $row["fecha"] . " || Descripcion: " . $row["descripcion"] . " || Tiempo asignado: " . $row["tiempoasignado"] . " || Integrante asignado: " . $row["integranteasignado"] . " || Observaciones: " . $row["observaciones"] . " <br>";
      }
      return $listadetareas;
    } else {
      echo "No hay tareas";
    }
    
    /*
    foreach($result->fetch_all() as $tarea){
      $myTarea = new Tarea();
      $myTarea->setId($tarea['id']);
      $myTarea->setFecha($tarea['fecha']);
      $myTarea->setdescripcion($tarea['descripcion']);
      $myTarea->settiempoasignado($tarea['tiempoasignado']);
      $myTarea->setintegranteasignado($tarea['integranteasignado']);
      $myTarea->setobservaciones($tarea['observaciones']);
      $listadetareas[]=$myTarea;
    }
    */
    return $listadetareas;

  } else {
    echo die("Error al obtener tareas: " . $conexion->connect_error);
  }

  $conexion->close();
}

function modificarTareas($value, $id){
    $conexion = conectar();
  
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
