<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>arrays</title>
</head>

<body>
  <pre>
  <?php 
      $persona = array(
      "datos" => array(
        "nombre" => "Jordan", 
        "pais" => "Ecuador", 
        "profesion" => "desarrollador web"
      ), 
      "lenguajes" => array(
        "frontend" => array("js", "html", "css", "jquery"), 
        "backend" => array("php", "node", "mongodb")
      )
    );
    print_r($persona);
    ?>
  </pre>

</body>

</html>