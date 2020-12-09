<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
</head>

<body>
  <h1>PHP y MySQL</h1>
  <pre>
  <?php var_dump(PDO::getAvailableDrivers()); ?>
  </pre>
  <?php 

    require_once "autosmodelo.php";
    $autos = new Autosmodelo();

    // $auto = [
    //   "auto_id" => "19",
    //   "nombre_auto" => "Emotion",
    //   "marca_auto" => "Chevrolet", 
    //   "modelo" => 2010,
    //   "km_auto" => 10000, 
    //   "precio" => 20000,
    //   "descripcion_auto" => "Este es un muy buen auto para pasear junto con tus seres queridos"
    // ];
    $auto = [
      "auto_id" => "19",
      "nombre_auto" => "Emotion",
      "precio" => 20000,
      "descripcion_auto" => "Este es un muy buen auto para pasear junto con tus seres queridos"
    ];
  ?>
  <pre>
  <?php
    // $autos->insertar($auto);
    $registros = $autos->consultar($auto);
    foreach ($registros as $coche ) {
      echo "<p>ID : {$coche["auto_id"]}</p>";
      echo "<p>Marca : {$coche["marca_auto"]}</p>";
      echo "<p>Modelo : {$coche["modelo"]}</p>";
      echo "<p>KM : {$coche["km_auto"]}</p>";
      echo "<p>Precio : {$coche["precio"]}</p>";
      echo "<p>Nombre : {$coche["nombre_auto"]}</p>";
      echo "<p>Descripcion : {$coche["descripcion_auto"]}</p>";
      echo "<hr>";
    }

    // $autos->actualizar($auto);

    ?>
  </pre>
</body>

</html>