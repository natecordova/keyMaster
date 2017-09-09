<?php

include_once('Alumno.php');
include_once('Collector.php');

class AlumnoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM alumno ");        

    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Alumno($c{'id_alumno'},$c{'fk_id_usuario'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id_alumno) {
    $rows = self::$db->getRows("SELECT * FROM alumno where id_alumno= ? ", array ("{$id_alumno}"));        
$ObjDemo= new Alumno($rows[0]{'id_alumno'},$rows[0]{'fk_id_usuario'});
    
    return $ObjDemo;        
  }
function UpdateDemo($id_alumno,$fk_id_usuario) {
    $insertrow = self::$db->updateRow("UPDATE public.alumno SET fk_id_usuario = ? where id_alumno= ? ", array ("{$fk_id_usuario}",$id_alumno));

}
function deleteDemo($id_alumno) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.alumno where id_alumno= ? ", array ("{$id_alumno}"));

}

function createDemo($fk_id_usuario){
  
	 $insertrow = self::$db->insertRow("INSERT INTO public.alumno(fk_id_usuario) VALUES (?)", array("{$fk_id_usuario}"));
	

}




}
?>

