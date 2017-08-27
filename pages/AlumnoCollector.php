<?php
include_once('Alumno.php');
include_once('Collector.php');
class AlumnoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM alumno ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_alumno'},$c{'id_usuario_fk'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM alumno where id_alumno= ? ", array ("{$id}"));        
$ObjDemo= new Alumno($rows[0]{'id_alumno'},$rows[0]{'id_usuario_fk'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE demo SET nombre = ? where iddemo= ? ", array ("{$nombre}",$id));
}
function LogIn($nombre) {
    $rows = self::$db->getRows("SELECT * FROM persona where nombre= ? ", array ("{$nombre}"));        
    
}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM alumno where id_alumno= ? ", array ("{$id}"));
}
}
?>
