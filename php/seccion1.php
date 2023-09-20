<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cifrador_estilos.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrando Digitos</title>
</head>

<body>
    <h1>Cifrador de digitos</h1>
    <h3>Ingrese los 4 digitos </h3>

    <form method="post" action="seccion1.php">
        <input type="text" name="cuatroNumeros">
        <input type="submit" value="Enviar">
    </form>
    <h1></h1>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $numeroReal = $_POST["cuatroNumeros"];
    $numeroDividido = str_split($numeroReal);

    $numero1 = ($numeroDividido[0] + 7)%10;
    $numero2 = ($numeroDividido[1] + 7)%10;
    $numero3 = ($numeroDividido[2] + 7)%10;
    $numero4 = ($numeroDividido[3] + 7)%10;

    $nuevoNumero = [$numero3, $numero4, $numero1, $numero2];
    
    $numeroCifrado = implode($nuevoNumero);

    echo "El valor retornado es: ". $numeroCifrado;
?>
</body>

</html>