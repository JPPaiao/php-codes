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
        /**
         * Esse exercício serve para aprender incrementos
         * Se eu colocar na frente ele incremeta primeiro depois mostra na tela
         * Se eu colocar depois, ele primeiro mostra na tela e depois incrementa
         */
        $ano_atual = $_GET["aa"]; # Essa linha vai pegar o paramentro da URL
        echo "O ano atual é $ano_atual e o ano anterior é " . --$ano_atual;
        ?>
    </div>
</body>

</html>