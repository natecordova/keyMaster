<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Horario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id_horario=$_GET["id_horario"];

include_once("HorarioCollector.php");
$DemoCollectorObj= new HorarioCollector();


$DemoCollectorObj->deleteDemo($id_horario);
echo "valor id: ".htmlspecialchars($id_horario)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='horarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
