<?php
class Profesor
{
    private $id_profesor;
    private $id_usurario_fk;
    
    
    function __construct($id_profesor, $id_usurario_fk) {   
     $this->id_profesor = $id_profesor;  
     $this->id_usurario_fk = $id_usurario_fk;
   }  
    
    
   public function getId_profesor() {  
     return $this->id_profesor;  
   }  
   public function setId_profesor($id_profesor){  
     return $this->id_profesor = $id_profesor;  
   }  
    
    public function getIdUsuario() {  
        return $this->id_usurario_fk;  
    }  
    
    public function setIdUsuario($id_usurario_fk){  
        return $this->id_usurario_fk = $id_usurario_fk;  
    }  
   
}
?> 
