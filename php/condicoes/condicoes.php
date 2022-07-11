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
            $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
            $operacao = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch ($operacao) {
                case 1:
                    $resposta = $numero * 2;
                    break;
                case 2:
                    $resposta = $numero ^ 3;
                    break;
                case 3:
                    $resposta = sqrt($numero);
            };
            echo "O resultado da operação é $resposta";
        ?>
        <a href="./condicoes.html">Voltar</a>
    </div>
</body>
</html>