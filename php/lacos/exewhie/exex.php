<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../style.css">
    <title>PHP</title>
</head>
<body>
    <div>
        <?php
            $inicio = isset($_GET["ini"]) ? $_GET["ini"] : 0;
            $final = isset($_GET["fim"]) ? $_GET["fim"] : 10;
            $incremento = isset($_GET["inc"]) ? $_GET["inc"] : 1;

            if ($inicio <= $final) {
                while ($inicio <= $final ) {
                    echo $inicio . "  ";
                    $inicio += $incremento;
                }
            } else {
                while ($inicio >= $final ) {
                    echo $inicio . "  ";
                    $inicio -= $incremento;
                }
            }

        ?>
    </div>
</body>
</html>