<?php

class cursoAlumno
{
    private $idcursoalumno;
    private $idcurso;
    
     function __construct($idcursoalumno, $idcurso) {
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
       $this->idcursoalumno = $idcursoalumno;
     } 
     function getIdCursoAlumno(){
       return $this->idcursoalumno;
     } 
}

