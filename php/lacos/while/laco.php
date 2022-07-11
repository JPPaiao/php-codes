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
            $c = 0;
            while ($c <= 5) {
                $v = "num".$c;
                $$v = isset($_GET["v$c"]) ? $_GET["v$c"] : 0;
                $c++;
            };

            echo "$num1 $num2 $num3 $num4 $num5"
        ?>
    </div>
</body>
</html>