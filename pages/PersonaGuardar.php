<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Persona</title>
	</head>
<body>

<aside>
<?php
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$apellido=$_POST["apellido"];
$nombre=$_POST["nombre"];
//$id_persona=$_POST["id_persona"];
echo "Edicion en proceso . . . . </br>";
include_once("PersonaCollector.php");
$DemoCollectorObj= new PersonaCollector();
$DemoCollectorObj->createDemo($nombre,$apellido,$direccion,$telefono);

?>

<div class="text-fieldsl">
         <a href='PersonaAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
