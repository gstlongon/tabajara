<?php
session_start();

$mysqli = new mysqli("localhost:3306", "root", "", "tabajara");

if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

$login = $mysqli->real_escape_string($_POST['login']);
$senha = $mysqli->real_escape_string($_POST['senha']);

$query = "SELECT cnpj FROM administrador WHERE usuario = '$login' AND senha = '$senha'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    $_SESSION['painel_administrador'] = "Usuario logado com sucesso.";
    header("Location: administrador-painel.php");
} else {
    $_SESSION['erro_login'] = "Login ou senha incorretos. Tente novamente.";
    header("Location: administrador.html");
}

$mysqli->close();
?>


