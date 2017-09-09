<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar Tipo Cancelacion</title>
	</head>
<body>


<h2>Crear Tipo Cancelacion</h2>
<form id="contact-form" action="tipo_cancelacionGuardar.php" method= "post">


<p>Detalle: <input type="text" name="detalle" autofocus required/> </p>

<a href="tipo_cancelacionAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
