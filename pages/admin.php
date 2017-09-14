<?php
session_start();
?>
<?php
echo 'Bienvenido a la parte administrativa,  ';
if (isset($_SESSION['MiSession'])) {
 echo '<b>'.$_SESSION['MiSession'].'</b>.  Seleccione una tabla ';
 echo '<p><a href="logout.php">Logout</a></p>';
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



<select name="Tablas" onchange="location = this.value"> 
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
