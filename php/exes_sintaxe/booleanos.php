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
            $ano = $_GET["a"];
            $idade = 2022 - $ano;

            $tipo = ($idade >= 18 && $idade < 64 ) ? "voto OBRIGATÓRIO" : "voto NÃO OBRIGATÓRIO";
            echo "Quem nasceu em $ano tem $idade anos <br>";
            echo "Portanto este eleitor tem um " . $tipo ;
        ?>
    </div>
</body>
</html>