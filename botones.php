<!DOCTYPE html> 
<html> 
<head>

</head>
<body>
  
  <!-- mostrar las tareas existentes -->
  

  
  <h2>
    Lista de tareas actualmente en la base de datos
  </h2>
  

    <a href="llenarcamposintegrantes.php">crear tarea </a><br> <br>

    <a href="?obtenerTareas">obtener tareas </a> <br> <br>
    <?php
    include("crud.php");

    if(isset($_GET['obtenerTareas'])) echo obtenerTareas();

    ?>
    
    <h2>modificar tareas</h2>

    <form action="botones.php" method="POST">
      <input type="text" name="idintegrante" id="idintegrante" placeholder="id del integrante">
      <input type="text" name="idtareamodif" id="idtareamodif" placeholder="id de la tarea que queres asignarle">
      <input type="submit" name="submit1" value="Modificar tarea">

      <div id="modiftareas">
        <?php
          if (isset($_POST['idintegrante'])) {
            $idintegrante = $_POST['idintegrante'];
            $idtareamodif = $_POST['idtareamodif'];

            echo modificarTareas($idintegrante, $idtareamodif);

            echo "Tareas existentes";
            echo obtenerTareas();
          }
        ?>

      </div>
    </form>
    <br> <br>

    <h2>borrar tarea</h2>
    
    <form action="botones.php" method="POST">
      <input type="text" name="idtareaborrar" id="idtareaborrar" placeholder="id de la tarea a borrar">
      <input type="submit" name="submit2" value="Borrar tarea">

      <div id="borrartareas">
      <?php
          if (isset($_POST['idtareaborrar'])) {
            $idtareaborrar = $_POST['idtareaborrar'];

            echo borrarTarea($idtareaborrar);

            echo "Tareas existentes";
            echo obtenerTareas();
          }
        ?>
      </div>

    <br> <br>

    

     
</body>
</html>