<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Tipo Cancelacion</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id_tipo_cancelacion=$_GET["id_tipo_cancelacion"];

include_once("Tipo_cancelacionCollector.php");
$DemoCollectorObj= new Tipo_cancelacionCollector();


$DemoCollectorObj->deleteDemo($id_tipo_cancelacion);
echo "valor id: ".htmlspecialchars($id_tipo_cancelacion)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='tipo_cancelacionAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
