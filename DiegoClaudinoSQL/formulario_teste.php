<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Teste inseguro</h1>
<form action="login_inseguro.php" method="POST">
    <input type="text" name="nome" placeholder="Digite Seu Nome">
    <button type="submit">Entrar</button>
</form>
<h1>Teste seguro</h1>
<form action="login_seguro.php" method="POST">
    <input type="text" name="nome" placeholder="Digite Seu Nome">
    <button type="submit">Entrar</button>
</form>
</body>
</html>
