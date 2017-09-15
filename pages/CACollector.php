<?php

include_once('cursoAlumno.php');
include_once('Collector.php');

class cursoAlumnoCollector extends Collector
{
    function showcursoAlumnos() {
        $rows = self::$db->getRows("SELECT * FROM curso_alumno "); 
        echo "Listado";
        $arraycursoAlumnos= array();        
        foreach ($rows as $c){
            $aux = new cursoAlumno($c{'id_curso_alumno'},$c{'id_curso_fk'});
            array_push($arraycursoAlumnos, $aux);
        }
        return $arraycursoAlumnos;        
    }
    function showDemo($id) {
        $rows = self::$db->getRows("SELECT * FROM curso_alumno where id_curso_alumno= ? ", array ("{$id}"));        
        $ObjDemo= new cursoAlumno($rows[0]{'id_curso_alumno'},$rows[0]{'id_curso_fk'});
        return $ObjDemo; 
    }
    function UpdateDemo($id, $curso) {
        $insertrow = self::$db->updateRow("UPDATE public.curso_alumno SET id_curso_fk = ? where id_curso_alumno = ? ", array ($curso, $id));
    }
    function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.curso_alumno where id_curso_alumno = ? ", array ("{$id}"));
    }
    
    function createDemo($curso){
        $insertrow = self::$db->insertRow("INSERT INTO public.curso_alumno(id_curso_fk) VALUES (?)", array($curso));
    }
}
?>
