<?php 
  class Estudiante extends Persona {
    public function __construct($nombre, $apellido, $email){

      //Heredando el constructor de la clase padre -- parent::__construct
      parent::__construct($nombre, $apellido, $email);
    }

    public function Bienvenida(){
      return "Hola tenemos nuevos cursos para vos {$this->nombre}";
    }

    //La palabra final hace que este metodo no pueda ser sobreescrito
    final public function Despedida(){
      return "Hasta pronto {$this->nombre}";
    }
  }
?>