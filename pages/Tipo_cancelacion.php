<?php

class Tipo_cancelacion
{
    private $id_tipo_cancelacion;
    private $detalle;
    
     function __construct($id_tipo_cancelacion, $detalle) {
       $this->id_tipo_cancelacion = $id_tipo_cancelacion;
       $this->detalle = $detalle;
     }
    
     function setIdTipo_cancelacion($id_tipo_cancelacion){
       $this->id_tipo_cancelacion = $id_tipo_cancelacion;
     } 
     function getIdTipo_cancelacion(){
       return $this->id_tipo_cancelacion;
     } 
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     } 
}

?> 
