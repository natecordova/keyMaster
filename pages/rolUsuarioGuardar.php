<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Rol Usuario</title>
	</head>
<body>

<aside>
<?php

$id_rol=$_POST["id_rol"];
$id_usuario=$_POST["id_usuario"];
$detalle=$_POST["detalle"];
//$id_persona=$_POST["id_persona"];
echo "Edicion en proceso . . . . </br>";
include_once("rolUsuarioCollector.php");
$DemoCollectorObj= new rolUsuarioCollector();
$DemoCollectorObj->createDemo($detalle,$id_usuario,$id_rol);

?>

<div class="text-fieldsl">
         <a href='rolUsuarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
