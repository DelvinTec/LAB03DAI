<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

if($numero1 > $numero2 && $numero1 > $numero3){
    echo  "<h1>El número mayor es: " . $numero1 . "</h1>"; 
} elseif($numero2>$numero1 && $numero2>$numero3){
    echo  "<h1>El número mayor es: " . $numero2 . "</h1>";
} elseif($numero3>$numero1 && $numero3>$numero2){
    echo  "<h1>El número mayor es: " . $numero3 . "</h1>";
} elseif($numero1>$numero2 && $numero1==$numero3) {
    echo "<h1>El mayor número esta repetido y es: " . $numero1 . "</h1>";
} elseif($numero1>$numero3 && $numero1==$numero2) {
    echo "<h1>El mayor número esta repetido y es: " . $numero1 . "</h1>";
} else {
    echo "<h1>El mayor número esta repetido y es: " . $numero2 . "</h1>";
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