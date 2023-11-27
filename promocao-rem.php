<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['promocao'])) {
    $itemId = $_POST['promocao'];

    $sql = "UPDATE item SET valor = valor_promocao, valor_promocao = 0, promocao = 0 WHERE item_id = $itemId";

    if ($conn->query($sql) === TRUE) {
        header("Location: administrador-painel.php");
        atualizaritens();
    } else {
        echo "Erro ao atualizar item: " . $conn->error;
    }
}

$conn->close();
?>
