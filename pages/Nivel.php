<?php

class Nivel
{
    private $id_nivel;
    private $descripcion;
    
     function __construct($id_nivel, $descripcion) {
       $this->id_nivel = $id_nivel;
       $this->descripcion = $descripcion;
     }
    
     function setIdNivel($id_nivel){
       $this->id_nivel = $id_nivel;
     } 
     function getIdNivel(){
       return $this->id_nivel;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?> 
