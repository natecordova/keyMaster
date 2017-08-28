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
  function showRolUsuario($id) {
	$row = self::$db->getRows("SELECT * FROM rolUsuario where idrolusuario= ?", array("{$id}"));
	$ObjRolUsuario = new Usuario($row[0]{'idrolusuario'},$row[0]{'detalle'});
	return $ObjRolUsuario;
	}

	function updateRolUsuario($id, $detalle) {
	$insertRow = self::$db->updateRow
	("Update public.rolUsuario SET detalle = ? WHERE idrolusuario = ?", array("{$detalle}", $id));

	}

	function insertRolUsuario($detalle) {
	$insertRow = self::$db->insertRow ("Insert INTO public.rolUsuario (detalle) VALUES (?)", array("{$detalle}"));

	}
  
 }
?>
