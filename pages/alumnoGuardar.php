<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Alumno</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$fk_id_usuario=$_POST["fk_id_usuario"];
$id_alumno=$_POST["id_alumno"];
echo "Edicion en proceso . . . . </br>";
include_once("AlumnoCollector.php");
$DemoCollectorObj= new AlumnoCollector();
$DemoCollectorObj->createDemo($fk_id_usuario);

echo "id_alumno: ".$id_alumno." Actualizado a fk_id_usuario: ".$fk_id_usuario." </br>";

?>

<div class="text-fieldsl">
         <a href='alumnoAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
