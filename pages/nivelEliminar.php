<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Nivel</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id=$_GET["id"];

include_once("NivelCollector.php");
$DemoCollectorObj= new NivelCollector();


$DemoCollectorObj->deleteDemo($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='nivelAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
