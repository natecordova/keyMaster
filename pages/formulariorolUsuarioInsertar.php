<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Rol Usuario</title>
	</head>
<body>


<h2>Crear Rol Usuario</h2>
<form id="contact-form" action="rolUsuarioGuardar.php" method= "post">


<p>Detalle: <input type="text" name="detalle" autofocus required/> </p>

<p>Id usuario: <input type="text" name="id_usuario" autofocus required/> </p>
<p>Id rol: <input type="text" name="id_rol" autofocus required/> </p>


<a href="rolUsuarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
