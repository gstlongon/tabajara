<?php
require("php/config.php");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT i.*, c.nome AS categoria_nome FROM item i
        INNER JOIN categoria c ON i.categoria_id = c.categoria_id
        ORDER BY i.categoria_id";

$result = $conn->query($sql);

$resultArray = array();

while($row = $result->fetch_assoc()) {
    $row['categoria_nome'] = $row['categoria_nome'];
    $resultArray[] = $row;
}

$json = json_encode($resultArray);

echo $json;

$conn->close();
?>
