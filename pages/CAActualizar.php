<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Nivel</title>
	</head>
    <body>
        <aside>
            
            <?php
            $iddemo = $_POST["iddemo"];
            $curso = $_POST["curso"];
            echo "Edicion en proceso . . . . </br>";
            include_once("CACollector.php");
            $DemoCollectorObj= new cursoAlumnoCollector();
            $DemoCollectorObj->updateDemo($iddemo, $curso);
            
            ?>
            
            <div class="text-fieldsl">
                <a href='cursoAlumnoAdmin.php'>Volver al inicio</a>                                    
            </div>
        </aside>
    </body>
</html>