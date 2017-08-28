<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id=$_GET["id"];

include_once("UsuarioCollector.php");
$DemoCollectorObj= new UsuarioCollector();


$DemoCollectorObj->deleteDemo($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='usuarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
