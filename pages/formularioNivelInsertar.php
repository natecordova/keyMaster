<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Nivel</title>
	</head>
<body>


<h2>Crear Nivel</h2>
<form id="contact-form" action="nivelGuardar.php" method= "post">


<p>Nombre: <input type="text" name="nombre" autofocus required/> </p>

<a href="nivelAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
