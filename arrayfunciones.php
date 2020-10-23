<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=|, initial-scale=1.0">
  <title>funciones Array</title>
</head>

<body>
  <?php
    $tecnologias = ["html", "css", "javascript"];
    var_dump(in_array("css", $tecnologias));
  ?>
  <hr>
  <?php 
    $persona = array(
      "nombre" => "Jordan", 
      "pais" => "Ecuador", 
      "Profesion" => "Desarrolador web"
    );
    $persona2 = in_array("Jordan",array_values($persona)); 
    var_dump($persona2);
  ?>

  <hr>

  <?php 
    echo "Foreach";
    echo "<br>";
    foreach ($tecnologias as $tecnologia) {
      print_r($tecnologia);
      echo "<br>";
    }
  ?>

  <hr>

  <?php 
    echo "Foreach";
    echo "<br>";
    foreach ($persona as $key => $val) {
      echo $key . ": " . $val; 
      
      echo "<br>";
    }
  ?>

  <p>Recorriendo array multidimensional</p>
  <hr>
  <?php 
    $persona2 = array(
      "datos" => array(
        "nombre" => "Jordan", 
        "pais" => "Ecuador", 
        "profesion" => "desarrollador web"
      ), 
      "lenguajes" => array(
        "frontend" => array("js", "html", "css", "jquery"), 
        "backend" => array("php", "node", "mongodb")
      ));
      foreach ($persona2["datos"] as $data) {
        echo $data;
        echo "<br>";
      }
      
      foreach ($persona2 as $len) {
        if (array_key_exists("frontend", $len)) {
          foreach ($len["frontend"] as $fron ) {
            echo $fron;
            echo "<br>";
          }
        }
      }
  ?>
</body>

</html>