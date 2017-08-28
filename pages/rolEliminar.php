<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Rol</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id=$_GET["id"];

include_once("RolCollector.php");
$DemoCollectorObj= new RolCollector();


$DemoCollectorObj->deleteDemo($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='rolAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
