<?php 
class Profesor extends Persona{
    public function Bienvenida(){
      return "Bienvenido profesor {$this->nombre}";
    }
}

?>