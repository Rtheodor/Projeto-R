<!-DOCTYPE html>

<html lang="pt-br">

   
     <head>
        <?php require_once 'include/head.php'; ?>
    </head>
<body>

        <!-- TOPO -->


        <div>
            <?php 
            require_once 'include/include_header.php';
            ?>
            <div class="container-fluid"></div> 
        </div>
        <!-- FIM TOPO-->
       
        <!-- MENU LATERAL -->
 
<!--
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            MENU
                        </a>
                        <a href="#" class="list-group-item">Coin</a>
                        <a href="#" class="list-group-item">Roupa</a>
                        <a href="#" class="list-group-item">Pets</a>
                        <a href="#" class="list-group-item">Eat</a>
                    </div>
                </div>
-->
                <!-- FIM MENU LATERAL -->

                <!-- CONTEUDO -->
                        
                <div class="col-md-9">
                    <form action="playerx.php" method="post">
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome</label>

                            <input type="text" name="name" id="exampleInputPassword1" value="" class="form-control" placeholder="Nome">
                        </div>
                           
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de e-mail
                            </label>

                            <input type="email" name="email" id="exampleInputEmail1"  value="" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>

                            <input type="password" name="senha" id="exampleInputPassword1" value="" class="form-control" placeholder="senha">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Idade</label>

                            <input type="number" name="idade" id="exampleInputPassword1" value="" class="form-control" placeholder="Idade">
                        </div>

                            <div class="form-group">
                                <br>
                                <label for="exampleInputPassword1">Sexo</label>


                                <select name="sexo" id="sexo">


                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                    <option value="O">Outros</option>

                                </select>

                            </div>

                            <div class="form-group">
                                <label>Facçao</label>
                                <br>

                                <input type="radio" name="faccao" value="1"> Cavaleiros

                                <input type="radio" name="faccao" value="2"> Samurais

                                <input type="radio" name="faccao" value="3"> Vikings
                            </div>

                        

                    <div class="form-group">
						<label> Servidores</label>	
						<br>
						<!--<input type="checkbox" name="concordo[]" value="1"> Concorda?-->
						<input type="checkbox" name="servidores[]" value="1" id="id1" for="id1"> USA
						<input type="checkbox" name="servidores[]" value="2"> JP
						
						<input type="checkbox" name="servidores[]" value="3" id="id3" for="id3"> UK </div>


                            <div class="form-group">
                                <label for="exampleInputFile">File input
                                </label>

                                <input type="file" name="file"  id="exampleInputFile">
                                <p class="help-block">xxxxxxxx</p>

                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="termo" value="1"> Aceito os termos
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                                  

                        <div>
                            <div class="col-md-4"></div>
                            <h1>Player</h1>
                            <div class="list-group col-md-5"></div>
                            <img src="imagens/armas.webp" heigth="300" width="300">
                        </div>
                    </form>

                        <!-- FIM CONTEUDO -->

                        <!-- INICIO FOOTER -->
                        <?php require_once 'include/footer.php'; ?>
                        <!-- FIM FOOTER -->


    
</body>
</html>