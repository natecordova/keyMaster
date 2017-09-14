<?php

class Clases
{
    private $id_clase;
    private $fk_id_profesor;
  
   
    
    
     function __construct($id_clase, $fk_id_profesor ) {
         $this->id_clase = $id_clase;
         $this->fk_id_profesor = $fk_id_profesor;
         
     }
    
     function setIdClase($id_clase){
       $this->id_clase = $id_clase;
     } 
     function getIdClase(){
       return $this->id_clase;
     } 
     function setProfesor($fk_id_profesor){
       $this->fk_id_profesor = $fk_id_profesor;
     } 
     function getProfesor(){
       return $this->$fk_id_profesor;
     }
    
    
   
}

?> 
