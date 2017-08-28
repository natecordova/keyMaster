<?php
include_once('rol.php');
include_once('Collector.php');
class RolCollector extends Collector
{
  
    function showRol() {
        $rows = self::$db->getRows("SELECT * FROM rol ");        
        $array= array();        
        foreach ($rows as $c){
            $aux = new Rol($c{'id_rol'},$c{'nombre'});
            array_push($array, $aux);
        }
        return $arrayRolUsuarios;        
    }
    
    function showRol($id) {
	   $row = self::$db->getRows("SELECT * FROM rol where id_rol= ?", array("{$id}"));
	   $ObjRol = new rol($row[0]{'id_rol'},$row[0]{'nombre'});
	   return $ObjRolUsuario;
	}
    
    function updateRol($id, $nombre) {
	   $insertRow = self::$db->updateRow
	   ("Update public.rol SET nombre = ? WHERE id_rol = ?", array("{$nombre}", $id));
	}
    
	function insertRol($nombre) {
	   $insertRow = self::$db->insertRow ("Insert INTO public.rol (nombre) VALUES (?)", array("{$nombre}"));
	}
    
    function deleteRol($id) {
        $deleterow = self::$db->deleteRow("DELETE FROM rol where id_rol= ? ", array ("{$id}"));
}
 }
?>