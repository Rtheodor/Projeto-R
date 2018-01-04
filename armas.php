<?php
   

        $id     =$_GET['id'];

?>

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
                        <a href="armas.php?id=0" class="list-group-item">Armaduras</a>
                        <a href="armas.php?id=1" class="list-group-item">Bandeiras</a>
                        <a href="armas.php?id=2" class="list-group-item">Bestas</a>
                        <a href="armas.php?id=3" class="list-group-item">Espadas</a>
                                                
                    </div>
                    
                </div>
                        
                <!-- FIM MENU LATERAL -->

                <!-- CONTEUDO -->
                <h1>ARMAS</h1>
            
            <div class="jumbotron">

					<?php
				    
                    $array = array(
                        array("imgs" => "arma_um.gif", "texto" => "Testando 1"),
                        array("imgs" => "arma_dois.jpg", "texto" => "Testando 2"),
                        array("imgs" => "arma_tres.jpg", "texto" => "Testando 3"),
				        array("imgs" => "fogo.jpeg", "texto" => "Testando 4"),               
					);	
//                echo '<pre>';
//                print_r($array);
                
                    ?>
                    
                    <h1><?php echo $array[$id]['texto']; ?></h1>		
					<img src="imagens/<?php echo $array[$id]['imgs']; ?>" class="img-responsive">
					<p><?php echo $array[$id]['texto']; ?></p>
            
            
            
            
            </div>
            
            <!-- FIM CONTEUDO -->

            <!-- INICIO FOOTER -->
            <?php require_once 'include/footer.php'; ?>
            <!-- FIM FOOTER -->


            <script src="js/main.js"></script>
            </body>
        </html>