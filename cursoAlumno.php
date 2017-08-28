<?php

class cursoAlumno
{
    private $idcursoalumno;
    private $idcurso;
    
     function __construct($idcurso, $idcursoalumno) {
       $this->idcurso = $idcurso;
       $this->idcursoalumno = $idcursoalumno;
     }
    
     function setIdCurso($idcurso){
       $this->idcurso = $idcurso;
     } 
     function getIdCurso(){
       return $this->idcurso;
     } 
     function setIdCursoAlumno($idcursoalumno){
       $this->detalle = $detalle;
     } 
     function getIdCursoAlumno(){
       return $this->Idcursoalumno;
     } 
}

