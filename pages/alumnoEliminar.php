<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Alumno</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id_alumno=$_GET["id_alumno"];

include_once("AlumnoCollector.php");
$DemoCollectorObj= new AlumnoCollector();


$DemoCollectorObj->deleteDemo($id_alumno);
echo "valor id: ".htmlspecialchars($id_alumno)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='alumnoAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
