<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> log demo</title>
	</head>
<body>
<p>hola</p>
<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["usuario"];
$apellido=$_POST["clave"];
echo $nombre." & ". $apellido;
    
include_once("PersonCollector.php");
$PCollectorObj= new PersonCollector();
$PCollectorObj->LogIn($nombre);
echo " nombre a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='index.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
