<!--
<!doctype html>

<html>
<head>
    
    
</head>

<body>

<--?php

require_once "include/db.php";

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];
$faccao     = $_POST['faccao'];
$servidores = $_POST['servidores'];
    

include "conecta_mysql.inc";
$resultado = mysql_query("SELECT * FROM usuarios where nome='$nome'");
$linhas  = mysql_num_rows ($resultado);

    
function insereUsuario($nome, $email, $senha) {

    $sql = "INSERT INTO usuarios (nome, email, senha)
				   VALUES ('$nome', '$email', '$senha') ";

    $result = mysql_query($sql);

    return mysql_insert_id();	

}


function insereFaccao($idFaccao, $idUsuario); {
    
    
    $sql = "INSERT INTO faccao_ref_idUsuario(idFaccao, idUsuario)
            VALUES ('$idFaccao', '$idUsuario')";
    
    $result = mysql_query($sql);
    
    return mysql_insert_id();
    
}




function insereServidores($idServidor, $idUsuario); {

    $sql = "INSERT INTO servidores_ref_usuarios(idServidor, idUsuario)
            VALUES ('$idServidor', '$idUsuario')";

        
        $result = mysql_query($sql);

        return mysql_insert_id();
}


?>


</body>

</html>
-->

<?php
//echo "<pre>";

/*
									porta   usuario senha
$conexao = mysqli_connect("localhost:3306","root","");
mysqli_select_db($conexao, "rafael");
*/


/*
exemplo com var_dump
									porta   usuario senha
$conexao = mysqli_connect("localhost:3306","root","");
var_dump(mysqli_select_db($conexao, "rafael"));
*/


// fun�ao com os parametros
//function selectiona_no_banco($login, $senha) {
//	//sq
//    $sql = "SELECT *
//            FROM rafael
//            WHERE login = '$login'
//            AND senha ='$senha'
//            ";
//    $result = mysqli_query($link, $sql);
//    if(!$result) return false;
//    if(mysqli_num_rows($result)>0) {
//        while($row = mysqli_fetch_assoc($result)) {
//            $r[] = $row;
//        }
//    } else return false;
//    return $r;
//}
//
//$login = $_POST("login")
//$senha = $_POST("senha")
////variavel que valida o retorno da fun��o, e chamada da fun��o
//$valida = selectiona_no_banco($login, $senha);
//
//// valida��o do retorno da fun��o
//if($valida != false){
//
//}


?>






<?php
echo "<pre>";

porta   usuario senha
$conexao = mysqli_connect("localhost","root","root");
mysqli_select_db($conexao, "projeto_r");




exemplo com var_dump
									porta usuario senha
$conexao = mysqli_connect("localhost","root","root");
var_dump(mysqli_select_db($conexao, "projeto_r"));



// fun�ao com os parametros
function selectiona_no_banco($login, $senha) {
	//sq
    $sql = "SELECT *
            FROM projeto_r
            WHERE nome = '$nome'
            AND senha ='$senha'
            ";
    $result = mysqli_query($link, $sql);
    if(!$result) return false;
    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;
}

$nome   = $_POST("nome")
$senha  = $_POST("senha")
//variavel que valida o retorno da fun��o, e chamada da fun��o
$valida = selectiona_no_banco($nome, $senha);

// valida��o do retorno da fun��o
if($valida != false){

}


?>
