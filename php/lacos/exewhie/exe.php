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
        <form action="exex.php" method="get">
            Inicio: <input type="number" name="ini">
            Final: <input type="number" name="fim">
            <label for="iinc">Increment: </label>
            <select name="inc" id="iinc">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>