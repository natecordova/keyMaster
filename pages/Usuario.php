<?php

class Usuario
{
    private $idusuario;
    private $nombreusuario;
     private $contrasena;

     function __construct($idusuario, $nombreusuario, $contrasena) {
       $this->idcurso = $idusuario;
       $this->detalle = $nombreusuario;
	     $this->detalle = $contrasena;
     }
    
     function setIdUsuario($idusuario){
       $this->idcurso = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     } 
     function setNombreUsuario($nombreusuario){
       $this->nombreusuario = $nombreusuario;
     } 
     function getNombreUsuario(){
       return $this->nombreusuario;
     } 

	function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
}

?> 
