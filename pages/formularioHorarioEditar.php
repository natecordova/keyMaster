<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Horarios</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id_horario=$_GET["id_horario"];
echo "el valor de id es ".$id_horario;
include_once("HorarioCollector.php");
include_once("Horario.php");
$DemoCollectorObj= new HorarioCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id_horario);
print_r($ObjDemo);
?>

<h2>Editar Objeto Horario</h2>


<form id="contact-form" action="horarioActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
	
	
ID:	 <input name="id_horario" id="id_horario" type="text" value="<?php echo $ObjDemo->getIdHorario(); ?>" readonly />
	
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
HORA INICIO:	<input name="hora_inicio" id="hora_inicio" type="text" value="<?php echo $ObjDemo->getHoraInicio(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
HORA FINAL:	<input name="hora_final" id="hora_final" type="text" value="<?php echo $ObjDemo->getHoraFinal(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
CURSO:	<input name="id_curso_fk" id="id_curso_fk" type="text" value="<?php echo $ObjDemo->getIdCursoFk(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>



<a href="horarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
