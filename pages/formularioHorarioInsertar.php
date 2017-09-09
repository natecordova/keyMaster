<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Editar horario</title>
	</head>
<body>


<h2>Crear horario</h2>
<form id="contact-form" action="horarioGuardar.php" method= "post">

<p>ID: <input type="text" name="id_horario" autofocus required/> </p>

<p>Hora Inicio: <input type="text" name="hora_inicio" autofocus required/> </p>

<p>Hora Final: <input type="text" name="hora_final" autofocus required/> </p>

<p>Curso: <input type="text" name="id_curso_fk" autofocus required/> </p>

<a href="horarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</form>

</body>
</html>
