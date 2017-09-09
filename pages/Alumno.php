<?php
class Alumno //extends Persona
{
    private $id_alumno;
    private $fk_id_usuario;
  
    
    
    function __construct($id_alumno,$fk_id_usuario) {  
     //parent::__construct($id_persona, $nombre, $apellido, $telefono, $genero, $mail);  
     $this->id_alumno = $id_alumno;  
     $this->fk_id_usuario = $fk_id_usuario;  
   }  
    
    
   public function getId_alumno() {  
     return $this->id_alumno;  
   }  
   public function setId_alumno($id_alumno){  
     return $this->id_alumno = $id_alumno;  
   }  
    
    public function getFk_id_usuario() {  
     return $this->fk_id_usuario;  
   }  
   public function setFk_id_usuario($fk_id_usuario){  
     return $this->fk_id_usuario = $fk_id_usuario;  
   }  
    
   
}
?> 