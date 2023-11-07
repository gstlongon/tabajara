<?php
require("php/config.php");

$data = json_decode(file_get_contents('php://input'));

$foto_carro = $_FILES['foto_carro'];
$nome_foto = $foto_carro['name'];

$extensoes_permitidas = array('png', 'jpg', 'jpeg', 'jfif');
$extensao = pathinfo($nome_foto, PATHINFO_EXTENSION);

if (in_array(strtolower($extensao), $extensoes_permitidas)) {

    $destino = 'fotos_carros/' . $nome_foto;

    if (move_uploaded_file($foto_carro['tmp_name'], $destino)) {
        $sql = "INSERT INTO carro (placa, marca, km, ano, cor, descricao, modelo, valor, nome_foto, destino)
                VALUES ('$placa_carro', '$marca_carro', '$km_carro', '$ano_carro', '$cor_carro', '$descricao_carro', '$modelo_carro', '$preco_carro','$nome_foto','$destino')";
        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Registro Inserido com Sucesso</h1>";
            echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Erro no upload do arquivo.";
    }
} else {
    echo "A extensão do arquivo não é permitida. Apenas arquivos PNG, JPG, JPEG e JFIF são aceitos.";
}



$nome = $data->nome_item;
$categoriaID = $data->categoria;
$valor = $data->valor;
$statusItem = $data->status;
$descricao = $data->descricao;


$sql = "INSERT INTO item (nome, categoria_id, valor, status_item, descricao, foto)
    VALUES (:nome, :valor, :statusItem, :descricao, :filename)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':statusItem', $statusItem);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':filename', $filename);

if ($stmt->execute()) {
    echo json_encode(array("codigo" => 1, "texto" => "Registro inserido com sucesso."));
} else {
    echo json_encode(array("codigo" => 0, "texto" => "Erro ao inserir o registro."));
}
        
?>
