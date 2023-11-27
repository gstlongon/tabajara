<?php
require("php/config.php");
require_once('administrador-painel.php');

if (isset($_POST['edit_item'], $_POST['novo_nome'], $_POST['novo_valor'], $_POST['nova_descricao'], $_POST['novo_status'])) {
    $itemId = $_POST['edit_item'];
    $novoNome = $_POST['novo_nome'];
    $novoValor = $_POST['novo_valor'];
    $novaDescricao = $_POST['nova_descricao'];
    $novoCategoria = $_POST['novo_categoria'];
    $novoStatus = $_POST['novo_status'];

    if (isset($_FILES['nova_foto']) && $_FILES['nova_foto']['error'] == 0) {
        $novaFoto = $_FILES['nova_foto'];

        $extensao = pathinfo($novaFoto['name'], PATHINFO_EXTENSION);

        $novoNomeFoto = uniqid() . '.' . $extensao;

        move_uploaded_file($novaFoto['tmp_name'], 'img2/' . $novoNomeFoto);

        unlink('img2/' . $fotoAntiga);

        $sqlUpdateFoto = "UPDATE item SET foto = '$novoNomeFoto' WHERE item_id = $itemId";
        $conn->query($sqlUpdateFoto);
    }

    $sql = "UPDATE item SET nome = '$novoNome', valor = '$novoValor', descricao = '$novaDescricao', categoria_id = '$novoCategoria', status_item = '$novoStatus' WHERE item_id = $itemId";

    if ($conn->query($sql) === TRUE) {
        echo "Item atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o item: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Parâmetros inválidos.";
}
?>
