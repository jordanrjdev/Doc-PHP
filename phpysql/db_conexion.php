<?php 
  //Pdo es la manera recomandable para conectarte en la base de datos
  const DB = "mysql";
  const DB_SERVIDOR = "localhost";
  const DB_CHARSET = "utf8";
  abstract class BD{
    private static $dbUsuario = "root"; 
    private static $dbPass = ""; 
    private static $dbServidor = DB_SERVIDOR; 
    private static $dbNombre = "autos"; 
    private static $dbCharset = DB_CHARSET;
    private $conexion;

    public function connectDB(){
      try {
        $cadena = "mysql:host=".self::$dbServidor.";dbname=".self::$dbNombre;
        $pdo = new PDO($cadena, self::$dbUsuario, self::$dbPass);
        $pdo->exec("SET CHARACTER SET ". self::$dbCharset);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
      } catch (PDOException $error) {
        echo "Error {$error->getMessage()}";
      }
    }

    private function desconectar(){
      $this->conexion = null;
    }

    //c-r-u-d
    abstract protected function insertar($registro);
    abstract protected function consultar($registro);
    abstract protected function actualizar($registro);
    abstract protected function eliminar($registro);
  }

?>