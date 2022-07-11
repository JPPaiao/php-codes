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
        <form action="laco.php" method="get">
            <?php
                $contador = 0;
                while ($contador <= 5) {
                    echo "Valor $contador: <input type='number' name='v$contador' max='100' min='0' value='0'>";
                    $contador++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>