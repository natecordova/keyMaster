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
        <h2>Crear Curso Alumno</h2>
        <form id="contact-form" action="CAGuardar.php" method= "post">
            <p>Curso: <input type="text" name="curso" autofocus required/></p>
            <a href="cursoAlumnoAdmin.php">Cancelar</a>
            <input type="submit" id="submit_save" class="main-button" value="Guardar"/>
        </form>
    </body>
</html>