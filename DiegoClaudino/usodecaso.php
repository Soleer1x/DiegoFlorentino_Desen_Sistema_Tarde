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
        $s ="lampada";
        switch($s) {
            case "casa":
                print "a casas é amarela";
                break;
                case "arvore":
                    print "a arvore é bonita";
                    break;
                    case "lampada":
                        print "joao apagou a lampada";
                        break;
                        default:
                        print "voce nao selecionou";
                        break;
                    }
    ?>
</body>
</html>