<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
<?php
    require_once "conexao.php";

    $conexao = conectadb();

    $nome = "Diego Claudino Florentino";
    $endereco = "Rua Kalamango, 32";
    $telefone = "(41) 5555-5555";
    $email = "DiegoClaudino@teste.com";

    $stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss",$nome, $endereco, $telefone, $email);
    
    if ($stmt->execute()){
        echo "cliente adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar cliente:".$stmt->error;
    }

    $stmt->close();
    $conexao->close();
    ?>
</body>
</html>