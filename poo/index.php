<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO Avanzado</title>
</head>

<body>
  <h1>POO Avanzado</h1>
  <?php 
    define("INC", "/includes/");
    require_once __DIR__ . INC . "curso.inc.php";
  ?>
  <pre>
  <?php
    $curso_php = new Curso("Curso PHP", "Jordan Jaramillo", "3 sesiones", 10, true);
    var_dump($curso_php);
    ?>
  </pre>
</body>

</html>