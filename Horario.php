<?php

class Horario
{
    private $id_horario;
    private $hora_inicio;
    private $hora_final;
   private $id_curso_fk;
    
    
     function __construct($id_horario, $hora_inicio, $hora_final,$id_curso_fk) {
         $this->id_horario = $id_horario;
         $this->hora_inicio = $hora_inicio;
         $this->hora_final = $hora_final;
         $this->id_curso_fk = $id_curso_fk;
         
     }
    
     function setIdHorario($id_horario){
       $this->id_horario = $id_horario;
     } 
     function getIdHorario(){
       return $this->id_horario;
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
    function setIdCursoFk($id_curso_fk){
       $this->id_curso_fk = $id_curso_fk;
     } 
     function getIdCursoFk(){
       return $this->id_curso_fk;
     }
    
   
}

?> 
