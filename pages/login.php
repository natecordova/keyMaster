<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KeyMaster</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
        <meta name="application-name" content="cursos de piano en linea">
        <meta name="author" content="William Montalvan, willmont66@gmail.com" />
        <meta name="copyright" content="KeyMaster"> <!--Nombre de la compañia-->
        <meta name="organization" content="KeyMaster S.A." /> <!--Nombre de la Organizacion-->
        <meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
        <meta name="classification" content="Clases de Piano">
        <meta name="description" content="Clases de piano Streamming" /> <!--Descripcion de la pagina web-->
        <meta name="generator" content="Brackets"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
        <meta name="keywords" content="clases de piano, piano Streamming, piano en linea" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
        <meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        
        <script id="hola">
            function hola(){
                window.alert("Bienvenidos!!!");
            }
        </script>

    </head>
    <body>
        <div class="container-fluid">
            <div class="centrado">
                <a href="../index.html"><img class="img-thumbnail" alt="KeyMaster" src="../images/logo.jpg"></a>
            </div>
            <aside>
                <?php
                include_once("PersonCollector.php");
                    if (isset($_SESSION['MiSession'])) {
                         echo "<p> hola usuario:(".$_SESSION['MiSession'].") [<a href='salir.php'>Salir</a>]</p>";
                        {include_once("PersonCollector.php");
                        
                        $PCollectorObj = new PersonCollector();
                        foreach ($PCollectorObj->showDemos() as $c){
                            echo "<div>";
                            echo $c->getIdDemo() . "  && " .$c->getNombre()."<a href='pages/formularioDemoeditar.php?id=".$c->getIdDemo()."'>Editar</a> <a href='eliminar.php?id=".$c->getIdDemo()."'>Eliminar</a>";                 
                            echo "</div>"; 
                        }}

                    }else {
                ?>
                        <div class="row">
                            <div class="col-xs-push-4 col-md-push-4"> 
                                <section id="cta">
                                    <h2>&nbsp;</h2>";
                                    <form id="contact-form" action="log.php?nombre=" method= "POST">
                                        <input type="text" name="usuario" id="usuario" placeholder="Usuario o Email" /><br>
                                        <input type="password" name="clave" id="clave" placeholder="Password" /><br>
                                        <input type="submit" id="submit_contact" class="main-button" value="Login">
                                        
                                    </form>
                                    <label>Crear una nueva cuenta   <a id="sign" href="signin.html" >Sign up</a></label>
                                </section>
                            </div>
                        </div>
     
                <?php 
                    } 
                ?>
            </aside>
        </div>
    </body>
</html>



