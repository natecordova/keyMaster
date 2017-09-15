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
            $detalle=$_POST["detalle"];
            $profesor=$_POST["profesor"];
            $nivel=$_POST["nivel"];
            echo "Edicion en proceso . . . . </br>";
            include_once("CursoCollector.php");
            $DemoCollectorObj= new CursoCollector();
            $DemoCollectorObj->createDemo($detalle, $profesor, $nivel);
            ?>
            <div class="text-fieldsl">
                <a href='cursoAdmin.php'>Volver al inicio</a>                                    
            </div>
        </aside>
    </body>
</html>
