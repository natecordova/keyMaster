<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Rol Usuario</title>
	</head>
<body>

<aside>
	
<?php

$id_rol_usuario=$_GET["id"];

include_once("rolUsuarioCollector.php");
$DemoCollectorObj= new rolUsuarioCollector();


$DemoCollectorObj->deleteDemo($id_rol_usuario);
echo "valor id: ".htmlspecialchars($id_rol_usuario)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='rolUsuarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
