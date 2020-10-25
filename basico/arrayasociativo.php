<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Array asociativo</h1>
  <pre>
  <?php 
    $persona = array(
      "nombre" => "Jordan", 
      "pais" => "Ecuador", 
      "profesion" => "desarrollador web"
    );
    print_r($persona);
    ?>
  </pre>
  <?php echo $persona["nombre"];?>
    <hr>
  <?php
    print_r(array_values($persona));
  ?>
  <hr>
  <?php
    print_r(array_keys($persona));
  ?>
</body>
</html>