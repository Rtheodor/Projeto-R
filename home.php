
<?php

echo $_POST['email'];
echo '<br />';
echo $_POST['senha'];

?>


<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <?php require_once 'include/head.php'; ?>
    </head>



    <!-- TOPO -->

    <body>           
        <div>
            <?php 
            require_once 'include/include_header.php';
            ?>
            <div class="container-fluid"></div> 


        </div>

        <!-- FIM TOPO-->

        <div class="container-fluid"></div>
        <div class="row"></div>


        <!-- MENU LATERAL -->
        <div class="container-fluid"></div>
        <div class="row"></div>

        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    MENU
                </a>
                <a href="#" class="list-group-item">teste1</a>
                <a href="#" class="list-group-item">teste2</a>
                <a href="#" class="list-group-item">teste3</a>
                <a href="#" class="list-group-item">teste4</a>
            </div>
        </div>


        <!-- FIM MENU LATERAL -->

        <!-- CONTEUDO -->
        <div class="col-md-9"></div>
        <div>
            <h1>Artigos</h1>
        </div>

        <!-- FIM CONTEUDO -->

        <!-- INICIO FOOTER -->

        <?php require_once 'include/footer.php'; ?>

        <!-- FIM FOOTER -->

    </body>
</html>