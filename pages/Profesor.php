<?php
class Profesor extends Persona
{
    private $id_profesor;
  
    
    
    function __construct($id_profesor) {  
     parent::__construct($id_persona, $nombre, $apellido, $telefono, $genero, $mail);  
     $this->id_profesor = $id_profesor;  
   }  
    
    
   public function getId_profesor() {  
     return $this->id_profesor;  
   }  
   public function setId_profesor($id_profesor){  
     return $this->id_profesor = $id_profesor;  
   }  
    
   
}
?> 