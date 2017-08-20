<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
        <title>Niveles</title>
        <meta name="application-name" content="cursos de piano en linea">
        <meta name="author" content="Lissette Contreras, lisscb1104@gmail.com"/>
        <meta name="copyright" content="KeyMaster"> <!--Nombre de la compañia-->
        <meta name="organization" content="KeyMaster S.A." /> <!--Nombre de la Organizacion-->
        <meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
        <meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
        <meta name="classification" content="Clases de Piano">
        <meta name="description" content="Clases de piano Streamming" /> <!--Descripcion de la pagina web-->
        <meta name="generator" content="Notepad"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
        <meta name="keywords" content="clases de piano, piano Streamming, piano en linea" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
        <meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body style="background: #1e262d;">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="../index.html"><img src="../images/icono.png" alt="Home"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Niveles</a></li>
                <li><a href="perfil.html">Perfil</a></li>
                <li><a href="contacto.html">Contactenos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/niveles.jpg" alt="nivel" style="width:100%">
                        <div class="caption">
                            <p>NIVEL BASICO</p>
			    <p>NIVEL BASICO</p>
			<?php
    			include_once("CursoCollector.php");
                        
                        $CCollectorObj = new CursoCollector();
                        foreach ($CCollectorObj->showCursos() as $c){
                            echo "<div>";
                            echo $c->getIdCurso() . "  -- " .$c->getDetalle();
                            echo "</div>"; 
                       	}
			?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/niveles.jpg" alt="nivel" style="width:100%">
                        <div class="caption">
                            <p>NIVEL INTERMEDIO</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/niveles.jpg" alt="nivel" style="width:100%">
                        <div class="caption">
                            <p>NIVEL AVANZADO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="footer">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p>© 2017 - Key Master</p>
                </div>
            </div>
        </div>
    </body>
</html>