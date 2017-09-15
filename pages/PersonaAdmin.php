<?php
session_start();
?>

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
              <a class="navbar-brand" href="vistaAdmin.php">KeymasterAdmin</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href='logout.php'><span class="glyphicon glyphicon-user"></span> Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>






<?php
if (isset($_SESSION['MiSession'])) {
 echo '<b>'.$_SESSION['MiSession']."</b> ) Seleccione una tabla </h2>";
?>


<div>


<?php
include_once("PersonaCollector.php");

$id =1;

$DemoCollectorObj = new PersonaCollector();


echo "<h2 class='texcen'>Bienvenido Persona Administrador:(".$_SESSION['MiSession'].") </h2>";

/*
foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  && " .$c->getNombre()."<a href='formularioDemoeditar.php?id=".$c->getIdDemo()."'>Editar</a> <a href='eliminar.php?id=".$c->getIdDemo()."'>Eliminar</a>";                                     
  echo "</div>"; 

  
}

*/



?>

</div>




<div class="container">
    <div class="row">
    
    <p></p>
    <p> </p><p> </p>
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Listado de Persona</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    
                    
                     <?php
                    
                         echo " <a type='button' class='btn btn-sm btn-primary btn-create' href= 'formularioPersonaInsertar.php' >Crear Nuevo</a> ";
                  
                      ?>
                
                  
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nombre</th>
                         <th>Apellido</th>
			<th>Direccion</th>
			<th>Telefono</th> 
                    </tr> 
                  </thead>
                  <tbody>
                    
                      <?php
                      
                      
                      
                       function runMyFunction() {
                                  echo 'I just ran a php function';
                                  
                                  
                                    ?>
                      <script type="text/javascript">function sure(){   return confirm('Are you sure?');};  sure();</script>
                       
                                    
                      <?php
                      
                                  
                                
                                 
                                }
                              
                             
                    
                                    
                      foreach ($DemoCollectorObj->showDemos() as $c){
                        
  
                        ?>
                      
                      
                          <tr>
                            <td align="center">
                              
                             
                              <?php
                              
                              echo "<a class='btn btn-default'  href='formularioPersonaEditar.php?id=".$c->getIdPersona()."'   ><em class='fa fa-pencil'></em></a>";
                               
                              ?>
                              
                              <?php
                                                    
                              
                              
                              
                              echo "<a class='btn btn-danger' href='PersonaEliminar.php?id=".$c->getIdPersona()."'><em class='fa fa-trash'></em></a>";  
                              
                              
                              /*echo "<a class='btn btn-danger' href='nivelEliminar.php?hello=true;'><em class='fa fa-trash'></em></a>"; */
                              

                             /* if(hello==true){ 
                                
                                id==$c->getIdNivel();
                                
                              }
                              */
                                                                                                
                               ?>
                                   <!--<a href="http://stackoverflow.com" onclick="return confirm('Are you sure?');">My Link</a> -->
                            
                            </td>
                            
                            <td class="hidden-xs">  <?php  echo $c->getIdPersona();    ?>   </td>
                            
                            <td> <?php echo  $c->getNombre(); ?> </td>
                            
                             <td> <?php echo  $c->getApellido(); ?> </td>

			<td> <?php echo  $c->getDireccion(); ?> </td>

			<td> <?php echo  $c->getTelefono(); ?> </td>
                          </tr>
                          
                          
                          
                          
                   <?php   }   
                   /*Generar alert  */
                   if (isset($_GET['hello'])) {
                                  runMyFunction();
                    }    
                                
                    ?>
                      
                     
                      
<?php
}else{
 echo '<p><a href="login.php">Login</a></p>';
 
}
?>                          
                          
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-11">Keymaster
                  </div>
                  <div class="col col-xs-1"><a href="vistaAdmin.php">Volver</a>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
