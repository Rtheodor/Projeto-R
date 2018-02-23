


/*function insereRefservidores($idUsuario, $idServidor) {

	$sql = "INSERT INTO servidores_ref_usuarios (idUsuario, idServidor)
				   VALUES ('$idUsuario', '$idServidor')	
				   ";

	$result = mysql_query($sql);

	return mysql_insert_id();			   

}*/


function Nomesexo($sexo) {

    if($sexo == "M") {
        $sexoFinal = "Masculino";

    } else if ($sexo == "F") {
        $sexoFinal = "Feminino";

    } else if ($sexo == "O"){
        $sexo == "Outros";

    } else {
        $sexoFinal = "Indefinido";

    }

    return $sexoFinal;
}


function NomeFaccao($faccao) {

    if ($faccao == "C") {
        $faccaoFinal = "Cavaleiro";

    }   else if ($faccao == "S") {
        $faccaoFinal = "Samurais";

    }   else if ($faccao == "V") {
        $faccaoFinal = "Vikings";

    }   else { 
        $faccaoFinal = "Indefinido";


    }
    return $faccaoFinal;

}


function NomeServidores($servidores) {
    switch ($se rvidores) {
        case 1:
            $servidoresFinal = 'USA';
            break;
        case 2:
            $servidoresFinal = 'JP';
            break;
        case 3:
            $servidoresFinal = 'UK';
            break;

        default:
            $servidoresFinal = "Servidor não informada";
            break;
    }

    return $servidoresFinal;	
}





?>




<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once 'include/head.php'; ?>
    </head>

    <body>

        <!-- TOPO -->


        <?php 
        require_once 'include/include_header.php';
        ?>


        <!-- FIM TOPO-->

        <div class="container-fluid">
            <div class="col-md-12">
                <!-- MENU LATERAL -->
                <?php require_once 'include/menu_lateral.php' ?>

                <!-- FIM MENU LATERAL -->


                <!-- CONTEUDO -->
                <div>

                    <?php

                echo "Nome:".$nome;
                echo "<hr>";
                echo "Email:".$email;
                echo "<hr>";
                echo "Senha:".$senha;
                echo "<hr>";
                echo "Faccao:".NomeFaccao($faccao);
                echo "<hr>";


                echo "<p>Servidores:</p>";

                echo "<ul>";
                //echo "<li>" . Nomeservidores($servidores[0]) . "</li>";
                //echo "<li>" . Nomeservidores($servidores[1]) . "</li>";
                //echo "<li>" . Nomeservidores($servidores[2]) . "</li>";

                $totalsServidores = count($servidores);

                for($x=0; $x < $totalsServidores; $x++) {
                    echo "<li>" . Nomeservidores($servidores[$x]) . "</li>";
                }

                echo "</ul>";


                    ?>

                </div>
            </div>
        </div>
        <!-- FIM CONTEUDO -->


        <!-- INICIO FOOTER -->
        <?php require_once 'include/footer.php'; ?>
        <!-- FIM FOOTER -->



    </body>
</html>