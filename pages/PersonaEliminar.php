<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Persona</title>
	</head>
<body>

<aside>

	
	
<?php

$id_persona=$_GET["id"];

include_once("PersonaCollector.php");
$DemoCollectorObj= new PersonaCollector();


$DemoCollectorObj->deleteDemo($id_persona);
echo "valor id: ".htmlspecialchars($id_persona)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='PersonaAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
