<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once 'include/head.php'; ?>
    </head>
    <body>

        <!-- TOPO -->

        <script src="js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <div>
            <?php 
            require_once 'include/include_header.php';
            ?>
            <div class="container-fluid"></div> 


        </div>
        <!-- FIM TOPO-->

        <!-- MENU LATERAL -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            MENU
                        </a>
                        <a href="#" class="list-group-item">Espadas</a>
                        <a href="#" class="list-group-item">Bestas</a>
                        <a href="#" class="list-group-item">Armaduras</a>
                        <a href="#" class="list-group-item">Bandeiras</a>
                    </div>
                </div>
                <!-- FIM MENU LATERAL -->

                <!-- CONTEUDO -->
                <div class="col-md-9">
                    <div>
                        <h1>Guilds</h1>
                    </div>
                </div>
                <!-- FIM CONTEUDO -->	
            </div>
        </div>
        <!-- INICIO FOOTER -->
        <?php require_once 'include/footer.php'; ?>
        <!-- FIM FOOTER -->


        <script src="js/main.js"></script>
    </body>
</html>
