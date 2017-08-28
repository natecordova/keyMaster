<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        

    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'id'},$c{'nombre'},$c{'contrasena'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario where id= ? ", array ("{$id}"));        
$ObjDemo= new Usuario($rows[0]{'id'},$rows[0]{'nombre'},$rows[0]{'contrasena'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre,$contrasena) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre = ?, contrasena = ? where id= ? ", array ("{$nombre}","{$contrasena}",$id));

}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where id= ? ", array ("{$id}"));

}

function createDemo($nombre,$contrasena){
  

    $insertrow = self::$db->insertRow("INSERT INTO public.usuario(nombre, contrasena) VALUES (?,?)", array ("{$nombre}","{$contrasena}"));             
  

}




}
?>

