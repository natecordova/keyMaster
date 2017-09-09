<?php

include_once('Horario.php');
include_once('Collector.php');

class HorarioCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM horario ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Horario($c{'id_horario'},$c{'hora_inicio'},$c{'hora_final'},$c{'id_curso_fk'});

      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id_horario) {
    $rows = self::$db->getRows("SELECT * FROM horario where id_horario= ? ", array ("{$id_horario}"));        
$ObjDemo= new Horario($rows[0]{'id_horario'},$rows[0]{'hora_inicio'},$rows[0]{'hora_final'},$rows[0]{'id_curso_fk'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id_horario,$hora_inicio,$hora_final,$id_curso_fk) {
    $insertrow = self::$db->updateRow("UPDATE public.horario SET hora_inicio = ?, hora_final = ?,  id_curso_fk = ? where id_horario= ? ", array ("{$hora_inicio}","{$hora_final}","{$id_curso_fk}",$id_horario));

}


function deleteDemo($id_horario) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.horario where id_horario= ? ", array ("{$id_horario}"));

}

function createDemo($id_horario,$hora_inicio,$hora_final,$id_curso_fk){
  

    $insertrow = self::$db->insertRow("INSERT INTO public.horario(id_horario,hora_inicio,hora_final,id_curso_fk) VALUES (?,?,?,?)", array ("{$id_horario}","{$hora_inicio}","{$hora_final}","{$id_curso_fk}"));             
  

}

}
?>
