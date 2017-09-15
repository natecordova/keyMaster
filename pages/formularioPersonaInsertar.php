<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Persona</title>
	</head>
<body>


<h2>Crear Persona</h2>
<form id="contact-form" action="PersonaGuardar.php" method= "post">


<p>Nombre: <input type="text" name="nombre" autofocus required/> </p>

<p>Apellido: <input type="text" name="apellido" autofocus required/> </p>
<p>Direccion: <input type="text" name="direccion" autofocus required/> </p>
<p>Telefono: <input type="text" name="telefono" autofocus required/> </p>

<a href="PersonaAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
