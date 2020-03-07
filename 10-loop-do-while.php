<?php $tituloDaPagina = "Do While | PHP"; ?>
<?php require_once('./inc/head.php'); ?>

    <?= "<h1>$tituloDaPagina</h1>"; ?>

    <br>
    <div>
        <img src="do-while.jpg" alt="Exemplo de Do While">
    </div>
    <br>

    <?php

        echo "<p>\$arr = [0,1,2,3,4,5,6,7,8,9,10];</p>";
        echo "<p>\$i = 0</p>";

        echo "<p><i>// do... (while)</i></p>";

    ?>
    <p>
        <?php

            $arr = [0,1,2,3,4,5,6,7,8,9,10];
            $i = 0;

            do  {

                echo $arr[$i] . "<br>";
                $i++;

            } while ( $i < count($arr) )

        ?>
    </p>

    <h3>Vamos entender o Do While</h3>
    <p>Ao contrário do while, que verifica a condição e então executa o código (caso a condição seja verdadeira), no Do While nós executamos o código e verificamos a condição. Se ao finalizar a execução a condição for falsa, o código não é executado novamente.</p>

</body>
</html>