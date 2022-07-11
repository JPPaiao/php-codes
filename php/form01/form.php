<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["valor"];
            echo "Valor digitado $valor";
        ?>
        <a href="./form.html">Voltar</a>
    </div>
</body>
</html>