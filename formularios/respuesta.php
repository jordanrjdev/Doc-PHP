<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Aprendiendo PHP</title>
  <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

  <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
</head>

<body>

  <div class="contenedor">
    <h1>Aprendiendo PHP</h1>
    <pre>
      <?php $resultado = $_POST ?>
      <?php $nombre = $resultado["nombre"] ?>
      <?php $apellido = $resultado["apellido"] ?>
    </pre>
    <!-- Validacion de inputs -->
    <?php if(!(filter_has_var(INPUT_POST, "nombre") && (strlen(filter_input(INPUT_POST, "nombre")) > 0))){
      echo "El nombre es obligatorio";
    }else{
      echo "<p>Nombre: " . $nombre ."</p>"; 
    }
    ?>

    <?php if(!isset($apellido) || trim($apellido) !== ""){ 
      echo" <p>Apellido: " . $apellido ."</p>";
    } else{
      echo "El apellido es obligatorio";
    } ?>
    <!-- Validacion de inputs -->

    <hr>
    <!-- Validar chechboxes (singular) -->
    <pre>
      <?php 
        if(isset($_POST["notificaciones"])){
          $notificaciones = $_POST["notificaciones"];
          if($notificaciones == "on"){
            echo "Se ha inscrito correctamente a las notificaciones";
          }
        }
        ?>
    </pre>
    <!-- Validar chechboxes (singular) -->
    <hr>
    <!-- Validar chechboxes (Plural) -->
    <pre>
    <?php if(isset($_POST["curso"])){
      $cursos = $_POST["curso"];
      foreach ($cursos as $curso ) {
        echo "<p>Curso: " . $curso . "</p><br>";
      }
    }?>
    </pre>
    <!-- Validar chechboxes (Plural) -->
    <hr>
    <!-- Validar select -->
    <pre>
      <?php if(isset($_POST["area"])){
        switch ($_POST["area"]) {
          case 'be':
            echo "backend";
          break;
          case "fe": 
            echo "frontend";
          break;
          case "fs":
            echo "fullstack";
          break;
          default: 
          echo "Elige un area por favor";
        break;
      }
    }?>
    </pre>
    <!-- Validar select -->
    <hr>
    <!-- Validar radio button -->
    <pre>
    <?php if(array_key_exists("opciones", $_POST)){
      switch ($_POST["opciones"]) {
        case 'pres':
          echo "Selecciono presencial";
        break;
        case "online":
          echo "selecciono online";
        break;
        default:
        # code...
      break;
    }
    }else{  
      echo "Seleccione una modalidad por favor";
    } 
    ?>
    </pre>
    <!-- Validar radio button -->
    <hr>
    <!-- Validar text area -->
    <pre>
    <?php var_dump($_POST); ?>
    <?php if(isset($_POST["mensaje"])){
      $mensaje = $_POST["mensaje"];
      // $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
      $nuevo_mensaje = htmlspecialchars($mensaje);
      if(strlen($nuevo_mensaje)>0 && trim($nuevo_mensaje)){
        echo "<h2>Mensaje</h2>";
        echo $nuevo_mensaje . "<br>";
      }else{
        echo "El mensaje esta vacio";
      }
    }?>
    </pre>
    <!-- Validar text area -->

  </div>
</body>

</html>