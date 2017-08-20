<?php

class Persona
{
    private $id_persona;
    private $nombre;
    private $apellido;
    private $telefono;
    private $genero;
    private $mail;
    
    
     function __construct($id_persona, $nombre, $apellido, $telefono, $genero, $mail) {
         $this->id_persona = $id_persona;
         $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->telefono = $telefono;
         $this->genero = $genero;
         $this->mail = $mail;
     }
    
     function setIdDemo($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getIdDemo(){
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
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     }
    function setGenero($genero){
       $this->genero = $genero;
     } 
     function getGenero(){
       return $this->genero;
     } 
     function setMail($mail){
       $this->nombre = $mail;
     } 
     function getMail(){
       return $this->mail;
     }
}

?> 
