<!DOCTYPE html>
<html lang="es">
    <head>
		<meta charset ="utf-8">
		<title> Formulario Administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <!-- <link href="../css/main.css" rel='stylesheet' type='text/css'  >   -->
        <link href="../css/admin.css" rel='stylesheet' type='text/css'  >
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="admin.php">KeymasterAdmin</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href='logout.php'><span class="glyphicon glyphicon-user"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Listado</h3>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>
                                        <th>Administrar</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <tr><td><a href="alumnoAdmin.php">Alumno</a></td></tr>
                                    <tr><td><a href="claseAdmin.php">Clase</a></td></tr>
                                    <tr><td><a href="cursoAdmin.php">Curso</a></td></tr>
                                    <tr><td><a href="cursoAlumnoAdmin.php">Curso Alumnos</a></td></tr>
                                    <tr><td><a href="horarioAdmin.php">Horario</a></td></tr>
                                    <tr><td><a href="nivelAdmin.php">Nivel</a></td></tr>
                                    <tr><td><a href="PersonaAdmin.php">Persona</a></td></tr>
                                    <tr><td><a href="profesorAdmin.php">Profesor</a></td></tr>
                                    <tr><td><a href="rolAdmin.php">Rol</a></td></tr>
                                    <tr><td><a href="rolUsuarioAdmin.php">Roles por Usuarios</a></td></tr>
                                    <tr><td><a href="tipo_cancelacionAdmin.php">Cancelación</a></td></tr>
                                    <tr><td><a href="usuarioAdmin.php">Usuario</a></td></tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">Keymaster
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>