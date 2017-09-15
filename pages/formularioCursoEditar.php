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
            echo "el valor de id es ".$id;
            include_once("CursoCollector.php");
            $DemoCollectorObj= new CursoCollector();
            $ObjDemo=$DemoCollectorObj->showDemo($id);
            ?>
            
            <h2>Editar Objeto Nivel</h2>
            <form id="contact-form" action="cursoActualizar.php" method= "post">
                <div style="height: 20px;"></div>
                <div class="text-fieldsl">
                    <div class="float-input">
                        ID:	 <input name="iddemo" type="text" value="<?php echo $ObjDemo->getIdCurso(); ?>" readonly />
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="float-input">
                        Detalle:	 <input name="detalle" type="text" value="<?php echo $ObjDemo->getDetalle(); ?>" autofocus required />
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="float-input">
                        Profesor:	<input name="profesor" type="text" value="<?php echo $ObjDemo->getIdProfesor(); ?>"  autofocus required/> 
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="float-input">
                        Nivel:	<input name="nivel" type="text" value="<?php echo $ObjDemo->getIdNiveles(); ?>"  autofocus required/> 
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <a href="cursoAdmin.php">Cancelar</a>
                    <input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                </div>
            </form>
        </aside>
    </body>
</html>
