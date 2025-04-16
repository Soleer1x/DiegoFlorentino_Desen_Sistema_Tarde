<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $estados = array("PR", "SC", "RS", "SP", "RJ", "MG", "BA", "RN", "AM");
        echo "ORIGINAL: ";
        print_r( $estados );
        echo "<hr\>STRTOLOWER: Converte uma string para minusculas<br\>";
        for ($i = 0; $i < count($estados); $i++) {
        $estado[$i] = strtolower($estados[$i]);
        }
        echo "STRTOLOWER: "; print_r($estado);
        echo "<hr\>Shift: Retira o primeiro elemento de um array<br/>";
        $rotaciona = array_shift($estados);
        echo "SHIFT: "; print_r($estados);
        echo "<hr\>POP: extrai um elemento do final do array<br/>";
        array_pop($estados);
        echo "PUSH: "; print_r($estados);
        array_push($estados, "pr");
        echo "<hr\>Reverse: retoma um array com os elementos na ordem inversa <br/>";
        $inverso=array_reverse($inverse);
        echo "REVERSE: "; print_r($inverso);
        echo "</br>SORT: ordena y=um array<br/>";
        sort($estados);
        echo "SORT: "; print_r($estados);
        echo "<hr/>Slice: extrai uma parcela de um array <br/>";
        $dividir=array_slice($estados, 1, 2);
        echo "SLICE: "; print_r($dividir);
        echo "<br/>"

    ?>
</body>
</html>