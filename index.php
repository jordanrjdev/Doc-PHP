<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $var=[1,2,3,4,5,6,7,8,9];
    /*
    if ($var === "hola") {
      echo "Excelente";
    }else {
      echo "Error";
    }*/

    // switch ($var) {
    //   case 'hola':
    //     echo "HOLAS";
    //     break;
    //   default:
    //     echo "xd";
    //     break;
    // }
    echo"<pre>";
    print_r($var);
    echo "</pre>";
    echo "<hr>";
    var_dump($var);
  ?>

  <?php 
    echo "<hr>";
    $var[]=16; 
    print_r($var);
    echo "<hr>"; 
    $ultimo = array_pop($var); 
    echo $ultimo;
    echo "<hr>"; 
    unset($var[2]);
    print_r($var);
    echo "<hr>"; 
    $primero = array_shift($var);
    echo $primero;
    echo "<hr>"; 
    // Remover ciertos elementos 
    $var=[1,2,3,4,5,6,7,8,9];
    $array_elim = array_splice($var, 4, 1, array("holas"));
    print_r($array_elim); 
    echo "<br>";
    print_r($var) ;
  ?>

  <h1>Hola</h1>
</body>
</html>