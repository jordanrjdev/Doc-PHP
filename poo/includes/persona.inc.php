<?php 

  trait Compra {
    private $compra;

    public function validarCompra (){
      return "Compra exitosa";
    }
  }
  class Persona{

    //use Clase1, Clase2 tipo de herencia multiple 
    use Compra;
      public $nombre;
      public $apellido;
      public $email;
      const MONEDA = "USD";
      public function __construct($nombre, $apellido, $email){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->validarEmail($this->email);
        // try {
        //   if(empty($this->nombre)){
        //     throw new Exception("No indicaste un nombre");
        //   }else{
        //     $this->nombre = $nombre;
        //   }
        // } catch (Exception $err) {
        //   echo $err->getMessage();
        // }
      }

      public function validarEmail($email){
        #filter_var
        #FILTER_NOMBRE_VALIDACION
        try {
          if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            throw new Exception("Correo no valido");
          }
        } catch (Exception $error) {
          echo $error->getMessage();
        }
      }

      public function Bienvenida(){
        return "Bienvenido {$this->nombre} a este programa";
      }
      
      public function Despedida(){
        return "Hasta pronto {$this->nombre}";
      }
      

      
      public function __destruct(){
        return "Destruyendo a  {$this->nombre} ";
      }
  }

  
  
?>