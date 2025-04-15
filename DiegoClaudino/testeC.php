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
        //Declara variavel numerica
        echo $umidade = 91;
        //testa se $umidade maior que 90. Retorna um boolean
        echo $vaiChover = ($umidade > 90);
        //testa se $vaiChover é verdadeiro
        if ($vaiChover)
        {
            echo "Vai chover com toda certeza absoluta da terra!";
        }
        echo "<br>";
    ?>

    <?php 
        echo $a = 17;
        if ($a > 17)
        print "maior de idade. <br\>";
    else 
    print " menor de idade. <br\>";
    ?>
</body>
</html>