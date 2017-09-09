<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Clase</title>
	</head>
<body>


<h2>Crear Usuario</h2>
<form id="contact-form" action="claseGuardar.php" method= "post">

<p>Id Clase: <input type="text" name="id" autofocus required/> </p>
<p>Id profesor: <input type="text" name="profesor" autofocus required/> </p>


<a href="claseAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>