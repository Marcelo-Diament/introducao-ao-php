<?php
    $tituloDaPagina = "Métodos | PHP - Aula 03";

    // RECEBENDO AS VARIÁVEIS COM REQUEST,
    // QUE RECEBE TANTO GET QUANTO POST
    if($_REQUEST && isset($_REQUEST)):
        $nome = $_REQUEST["inputNome"];
        $email = $_REQUEST["inputEmail"];
        $senha = $_REQUEST["inputSenha"];
        $endereco = $_REQUEST["inputEndereco1"] . " - " . $_REQUEST["inputEndereco2"];
        $cidade = $_REQUEST["inputCidade"];
        $estado = $_REQUEST["inputEstado"];
        $cep = $_REQUEST["inputCep"];
        if(isset($_REQUEST["inputAceite"])){
            $aceite = $_REQUEST["inputAceite"];
        }

        // Vamos ver o que vem dentro de $_REQUEST
        // echo "var_dump(\$_REQUEST)<br><pre>";
        // var_dump($_REQUEST);
        // echo "</pre>";

    endif;

    // RECEBENDO AS VARIÁVEIS NO MÉTODO GET
    if($_GET && isset($_GET)):
        $nome = $_GET["inputNome"];
        $email = $_GET["inputEmail"];
        $senha = $_GET["inputSenha"];
        $endereco = $_GET["inputEndereco1"] . " - " . $_GET["inputEndereco2"];
        $cidade = $_GET["inputCidade"];
        $estado = $_GET["inputEstado"];
        $cep = $_GET["inputCep"];
        if(isset($_GET["inputAceite"])){
            $aceite = $_GET["inputAceite"];
        }

        // Vamos ver o que vem dentro de $_GET
        // echo "var_dump(\$_GET)<br><pre>";
        // var_dump($_GET);
        // echo "</pre>";

    endif;

    // RECEBENDO AS VARIÁVEIS NO MÉTODO POST
    if($_POST && isset($_POST)):
        $nome = $_POST["inputNome"];
        $email = $_POST["inputEmail"];
        $senha = $_POST["inputSenha"];
        $endereco = $_POST["inputEndereco1"] . " - " . $_POST["inputEndereco2"];
        $cidade = $_POST["inputCidade"];
        $estado = $_POST["inputEstado"];
        $cep = $_POST["inputCep"];
        if(isset($_POST["inputAceite"])){
            $aceite = $_POST["inputAceite"];
        }

        // Vamos ver o que vem dentro de $_POST
        // echo "var_dump(\$_POST)<br><pre>";
        // var_dump($_POST);
        // echo "</pre>";

    endif;

    require_once("./inc/head.php");
?>
<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container my-5">

        <!-- // ATENÇÃO: como o REQUEST captura tanto GET quanto POST, a primeira condição já será true.
        Para verem os métodos GET e POST funcionarem dentro dessas condições, comente o if do REQUEST.
        E, claro, ajustem o else if da próxima condição para apenas if -->

        <?php if( $_REQUEST && isset($_REQUEST) ): ?>
            
            <article>
                <h2>Respostas Recebidas por POST:</h2>
                <table class="table table-bordered my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">nome</th>
                            <th scope="col">email</th>
                            <th scope="col">senha</th>
                            <th scope="col" colspan="2">endereço</th>
                            <th scope="col">Cidade - UF</th>
                            <th scope="col">CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nome ?></th>
                            <td><?= $email ?></td>
                            <td><?= $senha ?></td>
                            <td colspan="2"><?= $endereco ?></td>
                            <td><?= $cidade  . " - " . $estado ?></td>
                            <td><?= $cep ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php if(!isset($aceite)): ?>
                    <small class="bg-danger text-white p-3">O usuário não aceitou os termos do site</small>
                <?php else: ?>
                    <small class="bg-success text-white p-3">O usuário aceitou os termos do site</small>
                <?php endif; ?>
            </article>

        <?php elseif ( $_POST && isset($_POST) ): ?>
        
            <article>
                <h2>Respostas Recebidas por POST:</h2>
                <table class="table table-bordered my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">nome</th>
                            <th scope="col">email</th>
                            <th scope="col">senha</th>
                            <th scope="col" colspan="2">endereço</th>
                            <th scope="col">Cidade - UF</th>
                            <th scope="col">CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nome ?></th>
                            <td><?= $email ?></td>
                            <td><?= $senha ?></td>
                            <td colspan="2"><?= $endereco ?></td>
                            <td><?= $cidade  . " - " . $estado ?></td>
                            <td><?= $cep ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php if(!isset($aceite)): ?>
                    <small class="bg-danger text-white p-3">O usuário não aceitou os termos do site</small>
                <?php else: ?>
                    <small class="bg-success text-white p-3">O usuário aceitou os termos do site</small>
                <?php endif; ?>
            </article>

        <?php elseif ( $_GET && isset($_GET) ): ?>
        
            <article>
                <h2>Respostas Recebidas por GET:</h2>
                <table class="table table-bordered my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">nome</th>
                            <th scope="col">email</th>
                            <th scope="col">senha</th>
                            <th scope="col" colspan="2">endereço</th>
                            <th scope="col">Cidade - UF</th>
                            <th scope="col">CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nome ?></th>
                            <td><?= $email ?></td>
                            <td><?= $senha ?></td>
                            <td colspan="2"><?= $endereco ?></td>
                            <td><?= $cidade  . " - " . $estado ?></td>
                            <td><?= $cep ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php if(!isset($aceite)): ?>
                    <small class="bg-danger text-white p-3">O usuário não aceitou os termos do site</small>
                <?php else: ?>
                    <small class="bg-success text-white p-3">O usuário aceitou os termos do site</small>
                <?php endif; ?>
            </article>

        <?php else: ?>
        
            <article class="alert alert-warning col-6 mx-auto" role="alert">
                <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
                <p>Por favor, preencha o formulário <a href="11-metodo-get.php" title="Acessar o Formulário GET" rel="next">GET</a> ou o formulário <a href="11-metodo-post.php" title="Acessar o Formulário POST" rel="next">POST</a>.</p>
                <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br/>deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
            </article>

        <?php endif; ?>
    </main>
   <?php require_once("./inc/footer.php"); ?>
</body>
</html>