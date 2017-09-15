<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Curso Alumno</title>
	</head>
    <body>
        <aside>
            <?php
            $id=$_GET["id"];
            include_once("CACollector.php");
            $DemoCollectorObj= new cursoAlumnoCollector();
            $DemoCollectorObj->deleteDemo($id);
            echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
            ?>
            
            <div class="text-fieldsl">
                <a href='cursoAlumnoAdmin.php'>Volver al inicio</a>                                    
            </div>
        </aside>
    </body>
</html>