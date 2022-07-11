<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $media = ($n1 + $n2) / 2;

            echo "As notas foram $n1 e $n2 <br>";

            $r = ($n1 > 7) ? "aprovado" : "reprovado";
            echo "Sua nota foi $media, você esta $r";
        ?>
    </div>
</body>
</html>