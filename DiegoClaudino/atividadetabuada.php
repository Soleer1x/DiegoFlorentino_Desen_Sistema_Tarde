<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        th, td {
            border: solid;
            width: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($e = 1; $e <= 10; $e++) {
                echo "<td>$i x $e = " . ($i * $e) . "</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
    <?php
            echo " <h1 align='center'> Diego Claudino Florertino </h1>";
        ?>
</body>
</html>
