<?php
require_once "include/db.php";

$nome               = $_POST['name'];
$email              = $_POST['email'];
$senha              = $_POST['senha'];
$faccao             = $_POST['faccao'];
$servidores         = $_POST['servidores'];


//print_r($_POST);

$idUsuario = insereUsuario($nome, $email, $senha);


if($idUsario) {
    
    foreach ($servidores as $idservidor) {
        $insertServidor = insereidservidorRefUsuario($idUsuario, $idservidor);        
    }
    
    $insereFaccao = insereFaccao($idUsuario, $faccao);
            
}



//funçoes do script


function insereUsuario($nome, $email, $senha) {

    $sql = "INSERT INTO usuarios (nome, email, senha)
				   VALUES ('$nome', '$email', '$senha') ";

    $result = mysql_query($sql);

    return mysql_insert_id();

    //return $sql;

}




function insereRefservidores($idUsuario, $idServidor) {

	$sql = "INSERT INTO servidores_ref_usuarios (idUsuario,idServidor)
				   VALUES ('$idUsuario','$idServidor') ";

	$result = mysql_query($sql);

	return mysql_insert_id();			   

    
    //return $sql;
}
    

function insereRefFaccao($idUsuario, $idFaccao) {
    $sql = "INSERT INTO faccao_ref_usuarios (idUsuario, idFaccao)
        VALUES ('$idUsuario','$idFaccao')";
    
    $result = mysql_query($sql);
    return mysql_insert_id();
    
    
    
}