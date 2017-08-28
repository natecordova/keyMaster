<?php

include_once('Nivel.php');
include_once('Collector.php');

class NivelCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM nivel ");        

    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Nivel($c{'id_nivel'},$c{'descripcion'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM nivel where id_nivel= ? ", array ("{$id}"));        
$ObjDemo= new Nivel($rows[0]{'id_nivel'},$rows[0]{'descripcion'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.nivel SET descripcion = ? where id_nivel= ? ", array ("{$nombre}",$id));

}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.nivel where id_nivel= ? ", array ("{$id}"));

}

function createDemo($nombre){
  
	 $insertrow = self::$db->insertRow("INSERT INTO public.nivel(descripcion) VALUES (?)", array("{$nombre}"));
	

}




}
?>

