<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herencia</title>
</head>

<body>
  <?php 
    define("INC", "/includes/");

    include_once __DIR__ . INC . "Global.inc.php" ;

    // echo __DIR__;

    $juanito = new Estudiante("juanito", "alemaña", "juanito@gmail.com");

    
    echo $juanito->Bienvenida();
    echo "<br/>";
    echo $juanito->Despedida();
    echo "<br/>";
    echo $juanito::MONEDA;
    echo "<br/>";
    echo $juanito->validarCompra();
    $jorge = new Profesor("Jorge", "Ramirez", "jorge@.com");
    echo "<br/>";
    echo $jorge->Bienvenida();
    echo "<br/>"; 
    echo $jorge::MONEDA;
    echo "<br/>"; 
    echo $jorge->Despedida();
  ?>
</body>

</html>