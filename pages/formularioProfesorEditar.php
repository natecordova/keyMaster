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
        <aside>
            
            <?php
            $id=$_GET["id"];
            include_once("ProfesorCollector.php");
            $DemoCollectorObj= new ProfesorCollector();
            $ObjDemo=$DemoCollectorObj->showDemo($id);
            ?>
            
            <h2>Editar Objeto Nivel</h2>
            <form id="contact-form" action="profesorActualizar.php" method= "post">
                <div style="height: 20px;"></div>
                <div class="text-fieldsl">
                    <div class="float-input">
                        ID:	 <input name="iddemo" type="text" value="<?php echo $ObjDemo->getId_profesor(); ?>" readonly />
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="float-input">
                        Usuario:	 <input name="usuario" type="text" value="<?php echo $ObjDemo->getIdUsuario(); ?>" autofocus required />
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    
                    <a href="profesorAdmin.php">Cancelar</a>
                    <input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                </div>
            </form>
        </aside>
    </body>
</html>
