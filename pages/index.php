<?php
session_start();
?>
<?php
echo 'Bienvenido, ';
if (isset($_SESSION['k_username'])) {
 echo '<b>'.$_SESSION['k_username'].'</b>.';
 echo '<p><a href="logout.php">Logout</a></p>';
 
  echo '<a href="usuarioAdmin.php">Administrar Usuarios</a></p>';
   echo '<a href="rolAdmin.php">Administrar Roles</a></p>';
   echo '<a href="tipo_cancelacionAdmin.php">Administrar Tipo de Cancelacion</a></p>';
   echo '<a href="nivelAdmin.php">Administrar Niveles</a></p>';
   echo '<a href="horarioAdmin.php">Administrar Horarios</a></p>';
   echo '<a href="claseAdmin.php">Administrar Clases</a></p>';
   echo '<a href="alumnoAdmin.php">Administrar Alumnos</a></p>';
 
}else{
 echo '<p><a href="login.php">Login</a></p>';
 
}
?>
