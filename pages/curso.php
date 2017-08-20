<?php

class curso
{
    private $idcurso;
    private $detalle;
    
     function __construct($idcurso, $detalle) {
       $this->idcurso = $idcurso;
       $this->detalle = $detalle;
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
}

?> 
