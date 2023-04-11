<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];
$resultado1 = $numero1 + $numero2;
$resultado2 = $numero3 * $numero4;
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
    <h1>La suma es: <?php echo $resultado1 ?></h1>
    <h1>La multiplicación es: <?php echo $resultado2 ?></h1>
</body>
</html>