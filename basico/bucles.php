<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bucles</title>
</head>

<body>

  <?php //For loops ?>

  <?php 
    for ($i=1; $i < 11; $i++) { 
      echo $i; 
      echo "<br>";  
    }
  ?>

  <?php //while loops ?>

  <?php
    $premiere_league = array("chelsea", "arsenal", "liverpool", "manchester city", "tottenham");
    $i = 0;
    while ($i < count($premiere_league)) {
      if(count($premiere_league)>0){
        echo $premiere_league[$i] . "<br>";
        if($i+1 == count($premiere_league)){
          echo "Fin";
        }
        $i++;
      }else{
        echo "No hay resultados";
      }
    }
  ?>
</body>

</html>