<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Usuario</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
echo "el valor de id es ".$id;
include_once("ClaseCollector.php");
include_once("Clases.php");
$DemoCollectorObj= new ClaseCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id);

?>

<h2>Editar Objeto Usuario</h2>


<form id="contact-form" action="claseActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id" id="id" type="text" value="<?php echo $ObjDemo->getIdClase(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
Profesor:	<input name="profesor" id="profesor" type="text" value="<?php echo $ObjDemo->getProfesor(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>






<a href="usuarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>