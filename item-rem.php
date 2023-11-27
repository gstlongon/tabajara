<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_item'])) {
    $itemId = $_POST['delete_item'];

    $sql = "DELETE FROM item WHERE item_id = $itemId";

    if ($conn->query($sql) === TRUE) {
        echo "Item excluído com sucesso";
        header("Location: administrador-painel.php");
        atualizaritens();
    } else {
        echo "Erro ao excluir item: " . $conn->error;
    }
}

$conn->close();
?>
