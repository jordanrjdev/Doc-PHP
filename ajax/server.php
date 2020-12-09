<?php 
  $nombre = $_POST["nombre"];
  $pais = $_POST["pais"];

  if (empty($nombre) || empty($pais)) {
    echo "error";
  }else {
    echo "{$nombre} bienvenido que tal todo en {$pais}";
  }

  $num1 = $_GET["num1"]; 
  $num2 = $_GET["num2"];

  if(is_numeric($num1) && is_numeric($num2)){
    echo $num1 + $num2;
  }
  else {
    echo "Ingresa solo numeros";
  }
?>