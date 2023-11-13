<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "tabajara";
try{
    $conn = new mysqli($servername, $username, $password, $database);

}


catch(Exception $e){
    $msg=array("codigo"=>0,"texto"=>"Erro de conexão.");
    header('Content-Type: application/json; charset=utf-8');
    echo(json_encode($msg));
    exit;
     
}

?>