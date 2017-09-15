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
            $aux = new Curso($c{'id_curso'},$c{'detalle'},$c{'id_profesor_fk'}, $c{'id_niveles_fk'});
            array_push($arrayCursos, $aux);
        }
        return $arrayCursos;        
    }
    function showDemo($id) {
        $rows = self::$db->getRows("SELECT * FROM curso where id_curso= ? ", array ("{$id}"));        
        $ObjDemo= new Curso($rows[0]{'id_curso'},$rows[0]{'detalle'},$rows[0]{'id_profesor_fk'}, $rows[0]{'id_niveles_fk'});
        return $ObjDemo; 
    }
    function UpdateDemo($id,$detalle, $profesor, $nivel) {
        $insertrow = self::$db->updateRow("UPDATE public.curso SET detalle = ?, id_profesor_fk = ?, id_niveles_fk = ? where id_curso= ? ", array ("{$detalle}", $profesor, $nivel, $id));
    }
    function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.curso where id_curso= ? ", array ("{$id}"));
    }
    
    function createDemo($detalle, $profesor, $nivel){
        $insertrow = self::$db->insertRow("INSERT INTO public.curso(detalle, id_profesor_fk, id_niveles_fk) VALUES (?,?,?)", array("{$detalle}", $profesor, $nivel));
    }
 }
?>
