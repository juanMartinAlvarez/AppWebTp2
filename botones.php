
<?php
require_once('crud.php');

$listaTareas = obtenerTareas();
?>

<?php
if(isset($_GET['obtenerTareas'])) foreach($listaTareas as $tarea) {?>      
<tr>
	<td><?php echo $tarea->getid()?></td>
	<td><?php echo $tarea->getfecha() ?> </td>
	<td><?php echo $tarea->getdescripcion() ?> </td>
	<td><?php echo $tarea->gettiempoasignado() ?> </td>
	<td><?php echo $tarea->getintegranteasignado() ?> </td>
	<td><?php echo $tarea->getidintegranteasignado() ?> </td>
	<td><?php echo $tarea->getobservaciones() ?> </td>
</tr>
<?php 
} ?>

<?php
  if (isset($_POST['idintegrante'])) {
	$idintegrante = $_POST['idintegrante'];
	$idtareamodif = $_POST['idtareamodif'];

	echo modificarTareas($idintegrante, $idtareamodif);
  }
?>
<?php
  if (isset($_POST['idtareaborrar'])) {
	$idtareaborrar = $_POST['idtareaborrar'];

	echo borrarTarea($idtareaborrar);

  }
?>

<!DOCTYPE html> 
<html> 
<head>
    <link rel="stylesheet" href="css/estilos.css">
</head>
	

<body>
  
  <!-- mostrar las tareas existentes -->
  
  <h2>
    Lista de tareas actualmente en la base de datos
  </h2>
    <a href="llenarcamposintegrantes.php">crear tarea </a><br> <br>

    <a href="?obtenerTareas">obtener tareas </a> <br> <br>

    
    <h2>modificar tareas</h2>

    <form action="botones.php" method="POST">
      <input type="text" name="idintegrante" id="idintegrante" placeholder="id del integrante">
      <input type="text" name="idtareamodif" id="idtareamodif" placeholder="id de la tarea que queres asignarle">
      <input type="submit" name="submit1" value="Modificar tarea">

      <div id="modiftareas">

      </div>
    </form>
    <br> <br>

    <h2>borrar tarea</h2>
    
    <form action="botones.php" method="POST">
      <input type="text" name="idtareaborrar" id="idtareaborrar" placeholder="id de la tarea a borrar">
      <input type="submit" name="submit2" value="Borrar tarea">

      <div id="borrartareas">

      </div>

    <br> <br>

    

     
</body>
</html>