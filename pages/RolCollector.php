<?php

include_once('rol.php');
include_once('Collector.php');

class RolCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        

    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'id_rol'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM rol where id_rol= ? ", array ("{$id}"));        
$ObjDemo= new rol($rows[0]{'id_rol'},$rows[0]{'nombre'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.rol SET nombre = ? where id_rol= ? ", array ("{$nombre}",$id));

}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.rol where id_rol= ? ", array ("{$id}"));

}

function createDemo($nombre){
  
	 $insertrow = self::$db->insertRow("INSERT INTO public.rol(nombre) VALUES (?)", array("{$nombre}"));
	

}




}
?>

