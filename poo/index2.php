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
    require_once __DIR__ . INC . "persona.inc.php";
  ?>
  <pre>
  <?php
    $curso_php = new Curso("Curso PHP", "Jordan Jaramillo", "3 sesiones", 10, true);
    var_dump($curso_php);
    var_dump($curso_php->getTitulo());
    var_dump($curso_php->getProfesor());
    $curso_php->setTitulo("Curso js");
    var_dump($curso_php->getTitulo());

    $curso_php->setRequerimiento(["php desde cero", "ganas de aprender", "practica"]);

    $curso_php->getRequerimiento();
    echo Curso::$moneda;
    echo Curso::getMoneda();

    ?>

  </pre>
</body>

</html>