<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Guardar Clase</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$profesor=$_POST["profesor"];
$id=$_POST["id"];
echo "Edicion en proceso . . . . </br>";
include_once("ClaseCollector.php");
$DemoCollectorObj= new ClaseCollector();
$DemoCollectorObj->createDemo($id, $profesor);


?>

<div class="text-fieldsl">
         <a href='claseAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>