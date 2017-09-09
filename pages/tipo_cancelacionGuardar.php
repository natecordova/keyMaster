<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Tipo Cancelacion</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$detalle=$_POST["detalle"];
$id_tipo_cancelacion=$_POST["id_tipo_cancelacion"];
echo "Edicion en proceso . . . . </br>";
include_once("Tipo_cancelacionCollector.php");
$DemoCollectorObj= new Tipo_cancelacionCollector();
$DemoCollectorObj->createDemo($detalle);
echo "id: ".$id_tipo_cancelacion." actualizado a:".$detalle." </br>";
?>

<div class="text-fieldsl">
         <a href='tipo_cancelacionAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
