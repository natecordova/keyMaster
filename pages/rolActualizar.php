<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Rol</title>
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
include_once("RolCollector.php");
$DemoCollectorObj= new RolCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre);
echo "id: ".$iddemo." actualizado a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='rolAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
