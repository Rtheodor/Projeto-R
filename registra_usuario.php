

<?php

require_once "include/db.php";

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];
$faccao     = $_POST['faccao'];
$servidores = $_POST['servidores'];
    

$idUsuario = insereUsuario($nome, $email, $senha);

    
function insereUsuario($nome, $email, $senha) {

    $sql = "INSERT INTO usuarios (nome, email, senha)
				   VALUES ('$nome', '$email', '$senha') ";

    $result = mysql_query($sql);

    return mysql_insert_id();	

}
    
//
//function insereFaccao($idFaccao, $idUsuario); {
//    
//    
//    $sql = "INSERT INTO faccao_ref_idUsuario(idFaccao, idUsuario)
//            VALUES ('$idFaccao', '$idUsuario')";
//    
//    $result = mysql_query($sql);
//    
//    return mysql_insert_id();
//    
//}
//
//
//
//
//function insereServidores($idServidor, $idUsuario); {
//
//    $sql = "INSERT INTO servidores_ref_usuarios(idServidor, idUsuario)
//            VALUES ('$idServidor', '$idUsuario')";
//
//        
//        $result = mysql_query($sql);
//
//        return mysql_insert_id();
//}


?>



