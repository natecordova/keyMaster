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

<section>
</section>
<section>

</section>
<aside>
<?php

$id_rol=$_POST["id_rol"];
$id_usuario=$_POST["id_usuario"];
$detalle=$_POST["detalle"];

$id_rol_usuario=$_POST["id_rol_usuario"];
echo "Actualizacion en proceso . . . . </br>";
include_once("rolUsuarioCollector.php");
$DemoCollectorObj= new rolUsuarioCollector();
$DemoCollectorObj->updateDemo($id_rol_usuario,$detalle,$id_usuario,$id_rol);
echo "id: ".$id_rol_usuario." actualizado a:".$detalle." ".$id_usuario." ".$id_rol." </br>";
?>

<div class="text-fieldsl">
         <a href='rolUsuarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
