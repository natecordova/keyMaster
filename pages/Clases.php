<?php

class Clases
{
    private $id_clase;
    private $profesor;
  
   
    
    
     function __construct($id_horarios, $profesor) {
         $this->id_horarios = $id_horarios;
         $this->profesor = $profesor;
         
     }
    
     function setIdClase($id_clase){
       $this->id_clase = $id_clase;
     } 
     function getIdClase(){
       return $this->id_clase;
     } 
     function setProfesor($profesor){
       $this->profesor = $profesor;
     } 
     function getProfesor(){
       return $this->profesor;
     }
    
    
   
}

?> 
