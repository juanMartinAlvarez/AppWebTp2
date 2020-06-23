<head>

</head>

<body>
   <form action="llenarcamposintegrantes.php" method="POST">
      <input type="date" name="fecha" id="fecha">
      <input type="text" name="descripcion" id="descripcion" placeholder="descripcion">
      <input type="text" name="tiempoasignado" id="tiempoasignado" placeholder="tiempo asignado">
      <input type="text" name="integranteasignado" id="integranteasignado" placeholder="integrante asignado">
      <input type="text" name="observaciones" id="observaciones" placeholder="observaciones">
      <input type="submit" value="Agregar pendiente">
   </form>

   <div id="tareas">
      <?php

      $s = "localhost";
      $u = "root";
      $p = "";
      $db = "jueves";

      $conexion = new mysqli($s, $u, $p, $db);

      if ($conexion->connect_errno) {

         return die("No conectado :" . $conexion->connect_error);
      }

      if (isset($_POST['descripcion'])) {
         $date = $_POST['fecha'];
         $descripcion = $_POST['descripcion'];
         $tiempoasignado = $_POST['tiempoasignado'];
         $integranteasignado = $_POST['integranteasignado'];
         $observaciones = $_POST['observaciones'];

         $sql = "INSERT INTO tareas(fecha,descripcion,tiempoasignado,integranteasignado,observaciones)
                              VALUES ('$date','$descripcion','$tiempoasignado','$integranteasignado','$observaciones')";

         if ($conexion->query($sql) === true) {
            echo '<div><form action=""><input type="checkbox">' . $date . '</form></div>';
            echo '<div><form action=""><input type="checkbox">' . $descripcion . '</form></div>';
            echo '<div><form action=""><input type="checkbox">' . $tiempoasignado . '</form></div>';
            echo '<div><form action=""><input type="checkbox">' . $integranteasignado . '</form></div>';
            echo '<div><form action=""><input type="checkbox">' . $observaciones . '</form></div>';
         } else {
            die("Error al insertar datos:" . $conexion->error);
         }
      }else{
         return "faltaba una descripcion"; 
      }

      ?>
   </div>
</body>