<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['promocao'])) {
    $itemId = $_POST['promocao'];

    // Copia o valor da coluna 'valor' para 'valor_promocao' e zera 'valor_promocao'
    $sql = "UPDATE item SET valor = valor_promocao, valor_promocao = 0, promocao = 0 WHERE item_id = $itemId";

    if ($conn->query($sql) === TRUE) {
        header("Location: administrador-painel.php");
        atualizarpromocao();
    } else {
        echo "Erro ao atualizar item: " . $conn->error;
    }
}

$conn->close();
?>
