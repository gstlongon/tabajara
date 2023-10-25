<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "tabajara";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
}
catch(Exception $e){
    $msg=array("codigo"=>0,"texto"=>"Erro de conexão.");
    header('Content-Type: application/json; charset=utf-8');
    echo(json_encode($msg));
    exit;
     
}

?>