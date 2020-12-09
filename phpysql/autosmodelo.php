<?php 
  require_once "db_conexion.php";

  class Autosmodelo extends BD {
    private $bd;
    public $nombreAuto; 
    public $marcaAuto; 
    public $modeloAuto; 
    public $kmAuto; 
    public $precioAuto; 
    public $descripcionAuto; 
    private $tabla = "inventario"; 

    public function insertar($registro){
      $conexion = parent::connectDB();
      try {
        $query = "INSERT INTO `autos`.$this->tabla SET nombre_auto=:nombre_auto, marca_auto=:marca_auto, modelo=:modelo, km_auto=:km_auto, precio=:precio, descripcion_auto=:descripcion_auto";
        #prepare - Preparacion de la ejecucion o query
        #execute - Efectua la insercion
        $insertar = $conexion->prepare($query)->execute($registro);

      } catch (Exception $error) {
        echo "ERROR {$error->getMessage()}";
      }
    }

    
    public function consultar($registro){
      $conexion = parent::connectDB();
      try {
         $query = "SELECT * FROM `autos`.$this->tabla";
        #prepare - Preparacion de la ejecucion o query
        #execute - Efectua la insercion
        $consulta = $conexion->query($query)->fetchAll();
        return $consulta;
      } catch (Exception $error) {
        echo "Error {$error->getMessage()}";
      }
    }


    public function actualizar($registro){
      $conexion = parent::connectDB();
      try {
        $query = "UPDATE $this->tabla SET precio=:precio, descripcion_auto=:descripcion_auto, nombre_auto=:nombre_auto WHERE auto_id=:auto_id";
        $actualizacion = $conexion->prepare($query)->execute($registro);
      } catch (Exception $error) {
        echo "Error {$error->getMessage()}";
      }
    }


    public function eliminar($registro){
      $conexion = parent::connectDB();
      try {
        
      } catch (Exception $error) {
        echo "Error {$error->getMessage()}";
      }
    }
  }
?>