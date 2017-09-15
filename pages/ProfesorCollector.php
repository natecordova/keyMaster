<?php
include_once('Profesor.php');
include_once('Collector.php');
class ProfesorCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM profesor ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_profesor'},$c{'id_usuario_fk'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM profesor where id_profesor= ? ", array ("{$id}"));        
$ObjDemo= new Profesor($rows[0]{'id_profesor'},$rows[0]{'id_usuario_fk'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$usuario) {
            $insertrow = self::$db->updateRow("UPDATE profesor SET id_usuario_fk = ? where id_profesor= ? ", array ($usuario,$id));
        }
  
function LogIn($nombre) {
    $rows = self::$db->getRows("SELECT * FROM persona where nombre= ? ", array ("{$nombre}"));        
    
}

  function deleteDemo($id) {
            $deleterow = self::$db->deleteRow("DELETE FROM profesor where id_profesor = ? ", array ("{$id}"));
        }
  function createDemo($usuario){
        $insertrow = self::$db->insertRow("INSERT INTO public.profesor(id_usuario_fk) VALUES (?)", array($usuario));
    }
}
?>
