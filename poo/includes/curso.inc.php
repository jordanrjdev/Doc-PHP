<?php 

  //Interfaces en php -> implements
  interface Requerimientos {
    public function setRequerimiento($listado);

    public function getRequerimiento();
  }

  interface Conocimientos {
    public function setConocimiento($listado);
    public function getConocimiento();
  }

  class Curso implements Requerimientos{
    // publico Se puede llamar en cualquier lugar
    //private Restringido solo puede ser accedido por los miembros de la clase
    //protected Puede ser accedido por las clases y clases heredadas 
    private $titulo; 
    private $profesor;
    private $duracion;
    private $costo;
    private $disponible;
    private $listado;
    public static $moneda = "USD"; //Se puede acceder mediante el operador de resolucion de ambito self::

    public function __construct($titulo, $profesor, $duracion, $costo, $disponible){
      $this->titulo = $titulo;
      $this->profesor = $profesor;
      $this->costo = $costo;
      $this->duracion = $duracion;
      $this->disponible = $disponible;

    }
    //Encapsulacion 
    public function getTitulo () {
      return $this->titulo;
    }
    public function getProfesor () {
      return $this->profesor;
    }
    public function setTitulo($titulo)
    {
      $this->titulo = $titulo;
    }
    
    //Implementando funciones de las interfaces
    public function setRequerimiento($listado){
      $this->listado = $listado;
    }
    public function getRequerimiento(){
      if(!empty($this->listado)){
        foreach ($this->listado as $lista ) { 
          echo "<p>".$lista."</p>";
        }
      }
    }

    static function getMoneda(){
      return self::$moneda;
    }
    //Destructor en php 
    public function __destruct(){
      echo "<p>Destruyendo ".$this->titulo."</p>";
    }
    

  }
?>