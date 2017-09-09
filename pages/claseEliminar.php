<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Clase</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id=$_GET["id"];

include_once("ClaseCollector.php");
$DemoCollectorObj= new ClaseCollector();


$DemoCollectorObj->deleteDemo($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='claseAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>