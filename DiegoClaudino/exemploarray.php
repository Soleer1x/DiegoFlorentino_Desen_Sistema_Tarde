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
        $dias = array('domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado');
        echo $dias[1]. "<br\>";
        print_r($dias);
        echo "<br\>";
        var_dump($dias);
    ?>
</body>
</html>