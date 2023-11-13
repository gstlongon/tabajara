<?php
require("php/config.php");
require_once('administrador-painel.php');

$itemId = $_GET['item_id'];
$novoValor = $_GET['novo_valor'];

$sql = "UPDATE item SET valor = ? WHERE item_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("di", $novoValor, $itemId);
$stmt->execute();
$stmt->close();
header("Location: administrador-painel.php");
atualizarpromocao();

?>
