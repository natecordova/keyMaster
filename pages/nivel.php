<?php

class nivel
{
    private $idnivel;
    private $descripcion;
    
     function __construct($idnivel, $descripcion) {
       $this->idnivel = $idnivel;
       $this->descripcion = $descripcion;
     }
    
     function idnivel($idnivel){
       $this->idnivel = $idnivel;
     } 
     function getIdNivel(){
       return $this->idnivel;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?> 
