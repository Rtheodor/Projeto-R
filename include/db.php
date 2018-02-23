<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "projeto_r";	



$conexao = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname,$conexao);

$conexao = mysqli_connect("localhost","root","root");
var_dump(mysqli_select_db($conexao, "projeto_r"));


function selectiona_no_banco($nome, $senha) {
	//sq
    $sql = "SELECT *
            FROM projeto_r
            WHERE login = '$nome'
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


