<?php

include_once('Tipo_cancelacion.php');
include_once('Collector.php');

class Tipo_cancelacionCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM tipo_cancelacion ");        

    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Tipo_cancelacion($c{'id_tipo_cancelacion'},$c{'detalle'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id_tipo_cancelacion) {
    $rows = self::$db->getRows("SELECT * FROM tipo_cancelacion where id_tipo_cancelacion= ? ", array ("{$id_tipo_cancelacion}"));        
$ObjDemo= new Tipo_cancelacion($rows[0]{'id_tipo_cancelacion'},$rows[0]{'detalle'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id_tipo_cancelacion,$detalle) {
    $insertrow = self::$db->updateRow("UPDATE public.tipo_cancelacion SET detalle = ? where id_tipo_cancelacion= ? ", array ("{$detalle}",$id_tipo_cancelacion));

}
function deleteDemo($id_tipo_cancelacion) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.tipo_cancelacion where id_tipo_cancelacion= ? ", array ("{$id_tipo_cancelacion}"));

}

function createDemo($detalle){
  
	 $insertrow = self::$db->insertRow("INSERT INTO public.tipo_cancelacion(detalle) VALUES (?)", array("{$detalle}"));
	

}




}
?>

