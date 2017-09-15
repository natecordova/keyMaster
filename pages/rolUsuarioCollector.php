<?php

include_once('rolUsuario.php');
include_once('Collector.php');

class rolUsuarioCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM rolusuario");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new rolUsuario($c{'id_rol_usuario'},$c{'detalle'},$c{'id_usuario'},$c{'id_rol'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id_rol_usuario) {
    $rows = self::$db->getRows("SELECT * FROM rolusuario where id_rol_usuario= ? ", array ("{$id_rol_usuario}"));        
$ObjDemo= new rolUsuario($rows[0]{'id_rol_usuario'},$rows[0]{'detalle'},$rows[0]{'id_usuario'},$rows[0]{'id_rol'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id_rol_usuario,$detalle,$id_usuario,$id_rol) {
    $insertrow = self::$db->updateRow("UPDATE rolusuario SET detalle = ?, id_usuario = ?, id_rol = ? where id_rol_usuario= ? ", array ("{$detalle}","{$id_usuario}","{$id_rol}",$id_rol_usuario));

}

function deleteDemo($id_rol_usuario) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.rolusuario where id_rol_usuario= ? ", array ("{$id_rol_usuario}"));

}

function createDemo($detalle,$id_usuario,$id_rol){  

    $insertrow = self::$db->insertRow("INSERT INTO rolusuario (detalle,id_usuario,id_rol) VALUES (?,?,?)", array ("{$detalle}","{$id_usuario}","{$id_rol}"));             
  
}

}
?>

