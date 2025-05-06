<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexao PHP</title>
</head>
<body>
    <?php
    //DETALHERS DOS ERROS DO MYSQLI
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        function conectadb(){
            $endereco = "localhost"; // endereco do servidor Mysqli
            $usuario = "root"; //nome do usuario
            $senha = ""; //senha do banco de dados 
            $banco = "Empresa";
        

        try {
            $con = new mysqli($endereco, $usuario, $senha, $banco);
            $con ->set_charset("utf8mb4");
            return $con;
        } catch (Exception $e) {
            die ("Erro na conexão:".$e ->getMessage());
        }
    }
    ?>
</body>
</html>