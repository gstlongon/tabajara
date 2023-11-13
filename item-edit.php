<?php
require("php/config.php");
require_once('administrador-painel.php');

if (isset($_POST['edit_item'], $_POST['novo_nome'], $_POST['novo_valor'], $_POST['nova_descricao'], $_POST['novo_status'])) {
    $itemId = $_POST['edit_item'];
    $novoNome = $_POST['novo_nome'];
    $novoValor = $_POST['novo_valor'];
    $novaDescricao = $_POST['nova_descricao'];
    $novoStatus = $_POST['novo_status'];

    // Verifica se uma nova foto foi enviada
    if (isset($_FILES['nova_foto']) && $_FILES['nova_foto']['error'] == 0) {
        $novaFoto = $_FILES['nova_foto'];

        // Obtém a extensão do arquivo
        $extensao = pathinfo($novaFoto['name'], PATHINFO_EXTENSION);

        // Gera um nome único para a nova foto
        $novoNomeFoto = uniqid() . '.' . $extensao;

        // Move a nova foto para o diretório desejado
        move_uploaded_file($novaFoto['tmp_name'], 'img2/' . $novoNomeFoto);

        // Apaga a foto antiga
        unlink('img2/' . $fotoAntiga);

        // Atualiza o nome da foto no banco de dados
        $sqlUpdateFoto = "UPDATE item SET foto = '$novoNomeFoto' WHERE item_id = $itemId";
        $conn->query($sqlUpdateFoto);
    }

    // Execute a atualização no banco de dados
    $sql = "UPDATE item SET nome = '$novoNome', valor = '$novoValor', descricao = '$novaDescricao', status_item = '$novoStatus' WHERE item_id = $itemId";

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
