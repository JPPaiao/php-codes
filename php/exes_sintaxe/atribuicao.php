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
            $preco = $_GET["x"];
            $desconto = $_GET["y"];
            $novo_preco = $preco - (($preco * $desconto) / 100);
            echo "O preço do produto é R$" . number_format($preco, 2) . " e o desconto é $desconto";
            echo "<br>O preço com o desconto é R$" . number_format($novo_preco, 2)
        ?>
    </div>
</body>
</html>