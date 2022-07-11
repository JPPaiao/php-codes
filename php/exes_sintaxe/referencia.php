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
            $a = 3;
            $b = $a;
            $b += 5;
            echo $a . " " . $b;

            $c = 3;
            $d = &$c;
            $d += 5;
            echo "<br/>" . $c . " " . $d . "<br/>";

            $site = "cursoemvideo";
            $$site = "cursoPHP";
            echo $site . "<br>";
            echo $cursoemvideo;
        ?>
    </div>
</body>

</html>