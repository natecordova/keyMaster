<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Profesor</title>
	</head>
    <body>
        <aside>
            
            <?php
            $iddemo = $_POST["iddemo"];
            $usuario = $_POST["usuario"];
            echo "Edicion en proceso . . . . </br>";
            include_once("ProfesorCollector.php");
            $DemoCollectorObj= new ProfesorCollector();
            $DemoCollectorObj->updateDemo($iddemo, $usuario);
            
            ?>
            
            <div class="text-fieldsl">
                <a href='profesorAdmin.php'>Volver al inicio</a>                                    
            </div>
        </aside>
    </body>
</html>