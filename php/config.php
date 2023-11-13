<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "tabajara";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
