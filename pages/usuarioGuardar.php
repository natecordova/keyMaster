<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$contrasena=$_POST["contrasena"];
$nombre=$_POST["nombre"];
$id=$_POST["id"];
echo "Edicion en proceso . . . . </br>";
include_once("UsuarioCollector.php");
$DemoCollectorObj= new UsuarioCollector();
$DemoCollectorObj->createDemo($nombre,$contrasena);

echo "id: ".$id." Actualizado a nombre: ".$nombre." contraseña: ".$contrasena." </br>";

?>

<div class="text-fieldsl">
         <a href='usuarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
