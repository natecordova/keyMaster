<?php

class rolUsuario
{
    private $idrolusuario;
    private $detalle;
    
     function __construct($idrolusuario, $detalle) {
       $this->iddemo = $idrolusuario;
       $this->nombre = $detalle;
     }
    
     function setIdRolUsuario($idrolusuario){
       $this->idrolusuario = $idrolusuario;
     } 
     function getIdRolUsuario(){
       return $this->idrolusuario;
     } 
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     } 
}

?> 
