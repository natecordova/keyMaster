<?php

class Horarios
{
    private $id_horarios;
    private $hora_inicio;
    private $hora_final;
   
    
    
     function __construct($id_horarios, $hora_inicio, $hora_final) {
         $this->id_horarios = $id_horarios;
         $this->hora_inicio = $hora_inicio;
         $this->hora_final = $hora_final;
         
     }
    
     function setIdHorarios($id_horarios){
       $this->id_horarios = $id_horarios;
     } 
     function getIdHorarios(){
       return $this->id_horarios;
     } 
     function setHoraInicio($hora_inicio){
       $this->hora_inicio = $hora_inicio;
     } 
     function getHoraInicio(){
       return $this->hora_inicio;
     }
     function setHoraFinal($hora_final){
       $this->hora_final = $hora_final;
     } 
     function getHoraFinal(){
       return $this->hora_final;
     }
    
    
   
}

?> 
