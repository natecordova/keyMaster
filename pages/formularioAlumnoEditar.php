<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Alumno</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id_alumno=$_GET["id_alumno"];
echo "el valor de id es ".$id_alumno;
include_once("AlumnoCollector.php");
include_once("Alumno.php");
$DemoCollectorObj= new AlumnoCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id_alumno);
print_r($ObjDemo);
?>

<h2>Editar Objeto Alumno</h2>


<form id="contact-form" action="alumnoActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id_alumno" id="id_alumno" type="text" value="<?php echo $ObjDemo->getId_alumno(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
fk_id_usuario: <input name="fk_id_usuario" id="fk_id_usuario" type="text" value="<?php echo $ObjDemo->getFk_id_usuario(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>





<a href="alumnoAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
