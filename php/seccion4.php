<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Verificar Números Primos</h1>
    <form method="post" action="seccion4.php">
        <label for="numero">Ingrese un número (mayor o igual a 11):</label>
        <input type="number" id="numero" name="numero" min="11" required>
        <input type="submit" value="Verificar">
    </form>

<div id="output">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user input from the form
    $numero = $_POST['numero'];
    // Resto del código...
}


function esPrimo($numero){
    if($numero<=1){
        return false;
    }
    if($numero<=3){
        return true;
    }
    if($numero %2==0 || $numero %3==0){
        return false;
    }
    $i = 5;
    while($i * $i <= $numero){
        if($numero % $i == 0 || $numero % ($i+2) == 0){
            return false;
        }
        $i += 6;
    }
    return true; // Devuelve true si es primo
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user input from the form
    $numero = intval($_POST['numero']);
    
    if ($numero >= 11) {
        $contadorPrimos = 0;
        for($i = 11; $i <= $numero; $i++) {
            if (esPrimo($i) && strpos(strval($i), '1') === 0) {
                $contadorPrimos++;
            }
        }
        echo "<br/>";
        echo "<h3>Cantidad de números primos mayores o iguales a 11 que comienzan con 1  = $contadorPrimos</h3>";
    } else {
        echo "El número debe ser mayor o igual a 11.";
    }
}
?>

</body>
</html>

