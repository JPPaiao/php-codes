<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            echo "<br>A soma de $n1 + $n2 = ". ($n1+$n2);
            echo "<br>A subtração de $n1 - $n2 = ". ($n2-$n1);
            echo "<br>A multiplicação de $n1 * $n2 = ". ($n1*$n2);
            echo "<br>A divisão de $n1 / $n2 = ". ($n1/$n2);
            echo "<br>A modulo de $n1 % $n2 = ". ($n2%$n1);
            echo "<br>A média é = ". (($n2+$n1)/2);
        ?>
    </div>
</body>
</html>