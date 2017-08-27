<?php
class Alumno extends Persona
{
    private $id_alumno;
  
    
    
    function __construct($id_alumno) {  
     parent::__construct($id_persona, $nombre, $apellido, $telefono, $genero, $mail);  
     $this->id_alumno = $id_alumno;  
   }  
    
    
   public function getId_alumno() {  
     return $this->id_alumno;  
   }  
   public function setId_alumno($id_Alumno){  
     return $this->id_alumno = $id_alumno;  
   }  
    
   
}
?> 