<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        print $name = "Diego Claudino Florentino";
        echo "<br>";
        echo $langth = strlen($name);
        echo "<br>";
        echo $cmp = strcmp($name, "Brian Le");
        echo "<br>";
        echo $index = strpos($name, "e");
        echo "<br>";
        echo $first = substr($name, 9, 5);
        echo "<br>";
        echo $name = strtoupper($name);
        echo "<br>";
    ?>

    <?php
        echo $cidade = "Joinville";
        echo "<br>";
        echo $estado = "SC";
        echo "<br>";
        echo $idade = "174";
        echo "<br>";
        echo $frase_capital = " A cidade de $cidade é a capital do $estado";
        echo $frase_idade = "$cidade tem mais de $idade anos";
        echo "<h3>$frase_capital </h3>";
        echo "<h4>$frase_idade </h4>";
    ?>
</body>
</html>     