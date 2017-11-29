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

                <div class="col-md-2">
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
                <div class="col-md-7">
                    <form action="?" method="get">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de e-mail
                            </label>
                            
                            <input type="email" name="email" id="exampleInputEmail1"  value="" class="form-control" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            
                            <input type="password" name="password" id="exampleInputPassword1" value="" class="form-control" placeholder="senha">
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="file" class="form-control" id="exampleInputFile">
                            <p class="help-block">xxxxxxxx</p>
                        </div>
                        
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="checkbox" value="1"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>






                    <h1>ARMAS</h1>
                </div>
                <!-- FIM CONTEUDO -->

                <!-- INICIO FOOTER -->
                <?php require_once 'include/footer.php'; ?>
                <!-- FIM FOOTER -->


                <script src="js/main.js"></script>
                </body>
            </html>