<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta MySQLi</title>
</head>
<body>
    <?php
        $nomeservidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancodedados = "Empresa";

        //criacao da conexao com MySQL
        $conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

        if (!$conn) { // caso a conexao falhe
            die("Conecxão Falhou: ".mysqli_connect_error());
        }

        mysqli_set_charset($conn,  "utf8mb4");
        
        echo "Conexão bem-sucedida!";

        $sql = "SELECT id_cliente , nome , email FROM cliente";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            while ($linha = mysqli_fetch_assoc($result)){
                echo "ID:" .$linha["id_cliente"]. "- Nome:" .$linha["nome"]. "- Email:"
                .$linha["email"]. "<br/>";} 
            }else {
                echo "Nenhum resultado encontrado.";}

                mysqli_close($conn);
        ?>
</body>
</html>