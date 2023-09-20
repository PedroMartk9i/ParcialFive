<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seccion 2 </title>
</head>
<body>
    <h1>FIESTA EN BUCARAMANGA</h1>
    <h2>Integrantes aqui</h2>
    <form action="seccion2.php" method="get">
    
        Ingresos:
        <input type="text" name="totales" id="01">
        <input type="submit" value="Enviar">

    </form>

    <h3>
        <?php

            $ingresos= array();
            $suma=0;
            

            if ($_SERVER["REQUEST_METHOD"]=="GET"){
                if (isset($_GET['totales'])){
                    $ingreso= $_GET['totales'];
                    if ($ingreso==0){
                        echo "Edades ingresadas: " . implode(", ", $ingresos);
                        echo "<br> Suma total de ingresos: " . $suma;
                    } else {
                        // Verifica si el ingreso es un número válido antes de agregarlo al array
                        if (is_numeric($ingreso)) {
                            $ingresos[] = $ingreso; // Agrega el ingreso al array
                            $suma += (float)$ingreso; // Actualiza la suma

                        }
                }    }
            }
            

        ?>
    </h3>
    
</body>
</html>

