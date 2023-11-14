<?php
require("php/config.php");
require("administrador-painel.php");


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$nome_item = $_POST['nome_item'];
$categoria_id = $_POST['categoria_id'];
$valor = $_POST['valor'];
$status_item = $_POST['status_item'];
$descricao = $_POST['descricao'];
$foto_item = $_FILES['foto_item'];
$extensoes_permitidas = array('png', 'jpg', 'jpeg', 'jfif');
$extensao = pathinfo($foto_item['name'], PATHINFO_EXTENSION);
$nome_item = strtolower(str_replace(' ', '-', $nome_item));

if (in_array(strtolower($extensao), $extensoes_permitidas)) {

    $nome_foto = $nome_item . '.' . $extensao;

    $destino = 'img/' . $nome_foto;

    if (move_uploaded_file($foto_item['tmp_name'], $destino)) {
        $sql = "INSERT INTO item (nome, categoria_id, valor, status_item, descricao, foto)
                VALUES ('$nome_item', '$categoria_id', '$valor', '$status_item', '$descricao', '$nome_foto')";
        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Registro Inserido com Sucesso</h1>";
            echo "<a href='administrador-painel.php'><input type='button' value='Voltar'></a></center>";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Erro no upload do arquivo.";
    }
} else {
    echo "A extensão do arquivo não é permitida. Apenas arquivos PNG, JPG, JPEG e JFIF são aceitos.";
}

$conn->close();
?>
