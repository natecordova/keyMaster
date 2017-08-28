<?php

include_once('rolUsuario.php');
include_once('Collector.php');

class rolUsuarioCollector extends Collector
{
  
  function showRolUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM rolUsuario ");        
    echo "Lista de Roles por usuario";
    $arrayRolUsuarios= array();        
    foreach ($rows as $c){
      $aux = new RolUsuario($c{'idrolusuario'},$c{'detalle'});
      array_push($arrayRolUsuarios, $aux);
    }
    return $arrayRolUsuarios;        
  }
 }
?>
