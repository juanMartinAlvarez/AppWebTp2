 
<head>
  
</head>
<body>
  

<a href="?conectar">conectar</a>
<a href="botones.php">botones</a>
</body>
  <?php
   include("conexion.php");


    if(isset($_GET['conectar'])) echo conectar();

  ?>
