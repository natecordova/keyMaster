<?php

include_once('Clases.php');
include_once('Collector.php');

class ClaseCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM clase ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_clase'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM clase where id_clase= ? ", array ("{$id}"));        
$ObjDemo= new Clases($rows[0]{'id_clase'},$rows[0]{'profesor'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$profesor) {
    $insertrow = self::$db->updateRow("UPDATE clase SET profesor = ? where id_clase= ? ", array ("{$profesor}",$id));

}



function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM clase where id_clase= ? ", array ("{$id}"));

}


}
?>
