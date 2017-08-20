<?php

class tipocancelacion
{
    private $id_tipo_cancelacion;
    private $detalle;
    
     function __construct($id_tipo_cancelacion, $detalle) {
       $this->id_tipo_cancelacion = $id_tipo_cancelacion;
       $this->detalle = $detalle;
     }
    
     function setId_tipo_cancelacion($id_tipo_cancelacion){
       $this->id_tipo_cancelacion = $id_tipo_cancelacion;
     } 
     function getId_tipo_cancelacion(){
       return $this->Id_tipo_cancelacion;
     } 
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     } 
}

?> 
