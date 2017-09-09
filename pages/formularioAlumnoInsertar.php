<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Alumno</title>
	</head>
<body>


<h2>Crear Alumno</h2>
<form id="contact-form" action="alumnoGuardar.php" method= "post">


<p>fk_id_usuario: <input type="text" name="fk_id_usuario" autofocus required/> </p>



<a href="alumnoAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
