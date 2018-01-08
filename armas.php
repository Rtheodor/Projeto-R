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
                        <a href="armas.php?id=3" class="list-group-item">Espadas</a>
                        <a href="armas.php?id=2" class="list-group-item">Machado</a>                        
                    </div>
                    
                </div>
                        
                <!-- FIM MENU LATERAL -->

                <!-- CONTEUDO -->
            <div class="col-md-10">
                
                <h1>ARMAS</h1>
            
                <div class="jumbotron">

					<?php
				    
                    $array = array(
                        array("imgs" => "arma_um.gif", "texto" => "Pelas pesquisas, espadas eram pouco usadas,das mais de cem armas encontradas em escavações, apenas 16 eram espadas. Um guerreiro a ganha de presente de um chefe, e a mesma, é então passada de pai para filho, por gerações.", "titulo" => "Arma um"),
                        
                        array("imgs" => "mexico.png", "texto" => "Pelas pesquisas, espadas eram pouco usadas,das mais de cem armas encontradas em escavações, apenas 16 eram espadas. Um guerreiro a ganha de presente de um chefe, e a mesma, é então passada de pai para filho, por gerações.", "titulo" => "Minha patria"),
                        
                        array("imgs" => "arma_tres.jpg", "texto" => "Pelas pesquisas, espadas eram pouco usadas,das mais de cem armas encontradas em escavações, apenas 16 eram espadas. Um guerreiro a ganha de presente de um chefe, e a mesma, é então passada de pai para filho, por gerações.", "titulo" => "Machados"),
				        
                        array("imgs" => "armas.webp", "texto" => "Pelas pesquisas, espadas eram pouco usadas,das mais de cem armas encontradas em escavações, apenas 16 eram espadas. Um guerreiro a ganha de presente de um chefe, e a mesma, é então passada de pai para filho, por gerações.", "titulo" => "Espadas"),              
					);	
                
                                   
                    ?>
                    
                    <h1><?php echo $array[$id]['titulo']; ?></h1>		
					<img src="imagens/<?php echo $array[$id]['imgs']; ?>" class="img-responsive">
					<p class="text-danger"><?php echo $array[$id]['texto']; ?></p>
            
            
            
            
                </div>
            </div>
            
            <!-- FIM CONTEUDO -->

            <!-- INICIO FOOTER -->
            <?php require_once 'include/footer.php'; ?>
            <!-- FIM FOOTER -->


            <script src="js/main.js"></script>
            </body>
        </html>