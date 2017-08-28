<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Nivel</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];
echo "Edicion en proceso . . . . </br>";
include_once("NivelCollector.php");
$DemoCollectorObj= new NivelCollector();
$DemoCollectorObj->createDemo($nombre);
echo "id: ".$iddemo." actualizado a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='nivelAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
