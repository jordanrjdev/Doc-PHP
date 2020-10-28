### Variables

```
$a = 8;  --variable tipo numerica
$b = "hola mundo"; variable tipo string
```

En php Se pueden usar bases como por ejemplo

```
$octal = 0755; //493
$binario = 0b1010; //10
$hexadecimal =  0xC4E; //3150
```

Se puede obtener el tipo con:

```
echo gettype($nombre);
```

### Operadores de asignacion

```
$a += 5 // $a = $a + 5;
$a -= 5 // $a = $a -  5;
$a *= 5 // $a = $a *  5;
$a /= 5 // $a = $a / 5;
$a .= 5 // $a = $a. " ". 5;
```

### Constantes

No pueden cambiar en la ejecucion del programa

```
define(constante, valor);
define("PI", 3.141612);
define("URL", "http://localtost");
```

### Funciones

```
function saludar(){echo "Hola mundo ";}
```

### Arreglos indexados

```
$numeros = array(1,2,3,4,5,6,7);
```

### Arreglos asociativos

```
$persona = array(
  "nombre" => "jordan",
  "edad" => 15,
  "apellido" => "jaramillo"
)
```

### Dividir arreglos

```
array_chunk($numeros, 2);
```

### Dividir arreglo y eliminar lo anterior

```
array_slice($numeros, 1);
```

### Unir arreglos

```
array_merge($numeros, $frutas);
```

### Buscar elementos en un arreglo

```
$buscar = array_search(3, $numeros);
```

### Desactivar notificaciones de error

```
error_reporting(0);
$nombre = "hola";
echo $nombre;
echo $nombres;
```

### Guardar errores en un log

```
ini_set("log_errors", 1); --se guarda en un archivo
ini_set("error_log", "/tmp/php-error.log");
error_log("hay un error");
```

### Incluir archivos

```
require_once - Este requiere el codigo del archivo para que la app funcione en su totalidad
```

```
include_once - Este incluye el codigo del otro archivo pero si no lo encuentra la app se seguira ejecutando
```

### Constructor

```
__construct() // Esta es la manera de definir el constructor de una clase en php
```

### Datos por referencia Ejemplo

```
$variable = "Hola ";
$nueva_variable = &$variable; -- esta valdra "HOla mundo, es decir se afecta si le cambiomos el valor a $variable
$variable = "HOla mundo";
```

### Para herencia multiple en PHP usamos un trait Compra {

```
private $compra;

    public function validarCompra (){
      return "Compra exitosa";
    }

}
```

A diferencia de las interfaces los trait permiten escribir la logica de metodos dentro de estas las interfaces no.

### Manejo de errores con php

```
try {
  if(empty($this->nombre)){
    throw new Exception("No indicaste un nombre");
  }else{
    $this->nombre = $nombre;
  }
} catch (Exception $err) {
  echo $err->getMessage();
}
```

### MVC

Logra que las solicitudes pasen por donde deban pasar
M es el modelo de los datos, validacion, consultas, inserciones, e incluso conexion a base de datos
V son las vistas en la cual se pintan los datos
C diseña todo el flujo de nuestro trabajo este es el que responde las solicitudes al usuario

### Conexion php y mysql

PDO es la manera recomandable para conectarte en la base de datos

```
function connectDB(){
  try {
    $cadena = "mysql:host=localhost;dbname=autos";
    $conexion = new PDO($cadena, "root", "");
    return true;
  } catch (PDOException $error) {
    echo "Error {$error->getMessage()}";
  }
}
```

Para saber que drivers tenemos en nuestra maquina de PDO ejecutamos la siguiente linea

```
var_dump(PDO::getAvailableDrivers());
```

Habilitando mensajes de errores en PDO

```
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
```

Trayendo el primer documento de mi consulta

```
public function consultar($registro){
      $conexion = parent::connectDB();
      try {
         $query = "SELECT * FROM `autos`.$this->tabla";
        #prepare - Preparacion de la ejecucion o query
        #execute - Efectua la insercion
        $consulta = $conexion->query($query)->fetch();
        return $consulta;
      } catch (Exception $error) {
        echo "Error {$error->getMessage()}";
      }
    }
```

Trayendo Todos los registros

```
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
```
