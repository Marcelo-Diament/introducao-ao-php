<?php $tituloDaPagina = "If Else | PHP"; ?>
<?php require_once('./inc/head.php'); ?>
 
    <?= "<h1>$tituloDaPagina</h1>"; ?>

    <br>
    <div>
        <img src="ifelse.jpg" alt="Exemplo de If Else">
    </div>
    <br>

    <?php
        $idade = 10;
        echo "<p>\$idade = 10</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
            if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>


    <hr>


    <?php
        $idade = 100;
        echo "<p>\$idade = 100</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
            if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>


    <hr>


    <?php
        $idade = 50;
        echo "<p>\$idade = 50</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
            if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>


    <hr>


    <?php
        $idade = 16;
        echo "<p>\$idade = 16</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
                if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>

   </body>
</html>
