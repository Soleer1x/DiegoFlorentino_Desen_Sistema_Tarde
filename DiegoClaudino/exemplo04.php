<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            echo " <h1 align='center'> Diego Claudino Florertino </h1>";
        ?>
    <?php
        $cores = array("amarelo", "vermelho", "verde", "Azul");
        foreach ($cores as $cor)
        {
            echo $cor. "<br/>";
        }
    ?>
    <?php
echo "<br/>";
    ?>
    <?php
    $musicas = array (
        array ("kid abelha", "Amanha", 1993),
        array ("Ultrage a Rigor", "Pelados", 1985),
        array ("Paralamas do Sucesso", "Alagados", 1987));
        for ($linha=0; $linha < 3; $linha++)
        {
            for ($coluna=0; $coluna < 3; $coluna++)
            {
                echo $musicas [$linha][$coluna]. " | ";
            }
            echo "<br/>";
        }
    ?>

    <?php 
        echo "<br/>";
        $AmazonProducts = array (
            array("Codigo" => "Livro", "Descrição" => "Livros", "Preço" => 50),
            array("Codigo" => "DVDs", "Descrição" => "Filmes", "Preço" => 15),
            array("Codigo" => "CDs", "Descrição" => "Musica", "Preço" => 20),
        );
        for ($linha = 0; $linha < 3; $linha++) { ?>
            <p> | <?= $AmazonProducts[$linha]["Codigo"] ?>
                | <?= $AmazonProducts[$linha]["Descrição"] ?>
                | <?= $AmazonProducts[$linha]["Preço"] ?>
        </p>
            <?php
        }
?>
</body>
</html>