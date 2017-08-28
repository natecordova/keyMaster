<?php

include_once('cursoAlumno.php');
include_once('Collector.php');

class cursoAlumnoCollector extends Collector
{
  
  function showcursoAlumnos() {
    $rows = self::$db->getRows("SELECT * FROM cursoalumno ");        
    echo "Listado";
    $arraycursoAlumnos= array();        
    foreach ($rows as $c){
      $aux = new cursoAlumno($c{'idcursoalumno'},$c{'idcurso'});
      array_push($arraycursoAlumnos, $aux);
    }
    return $arraycursoAlumnos;        
  }
 }
?>
