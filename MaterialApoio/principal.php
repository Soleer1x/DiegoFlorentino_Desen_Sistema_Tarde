<?php
    session_start();
    require_once 'conexao.php';

    if (!isset($_SESSION['usuario'])) {
        header("location: login.php");
        exit();  // Após esse comando, o código não deve continuar
    }

    // Obtendo o nome do perfil do usuário logado
    $id_perfil = $_SESSION['perfil'];
    $sql = "SELECT nome_perfil FROM perfil WHERE id_perfil = :id_perfil";  // Corrigi a query
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_perfil', $id_perfil);
    $stmt->execute();
    $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
    $nome_perfil = $perfil['nome_perfil']; 

    // Definindo as permissões de acordo com o perfil
    $permissoes = [
        1 => [
            "Cadastrar" => [
                "cadastro_usuario.php", "cadastro_perfil.php", "cadastro_cliente.php",
                "cadastro_fornecedor.php", "cadastro_produto.php", "cadastro_funcionario.php"
            ],
            "Buscar" => [
                "buscar_usuario.php", "buscar_perfil.php", "buscar_cliente.php",
                "buscar_fornecedor.php", "buscar_produto.php", "buscar_funcionario.php"
            ],
            "Alterar" => [
                "alterar_usuario.php", "alterar_perfil.php", "alterar_cliente.php",
                "alterar_fornecedor.php", "alterar_produto.php", "alterar_funcionario.php"
            ],
            "Excluir" => [
                "excluir_usuario.php", "excluir_perfil.php", "excluir_cliente.php",
                "excluir_fornecedor.php", "excluir_produto.php", "excluir_funcionario.php"
            ]
        ],
        2 => [
            "Cadastrar" => ["cadastro_cliente.php"],
            "Buscar" => ["buscar_cliente.php", "buscar_fornecedor.php", "buscar_produto.php"],
            "Alterar" => ["alterar_cliente.php", "alterar_fornecedor.php"]
        ],
        3 => [
            "Cadastrar" => ["cadastro_fornecedor.php", "cadastro_produto.php"],
            "Buscar" => [
                "buscar_usuario.php", "buscar_perfil.php", "buscar_cliente.php", 
                "buscar_fornecedor.php", "buscar_produto.php", "buscar_funcionario.php"
            ],
            "Alterar" => [
                "alterar_usuario.php", "alterar_perfil.php", "alterar_cliente.php", 
                "alterar_fornecedor.php", "alterar_produto.php", "alterar_funcionario.php"
            ],
            "Excluir" => [
                "excluir_usuario.php", "excluir_perfil.php", "excluir_cliente.php",
                "excluir_fornecedor.php", "excluir_produto.php", "excluir_funcionario.php"
            ]
        ]
    ];

?>
