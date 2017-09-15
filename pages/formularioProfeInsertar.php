<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset ="utf-8">
        <title> Formulario Insertar Profesor</title>
    </head>
    <body>
        <h2>Crear Nivel</h2>
        <form id="contact-form" action="profesorGuardar.php" method= "post">
            <p>Usuario: <input type="text" name="usuario" autofocus required/></p>
            <a href="profesorAdmin.php">Cancelar</a>
            <input type="submit" id="submit_save" class="main-button" value="Guardar"/>
        </form>
    </body>
</html>