<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Persona</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id_persona=$_GET["id"];
echo "el valor de id es ".$id_persona;
include_once("PersonaCollector.php");
include_once("Persona.php");
$DemoCollectorObj= new PersonaCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id_persona);
print_r($ObjDemo);
?>

<h2>Editar Objeto Persona</h2>


<form id="contact-form" action="PersonaActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id_persona" id="id_persona" type="text" value="<?php echo $ObjDemo->getIdPersona(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDemo->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
Apellido:	<input name="apellido" id="apellido" type="text" value="<?php echo $ObjDemo->getApellido(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
direccion:	<input name="direccion" id="direccion" type="text" value="<?php echo $ObjDemo->getDireccion(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
telefono:	<input name="telefono" id="telefono" type="text" value="<?php echo $ObjDemo->getTelefono(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>




<a href="PersonaAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
