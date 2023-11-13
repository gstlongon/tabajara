<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_category"])) {
    $deletedCategory = $_POST["delete_category"];
    
    $sql = "DELETE FROM categoria WHERE categoria_id = $deletedCategory";
    if ($conn->query($sql) === TRUE) {
        // Exclusão bem-sucedida
        header("Location: administrador-painel.php");
    } else {
        // Erro na exclusão
        echo "Erro ao excluir categoria: " . $conn->error;
    }
}
?>
