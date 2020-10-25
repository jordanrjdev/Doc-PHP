<?php 
  class Curso{
    private $titulo; //Se puede llamar en cualquier lugar
    private $profesor; //Restringido solo puede ser accedido por los miembros de la clase
    private $duracion; //Puede ser accedido por las clases y clases heredadas 
    private $costo;
    private $disponible;

    public function __construct($titulo, $profesor, $duracion, $costo, $disponible){
      $this->titulo = $titulo;
      $this->profesor = $profesor;
      $this->costo = $costo;
      $this->duracion = $duracion;
      $this->disponible = $disponible;

    }

    function obtenerPrivado(){
      return $this->privado;
    }
  }
?>