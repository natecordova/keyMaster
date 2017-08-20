<?php

include_once('curso.php');
include_once('Collector.php');

class CursoCollector extends Collector
{
  
  function showCursos() {
    $rows = self::$db->getRows("SELECT * FROM curso ");        
    echo "Lista de Cursos Basicos";
    $arrayCursos= array();        
    foreach ($rows as $c){
      $aux = new Curso($c{'idcurso'},$c{'detalle'});
      array_push($arrayCursos, $aux);
    }
    return $arrayCursos;        
  }
 }
?>
