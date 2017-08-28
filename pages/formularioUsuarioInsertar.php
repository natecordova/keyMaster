<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Usuario</title>
	</head>
<body>


<h2>Crear Usuario</h2>
<form id="contact-form" action="usuarioGuardar.php" method= "post">


<p>Nombre: <input type="text" name="nombre" autofocus required/> </p>

<p>Password: <input type="text" name="contrasena" autofocus required/> </p>


<a href="usuarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
