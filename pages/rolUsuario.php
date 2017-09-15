<?php

class rolUsuario
{
    private $id_rol_usuario;
    private $detalle;
	private $id_usuario;
	private $id_rol;
    
     function __construct($id_rol_usuario, $detalle,$id_usuario,$id_rol) {
       $this->id_rol_usuario = $id_rol_usuario;
       $this->detalle = $detalle;
	$this->id_usuario = $id_usuario;
	$this->id_rol = $id_rol;
     }
    
     function setIdRolUsuario($id_rol_usuario){
       $this->id_rol_usuario = $id_rol_usuario;
     } 
     function getIdRolUsuario(){
       return $this->id_rol_usuario;
     } 
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     } 
function setIdUsuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 
     function getIdUsuario(){
       return $this->id_usuario;
     } 
function setIdRol($id_rol){
       $this->id_rol = $id_rol;
     } 
     function getIdRol(){
       return $this->id_rol;
     } 


}

?> 
