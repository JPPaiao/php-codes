<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Cadastrar</h1>
        <form action="?page=savar" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            Nome: <input type="text" name="nome" id="nome">
            Email: <input type="emai" name="email" id="email">
            Passaword: <input type="password" name="senha" id="senha">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>