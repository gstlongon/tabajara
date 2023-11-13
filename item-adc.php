<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_item = $_POST['nome_item'];
    $categoria_id = $_POST['categoria_id'];
    $valor = $_POST['valor'];
    $status_item = $_POST['status_item'];
    $descricao = $_POST['descricao'];
    $foto_item = $_FILES['foto_item'];
    $extensoes_permitidas = array('png', 'jpg', 'jpeg', 'jfif');
    $extensao = pathinfo($foto_item['name'], PATHINFO_EXTENSION);

    if (in_array(strtolower($extensao), $extensoes_permitidas)) {
        $nome_item2 = str_replace(' ', '', strtolower($nome_item));
        $nome_foto = $nome_item2 . '.' . $extensao;

        $destino = 'img2/' . $nome_foto;

        if (move_uploaded_file($foto_item['tmp_name'], $destino)) {
            $sql = "INSERT INTO item (nome, categoria_id, valor, status_item, descricao, foto)
                    VALUES ('$nome_item', '$categoria_id', '$valor', '$status_item', '$descricao', '$nome_foto')";
            
            if ($conn->query($sql) === TRUE) {
                header("Location: administrador-painel.php");
                atualizaritens();
            } else {
                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Erro no upload do arquivo.";
        }
    } else {
        echo "Coloque a foto, Apenas arquivos PNG, JPG, JPEG e JFIF são aceitos.";
        echo "<a href='administrador-painel.php'><input type='button' value='Voltar'></a></center>";
    }
} else {
    echo "Método de requisição inválido.";
}

$conn->close();
?>