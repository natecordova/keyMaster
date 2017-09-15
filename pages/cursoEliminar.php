<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Curso</title>
	</head>
    <body>
        <aside>
            <?php
            $id=$_GET["id"];
            include_once("CursoCollector.php");
            $DemoCollectorObj= new CursoCollector();
            $DemoCollectorObj->deleteDemo($id);
            echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
            ?>
            
            <div class="text-fieldsl">
                <a href='cursoAdmin.php'>Volver al inicio</a>                                    
            </div>
        </aside>
    </body>
</html>