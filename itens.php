<?php
require("php/config.php");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$categoryName = $_GET['categoria_nome'] ?? null;

$sql = "SELECT i.*, c.nome AS categoria_nome FROM item i
        INNER JOIN categoria c ON i.categoria_id = c.categoria_id";

if ($categoryName !== null) {
    $sql .= " WHERE c.nome = '$categoryName'";
}

$result = $conn->query($sql);

$resultArray = array();

while ($row = $result->fetch_assoc()) {
    $row = array_map('utf8_encode', $row);
    $resultArray[] = $row;
}

$json = json_encode($resultArray, JSON_UNESCAPED_UNICODE);

if ($json === false) {
    die(json_last_error_msg());
}

echo $json;

$conn->close();
?>
