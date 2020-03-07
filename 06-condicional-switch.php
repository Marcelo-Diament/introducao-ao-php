<?php $tituloDaPagina = "Switch | PHP"; ?>
<?php require_once('./inc/head.php'); ?>

    <?= "<h1>$tituloDaPagina</h1>"; ?>

    <br>
    <div>
        <img src="switch.jpg" alt="Exemplo de Switch">
    </div>
    <br>

    <?php
        $genero = 'Masculino';
        echo "<p>\$genero = 'Masculino'</p><p><i>// switch...</i></p>";
    ?>
    <p>
        <?php
            switch ( $genero ) {
                case "Masculino":
                    echo "É do gênero masculino";
                    break;
                case "Feminino":
                    echo "É do gênero feminino";
                    break;
                default:
                    echo "Prefere não dizer";
                    break;
            }
        ?>
    </p>


    <hr>


    <?php
        $genero = 'Feminino';
        echo "<p>\$genero = 'Feminino'</p><p><i>// switch...</i></p>";
    ?>
    <p>
        <?php
            switch ( $genero ) {
                case "Masculino":
                    echo "É do gênero masculino";
                    break;
                case "Feminino":
                    echo "É do gênero feminino";
                    break;
                default:
                    echo "Prefere não dizer";
                    break;
            }
        ?>
    </p>


    <hr>


    <?php
        $genero = 'Qualquer outro valor';
        echo "<p>\$genero = 'Qualquer outro valor'</p><p><i>// switch...</i></p>";
    ?>
    <p>
        <?php
            switch ( $genero ) {
                case "Masculino":
                    echo "É do gênero masculino";
                    break;
                case "Feminino":
                    echo "É do gênero feminino";
                    break;
                default:
                    echo "Prefere não dizer";
                    break;
            }
        ?>
    </p>

   </body>
</html>