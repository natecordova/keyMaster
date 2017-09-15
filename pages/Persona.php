<?php

class Persona
{
    private $id_persona;
    private $nombre;
    private $apellido;
    private $direccion;    
    private $telefono;
   
   
     function __construct($id_persona, $nombre, $apellido,$direccion, $telefono) {
         $this->id_persona = $id_persona;
         $this->nombre = $nombre;
         $this->apellido = $apellido;
	$this->direccion = $direccion;
         $this->telefono = $telefono;
         
     }
    
     function setIdPersona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getIdPersona(){
       return $this->id_persona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
    function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 

     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     }
    
     
}

?> 
