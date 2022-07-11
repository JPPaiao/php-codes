<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: flex;
            align-items: center;
            width: 100%;

            font-family: Arial, Helvetica, sans-serif;
        }

        ul {
            list-style: none;
            display: flex;
        }

        li {
            padding: 0 10px;
        }

        a {
            text-decoration: none;
            color: #000;
        }

    </style>
</head>
<body>
    <div>
        <h1>Cadastro</h1>
        <ul>
            <li>
                <a href="?page=novo">Novo usuario</a>
            </li>
            <li>
                <a href="?page=listar">Lista usuario</a>
            </li>
        </ul>
    </div>
    <?php
        include("config.php");
        // mysqli_query($mysql, "CREATE TABLE test(id INT)");
        // mysqli_query($mysql, "INSERT INTO test(id) VALUES (1)");

        if (@$_REQUEST["page"] == "novo") {
            include("novo-user.php");
        } elseif (@$_REQUEST["page"] == "listar") {
            include("listar-user.php");
        } elseif (@$_REQUEST["page"] == "savar") {
            include("salvar-user.php");
        }
        ?>
</body>
</html>