<?php

class rol
{
    private $idrol;
    private $nombre;
    
     function __construct($idrol, $nombre) {
       $this->idrol = $idrol;
       $this->nombre = $nombre;
     }
    
     function setIdRol($idrol){
       $this->idrol = $idrol;
     } 
     function getIdRol(){
       return $this->idRol;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
