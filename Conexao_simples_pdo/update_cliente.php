<?php
    require_once "conexao.php";

    $conexao = conectadb();

    $nome = "Diego Claudino Florentino";
    $endereco = "Rua kalamargo, 32";
    $telefone = "(41) 5555-5555";
    $email = "DiegoClaudino@teste.com";
    // Pedro Rocha

    $id_cliente = 5;

    $stmt = $conexao->prepare("UPDATE cliente SET nome =?, endereco =?, telefone =?, email =? WHERE id_cliente =?");

    $stmt->bind_param("ssssi", $nome, $endereco, $telefone, $email, $id_cliente);

    if ($stmt->execute()) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente:" .$stmt->error;
    }

    $stmt->close();
    $conexao->close();
?>