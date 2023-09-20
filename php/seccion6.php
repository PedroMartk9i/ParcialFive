<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculadoraPHP</title>
</head>

<body>
    <h1>Seccion 6</h1>
    <h2>Comprobar si dos numeros son amigos</h2>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Número 1</label>
        <input type="number" name="n1" required>
        <br><br>
        <label>Número 2</label>
        <input type="number" name="n2" required>
        <br><br>

        <input type="submit" value="Ver si es amigo" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $contador1 = 0;
        $contador2 = 0;
        for ($i = 1;; $i++) {
            if ($i == $n1) {
                break;
            }
            if(is_int($n1/$i)==1) {
                $contador1=$contador1+$i;
            }
        }
        for ($i = 1;; $i++) {
            if ($i == $n2) {
                break;
            }
            if(is_int($n2/$i)==1) {
                $contador2=$contador2+$i;
            }
        }

        if (($contador1==$n2) and ($contador2==$n1)) {
            echo "<br>Los numeros son amigos";
        } else {
            echo "<br>Los numeros no son amigos";
        }
        
    }

    ?>
</body>

</html>