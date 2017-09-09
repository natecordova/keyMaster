<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Formulario Tipo de Cancelacion</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id_tipo_cancelacion=$_GET["id_tipo_cancelacion"];
echo "el valor de id es ".$id_tipo_cancelacion;
include_once("Tipo_cancelacionCollector.php");
include_once("Tipo_cancelacion.php");
$DemoCollectorObj= new Tipo_cancelacionCollector();
$ObjDemo=$DemoCollectorObj->showDemo($id_tipo_cancelacion);
print_r($ObjDemo);
?>

<h2>Editar Objeto Tipo de Cancelacion</h2>


<form id="contact-form" action="tipo_cancelacionActualizar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id_tipo_cancelacion" id="id_tipo_cancelacion" type="text" value="<?php echo $ObjDemo->getIdTipo_cancelacion(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
DETALLE:	<input name="detalle" id="detalle" type="text" value="<?php echo $ObjDemo->getDetalle(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>

<a href="tipo_cancelacionAdmin.php">Cancelar</a>

<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
