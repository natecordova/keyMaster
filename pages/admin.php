<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <!-- <link href="../css/main.css" rel='stylesheet' type='text/css'  >   -->
    <link href="../css/admin.css" rel='stylesheet' type='text/css'  >
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
   

	</head>
	<body>

<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="admin.php">KeymasterAdmin</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href='logout.php'><span class="glyphicon glyphicon-user"></span> Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>



<?php



echo "<h2 class='texcen'>Bienvenido Usuario Administrador:(  ";
if (isset($_SESSION['MiSession'])) {
 echo '<b>'.$_SESSION['MiSession']."</b> ) Seleccione una tabla </h2>";
// echo '<p><a href="logout.php">Logout</a></p>';
 /*
  echo '<a href="usuarioAdmin.php">Administrar Usuarios</a></p>';
   echo '<a href="rolAdmin.php">Administrar Roles</a></p>';
   echo '<a href="tipo_cancelacionAdmin.php">Administrar Tipo de Cancelacion</a></p>';
   echo '<a href="nivelAdmin.php">Administrar Niveles</a></p>';
   echo '<a href="horarioAdmin.php">Administrar Horarios</a></p>';
   echo '<a href="claseAdmin.php">Administrar Clases</a></p>';
   echo '<a href="alumnoAdmin.php">Administrar Alumnos</a></p>';
   */
   
   ?>


<select class="selectpicker" name="Tablas" onchange="location = this.value"> 
<option disabled="disabled" selected>Selecciona una opcion</option> 

<option value="usuarioAdmin.php">Usuarios</option>  
<option value="rolAdmin.php">Roles</option>  
<option value="tipo_cancelacionAdmin.php">Tipo de cancelacion</option>  
<option value="nivelAdmin.php">Niveles</option>
<option value="horarioAdmin.php">Horarios</option>  
<option value="claseAdmin.php">Clases</option>  
<option value="alumnoAdmin.php">Alumnos</option>  

     

   <?php
   
   
   
   
 
}else{
 echo '<p><a href="login.php">Login</a></p>';
 
}
?>







</body>
</html>