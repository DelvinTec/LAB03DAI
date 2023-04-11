<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if ($numero2 != 0) {
    if ($numero1 > $numero2) {
      $suma = $numero1 + $numero2;
      $diferencia = $numero1 - $numero2;
      echo "<h1>La suma es: " . $suma . "</h1><br>";
      echo "<h1>La diferencia es: " . $diferencia . "</h1><br>";
    } else {
      $producto = $numero1 * $numero2;
      $division = $numero1 / $numero2;
      echo "<h1>El producto es: " . $producto . "</h1><br>";
      echo "<h1>La división es: " . $division . "</h1><br>";
    }
  } else {
    echo "El segundo número no puede ser cero.\n";
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
</body>
</html>