variables
$a = 8;  --variable tipo numerica 
$b = "hola mundo"; variable tipo string

funciones
function saludar(){echo "Hola mundo ";}

arreglos indexados
\$numeros = array(1,2,3,4,5,6,7);

arreglos asociativos

dividir arreglos
array_chunk(\$numeros, 2);

dividir arreglo y eliminar lo anterior
array_slice(\$numeros, 1);

unir arreglos
array_merge($numeros, $frutas);

buscar elementos en un arreglo
$buscar = array_search(3, $numeros);

desactivar notificaciones de error
error_reporting(0);
$nombre = "hola";
echo $nombre;
echo \$nombres;

guardar errores en un log
ini_set("log_errors", 1); --se guarda en un archivo
ini_set("error_log", "/tmp/php-error.log");
error_log("hay un error");

require_once - Este requiere el codigo del archivo para que la app funcione en su totalidad

include_once - Este incluye el codigo del otro archivo pero si no lo encuentra la app se seguira ejecutando

\_\_construct() - Esta es la manera de definir el constructor de una clase en php
