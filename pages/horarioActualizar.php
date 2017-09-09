<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Horarios</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$hora_inicio=$_POST["hora_inicio"];

$hora_final=$_POST["hora_final"];
$id_curso_fk=$_POST["id_curso_fk"];
$id_horario=$_POST["id_horario"];
echo "Actualizacion en proceso . . . . </br>";
include_once("HorarioCollector.php");
$DemoCollectorObj= new HorarioCollector();
$DemoCollectorObj->updateDemo($id_horario,$hora_inicio,$hora_final,$id_curso_fk);
echo "id: ".$id_horario." Actualizado a hora: ".$hora_inicio." hora_final: ".$hora_final." curso: ".$id_curso_fk."  </br>";
?>

<div class="text-fieldsl">
         <a href='horarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
