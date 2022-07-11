<?php
    /**
     * Tem que passar todos os parametros pro banco
     * se não ele não atualiza e não salva os dados
     * Nunca se esqueça do ID
     * ID SÃO CHAVES UNICAS
     */

    // include("config.php");
    $num = 11;
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $num++;
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $query = "INSERT INTO usuario(id, nome, email, senha, data_nasc) VALUES ('$num','$nome', '$email', '$senha', '2020-02-07')";
            $query02 = "SELECT * FROM  usuario";

            mysqli_query($mysql, $query);
            break;
        case 'editar':

            break;
        case 'excluir':

            break;
        default:
            # code...
            break;
    }
