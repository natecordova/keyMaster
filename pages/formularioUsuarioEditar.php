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
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$DemoCollectorObj= new UsuarioCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Editar Objeto Usuario</h2>


<form id="contact-form" action="usuarioActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id" id="id" type="text" value="<?php echo $ObjDemo->getIdUsuario(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDemo->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
CONTRASEÑA:	<input name="contrasena" id="contrasena" type="text" value="<?php echo $ObjDemo->getContrasena(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>




<a href="usuarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
