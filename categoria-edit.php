<?php
require("php/config.php");
require_once('administrador-painel.php');

if (isset($_POST['edit_category']) && isset($_POST['novo_nome'])) {
    $categoryId = $_POST['edit_category'];
    $novoNome = $_POST['novo_nome'];

    $sql = "UPDATE categoria SET nome = ? WHERE categoria_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $novoNome, $categoryId);

    if ($stmt->execute()) {
        echo "Categoria editada com sucesso!";
        header("Location: administrador-painel.php");
        atualizarcategoria();
    } else {
        echo "Erro ao editar categoria: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Parâmetros ausentes na solicitação.";
}

?>
