<?php

class Usuario
{
    private $id_usuario;
    private $nombre;
    private $contrasena;
    
    
     function __construct($id_usuario, $nombre, $contrasena) {
       $this->id_usuario = $id_usuario;
       $this->nombre = $nombre;
        $this->contrasena = $contrasena;
     }
    
     function setIdUsuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 
     function getIdUsuario(){
       return $this->id_usuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
     
     
     
}

?> 
