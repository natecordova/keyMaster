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
            include_once("CACollector.php");
            $DemoCollectorObj= new cursoAlumnoCollector();
            $ObjDemo=$DemoCollectorObj->showDemo($id);
            ?>
            
            <h2>Editar Objeto Nivel</h2>
            <form id="contact-form" action="CAActualizar.php" method= "post">
                <div style="height: 20px;"></div>
                <div class="text-fieldsl">
                    <div class="float-input">
                        ID:	 <input name="iddemo" type="text" value="<?php echo $ObjDemo->getIdCursoAlumno(); ?>" readonly />
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="float-input">
                        Curso:	 <input name="curso" type="text" value="<?php echo $ObjDemo->getIdCurso(); ?>" autofocus required />
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    
                    <a href="cursoAdmin.php">Cancelar</a>
                    <input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                </div>
            </form>
        </aside>
    </body>
</html>
