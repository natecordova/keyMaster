<?php

include_once('Persona.php');
include_once('Collector.php');

class PersonCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_persona'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM demo where iddemo= ? ", array ("{$id}"));        
$ObjDemo= new Demo($rows[0]{'iddemo'},$rows[0]{'nombre'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE demo SET nombre = ? where iddemo= ? ", array ("{$nombre}",$id));

}

function LogIn($nombre) {
    $rows = self::$db->getRows("SELECT * FROM persona where nombre= ? ", array ("{$nombre}"));        
     if ($rows[0]{'nombre'} == null){
        echo "Clave incorrecta";
    }else{
        $_SESSION['sesion_iniciada'] = true;
        $_SESSION['nombre'] = $nombre;
    }
}

function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM demo where iddemo= ? ", array ("{$id}"));

}


}
?>

