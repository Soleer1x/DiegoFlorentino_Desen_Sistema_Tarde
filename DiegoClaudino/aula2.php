<html>
    <body>
        <?php
            //Funcao usada para definir fuso horario padrao 
            date_default_timezone_set('America/Los_Angeles');
            //Manipulando HTML e PHP
            $data_hoje=date("d/m/y", time());
        ?>
        <p align="center"> Hoje é dia <?php echo $data_hoje ;?>
        </p>
        <?php 
         echo " <h1 align='center'> Diego Claudino Florertino</h1>";
        ?>

        <?php
            echo "texto <br>";
            echo "Ola mundo <br>";
            echo "isso abrange varias linhas . As novas linhas razão saida tambem. <br>";
            echo "Isso abrange\nmultiplas linhas. A nova linha sera \na saida tambem. <br>";
            echo "Caracteres Escaping são feitos \"como esse\". <br>";
        ?>

        <?php
            $comida_favorita = "Italiana";
            print $comida_favorita[2];
            $comida_favorita = "Cozinha ".$comida_favorita;
            echo "<br>";
            print $comida_favorita;
        ?>
    </body>
</html>