<?php

// define("DB_HOST", "ec2-50-17-236-15.compute-1.amazonaws.com");
// define("DB_USER", "ddkqfqwlcvuwle");
// define("DB_PASS", "1e3da1d74a4c1ef9b131aa9e250872b3c732b28260b55165e5a2101f02bf32ea");
// define("DB_NAME", "deq1pleu3she04");


//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
$conex = "host=ec2-50-17-236-15.compute-1.amazonaws.com port=5432 dbname=deq1pleu3she04 user=ddkqfqwlcvuwle password=1e3da1d74a4c1ef9b131aa9e250872b3c732b28260b55165e5a2101f02bf32ea";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
 $nopermitidos = array("'",'\\','<','>',"\"");
 $mensaje = str_replace($nopermitidos, "", $mensaje);
 return $mensaje;
}
if(trim($_POST["nombre"]) != "" && trim($_POST["contrasena"]) != "")
{
 // Puedes utilizar la funcion para eliminar algun caracter en especifico
 //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
 //$password = $HTTP_POST_VARS["password"];
 // o puedes convertir los a su entidad HTML aplicable con htmlentities
 
 //Sirve para no aceptar mayusculas
 //$nombre = strtolower(htmlentities($_POST["nombre"], ENT_QUOTES));
 
 $nombre = $_POST["nombre"];
 $contrasena = $_POST["contrasena"];
 $result = pg_query('SELECT contrasena, nombre FROM usuario WHERE nombre=\''.$nombre.'\'');
 if($row = pg_fetch_array($result)){
  if($row["contrasena"] == $contrasena){
   $_SESSION["MiSession"] = $row['nombre'];
   
   echo 'Has sido logueado correctamente '.$_SESSION['MiSession'].' <p>';
   echo '<a href="admin.php">Comenzar a Administrar</a></p>';
  
   //Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
   /*Ingreso exitoso, ahora sera dirigido a la pagina principal.
   <SCRIPT LANGUAGE="javascript">
   location.href = "index.php";
   </SCRIPT>*/
  }else{
   echo 'Password incorrecto';
  }
 }else{
  echo 'Usuario no existente en la base de datos';
 }
 pg_free_result($result);
}else{
 echo 'Debe especificar un usuario y password';
}
pg_close();
?>