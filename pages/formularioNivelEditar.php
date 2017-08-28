<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Nivel</title>
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
include_once("NivelCollector.php");
include_once("Nivel.php");
$DemoCollectorObj= new NivelCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Editar Objeto Nivel</h2>


<form id="contact-form" action="nivelActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="iddemo" id="iddemo" type="text" value="<?php echo $ObjDemo->getIdNivel(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDemo->getDescripcion(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>

<a href="nivelAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
