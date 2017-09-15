<?php

include_once('Persona.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'id_persona'},$c{'nombre'},$c{'apellido'},$c{'direccion'},$c{'telefono'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id_persona) {
    $rows = self::$db->getRows("SELECT * FROM persona where id_persona= ? ", array ("{$id_persona}"));        
$ObjDemo= new Persona($rows[0]{'id_persona'},$rows[0]{'nombre'},$rows[0]{'apellido'},$rows[0]{'direccion'},$rows[0]{'telefono'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id_persona,$nombre,$apellido,$direccion,$telefono) {
    $insertrow = self::$db->updateRow("UPDATE persona SET nombre = ?, apellido = ?, direccion = ?, telefono = ? where id_persona= ? ", array ("{$nombre}","{$apellido}","{$direccion}","{$telefono}",$id_persona));

}

function deleteDemo($id_persona) {
    $deleterow = self::$db->deleteRow("DELETE FROM persona where id_persona= ? ", array ("{$id_persona}"));

}

function createDemo($nombre,$apellido,$direccion,$telefono){  

    $insertrow = self::$db->insertRow("INSERT INTO public.persona(nombre, apellido,direccion,telefono) VALUES (?,?,?,?)", array ("{$nombre}","{$apellido}","{$direccion}","{$telefono}"));             
  
}

}
?>

