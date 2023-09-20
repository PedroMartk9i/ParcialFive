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

           
            //Creamos un array que guardara las edades ingresadas
            
            //Contador de ingresos

            session_start();
            

             if (!isset($_SESSION['ingresos'])){
                $_SESSION['ingresos']=array();
                $_SESSION ['suma']=0;
             }
            


            
            

            if ($_SERVER["REQUEST_METHOD"]=="GET"){
                if (isset($_GET['totales'])){
                    $ingreso= $_GET['totales'];


                    if ($ingreso==0){
                        echo "Edades ingresadas: " . implode(", ", $_SESSION['ingresos']);
                        echo "<br> Suma total de ingresos: " . $_SESSION['suma'];
                    } else {
                        // Verifica si el ingreso es un número válido antes de agregarlo al array
                        if (is_numeric($ingreso)) {
                            $_SESSION['ingresos'][] = $ingreso; // Agrega el ingreso al array
                            $_SESSION['suma'] ++;

                        }
                }    }
            }
            

        ?>
    </h3>
    
</body>
</html>

