<?php
require("php/config.php");
session_start();

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$login = $_POST['login'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT cnpj FROM administrador WHERE usuario = ? AND senha = ?");
$stmt->bind_param('ss', $login, $senha);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    $_SESSION['painel_administrador'] = "Usuário logado com sucesso.";
    header("Location: administrador-painel.php");
} else {
    $_SESSION['erro_login'] = "Login ou senha incorretos. Tente novamente.";
    header("Location: administrador.html");
}

$stmt->close();
$conn->close();
?>
