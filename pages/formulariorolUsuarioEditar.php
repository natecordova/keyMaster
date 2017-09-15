<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Rol Usuario</title>
	</head>
<body>

<aside>
<?php
$id_rol_usuario=$_GET["id"];
echo "el valor de id es ".$id_rol_usuario;
include_once("rolUsuarioCollector.php");
include_once("rolUsuario.php");
$DemoCollectorObj= new rolUsuarioCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id_rol_usuario);
print_r($ObjDemo);
?>

<h2>Editar Objeto Rol Usuario</h2>


<form id="contact-form" action="rolUsuarioActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id_rol_usuario" id="id_rol_usuario" type="text" value="<?php echo $ObjDemo->getIdRolUsuario(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
Detalle:	<input name="detalle" id="detalle" type="text" value="<?php echo $ObjDemo->getDetalle(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>

<div class="float-input">
ID Usuario:	<input name="id_usuario" id="id_usuario" type="text" value="<?php echo $ObjDemo->getIdUsuario(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<div class="float-input">
ID Rol:	<input name="id_rol" id="id_rol" type="text" value="<?php echo $ObjDemo->getIdRol(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>




<a href="rolUsuarioAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
