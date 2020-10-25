<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones</title>
</head>

<body>
  <?php 
    function saludar(){
      echo "Hola amigos";
    }
    saludar();
  ?>
  <hr>
  <!-- Funciones que returnan un valor -->
  <?php
    function suma($a = 1,$b = 2){
      $result = $a +$b;
      return "El resultado es " . $result;
    }
    $num = suma(8,8);
    echo $num;
    echo "<hr>";
    $num2 = suma(); 
    echo $num2;
  ?>

</body>

</html>