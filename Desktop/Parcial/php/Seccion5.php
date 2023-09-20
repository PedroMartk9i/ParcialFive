<!DOCTYPE html>
<html>
<head>
    <title>Seccion 5</title>
</head>
<body>
    <h1>Seccion 5: Numeros cubifinitos</h1>

    <form method="post" action="index.php">
        <label for="message">Ingresa el numero:</label>
        <input type="text" name="message" id="message" required>
        <input type="submit" value="Enviar">
    </form>

    <div id="output">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the user input from the form
            $message = $_POST['message'];

            // Update the HTML content with the user's input
            echo "<p>Numero de entrada: $message</p>";
            $inputString = $message; // Replace with your input string

            // Initialize a variable to store the sum
            $sum = 0;
            $myArray = [];

            // Iterate through each character in the string
            for ($i = 0; $i < strlen($inputString); $i++) {
                // Get the current digit as an integer
                $digit = intval($inputString[$i]);

                // Raise the digit to the power of 3
                $cubedDigit = pow($digit, 3);

                // Add the cubed digit to the sum
                $sum += $cubedDigit;
            }

            $final = false;
            $cubinfinito = false;
            $anterior = $message;
            while ($final == false) {
                if ($sum == 1) {
                    echo $message . "-1 -> cubinfinito";
                    $final = true;
                } else if ($anterior == $sum) {
                    echo $sum . "- " . $sum . "-> no cubinfinito";
                    $final = true;
                } else {
                    echo $anterior . " - ";
                    $myArray[] = $anterior;
                    $anterior = $sum;
                    $inputString = strval($sum);

                    if (in_array($sum, $myArray)) {
                        $final = true;
                        echo $sum . " -> no cubifinito";
                    } else {
                        $sum = 0;
                        for ($i = 0; $i < strlen($inputString); $i++) {
                            // Get the current digit as an integer
                            $digit = intval($inputString[$i]);

                            // Raise the digit to the power of 3
                            $cubedDigit = pow($digit, 3);

                            // Add the cubed digit to the sum
                            $sum += $cubedDigit;
                        }
                    }
                }
            }
        }
        ?>
    </div>
</body>
</html>
