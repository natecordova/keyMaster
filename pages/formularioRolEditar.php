<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Rol</title>
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
include_once("RolCollector.php");
include_once("rol.php");
$DemoCollectorObj= new RolCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Editar Objeto Rol</h2>


<form id="contact-form" action="rolActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="iddemo" id="iddemo" type="text" value="<?php echo $ObjDemo->getIdRol(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDemo->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>

<a href="rolAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
