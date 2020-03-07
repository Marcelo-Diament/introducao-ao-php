<?php $tituloDaPagina = "While | PHP"; ?>
<?php require_once('./inc/head.php'); ?>

    <?= "<h1>$tituloDaPagina</h1>"; ?>

    <br>
    <div>
        <img src="while.jpg" alt="Exemplo de While">
    </div>
    <br>

    <?php

        echo "<p>\$arr = [0,1,2,3,4,5,6,7,8,9,10];</p>";
        echo "<p>\$i = 0</p>";

        echo "<p><i>// while...</i></p>";

    ?>
    <p>
        <?php

            $arr = [0,1,2,3,4,5,6,7,8,9,10];
            $i = 0;

            while ( $i < count($arr) )  {

                echo $arr[$i] . "<br>";
                $i++;

            }

        ?>
    </p>

    <h3>Vamos entender o While</h3>
    <p>A função while tem como parâmetro uma condição. Enquanto essa condição for verdadeira, executará o código declarado dentro de suas chaves.</p>
    <p>Diferente do for, que já contém o valor inicial da variável $i e o incremento em seus parâmetros (o <i>$i++</i>), precisamos declarar o valor inicial de $i (fora do loop) e o incremento no corpo do loop (nesse exemplo específico).</p>
    <p>A condição poderia usar a quantidade de registros num banco de dados, por exemplo. Futuramente veremos exemplos mais complexos.</p>


    <hr>


    <h2>Bônus | Concatenando elementos do array com While</h2>

    <br>
    <div>
        <img src="while-extra.jpg" alt="Exemplo de While">
    </div>
    <br>

    <?php

        echo "<p>\$arr = [\"Os\",\"professores\",\"da\",\"DH\",\"são\",\"firmeza\",\"bagarai\"];</p>";
        echo "<p>\$i = 0</p>";
        echo "<p>\$fraseCompleta = \"\";</p>";

        echo "<p><i>// while...</i></p>";

        echo "<p>echo \"&lt;h3&gt;\$fraseCompleta&lt;/h3&gt;\";</p>";

    ?>

    <?php

        $arr = ["Os","professores","da","DH","são","firmeza","bagarai"];
        $i = 0;
        $fraseCompleta = "";

        while ( $i < count($arr) )  {

            if ( $i == count($arr) - 1 ) {
                $fraseCompleta .= $arr[$i] . "!";
            } else {
                $fraseCompleta .= $arr[$i] . " ";
            }

            $i++;

        }

        echo "<h3> $fraseCompleta </h3>";

    ?>

</body>
</html>