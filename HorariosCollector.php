<?php

include_once('Horarios.php');
include_once('Collector.php');

class HorariosCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM horario ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_horario'},$c{'hora_inicio'},$c{'hora_final'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM horario where id_horario= ? ", array ("{$id}"));        
$ObjDemo= new Horarios($rows[0]{'id_horario'},$rows[0]{'hora_inicio'},$rows[0]{'hora_final'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE horario SET hora_inicio = ? SET hora_final = ? where id_horario= ? ", array ("{$nombre}",$id));

}



function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM horario where id_horario= ? ", array ("{$id}"));

}


}
?>

