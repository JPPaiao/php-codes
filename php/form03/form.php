<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP</title>
    <?php
        $texto = isset($_GET["t"]) ? $_GET["t"] : "[Sem texto]";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "14pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000";
    ?>
    <style>
        .texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$texto</span>";
        ?>
        <br>
        <a href="./form.html">Voltar</a>
    </div>
</body>
</html>