<head>
	<!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Estilos css -->
	<link rel="stylesheet" href="css/bootstrap.css" media="all" >
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

	<title>Asignación de tareas</title>
</head>

<body>
   <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
              <span class="fa fa-user-circle"></span>
              <h2> TP 2 Asignación de tareas </h2>
              <h2>&nbsp;</h2>
              <h2>DESARROLLO WEB </h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-university">&nbsp;IFTS 16</span> </p>
			</section>
        </section>
		
 		<section>
 		  <section class="info_title_integrantes">
             <h2> Integrantes</h2>
          </section>
		  
		  <section class="info_title_integrantes">
			<p ></p>
			<table class="table">
			  <thead>
				<tr>
				  <th scope="col">#ID</th>
				  <th scope="col">Nombre</th>
				  <th scope="col">Apellido</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Lucas Nahuel</td>
				  <td>Caruso</td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Juan Martin</td>
				  <td>Alvarez Falfaro</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Fernandol</td>
				  <td>Lamas</td>
				</tr> 
			  </tbody>
			</table> 

			
			<button class="btn btn-primary btn-lg" onclick="location.href='?conectar'" >conectar</button>
			<button class="btn btn-primary btn-lg" onclick="location.href='botones.php'" >botones</button>
 		  </section>

	   </section>
    </section>


</body>

  <?php
   include("conexion.php");


    if(isset($_GET['conectar'])) echo conectar();

  ?>
