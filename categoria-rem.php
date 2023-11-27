<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_category"])) {
    $deletedCategory = $_POST["delete_category"];

    $deleteItemsSQL = "DELETE FROM item WHERE categoria_id = $deletedCategory";
    if ($conn->query($deleteItemsSQL) === TRUE) {
        $deleteCategorySQL = "DELETE FROM categoria WHERE categoria_id = $deletedCategory";
        if ($conn->query($deleteCategorySQL) === TRUE) {
            header("Location: administrador-painel.php");
        } else {
            echo "Erro ao excluir categoria: " . $conn->error;
        }
    } else {
        echo "Erro ao excluir itens relacionados à categoria: " . $conn->error;
    }
}
?>
