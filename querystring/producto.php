<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto</title>
</head>

<body>
  <p>Producto</p>
  <pre>
  <?php 
    var_dump($_GET);
  ?>
  </pre>
  <p>ID: <?php echo htmlspecialchars($_GET["id"]);  ?></p>
</body>

</html>