<?php

class curso
{
    private $idcurso;
    private $detalle;
    private $id_profesor_fk;
    private $id_niveles_fk;
    
     function __construct($idcurso, $detalle, $profesor, $niveles) {
       $this->idcurso = $idcurso;
       $this->detalle = $detalle;
       $this->id_profesor_fk = $profesor;
       $this->id_niveles_fk = $niveles;
     }
    
     function setIdCurso($idcurso){
       $this->idcurso = $idcurso;
     } 
     function getIdCurso(){
       return $this->idcurso;
     } 
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     }
     function setIdProfesor($idprofesor){
       $this->id_profesor_fk = $idprofesor;
     } 
     function getIdProfesor(){
       return $this->id_profesor_fk;
     } 
     function setIdNiveles($niveles){
       $this->id_niveles_fk = $niveles;
     } 
     function getIdNiveles(){
       return $this->id_niveles_fk;
     }
}

?> 
