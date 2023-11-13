<?php
require("php/config.php");
require_once('administrador-painel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_categoria = strtolower($_POST["nome_categoria"]);

    $sql = "INSERT INTO categoria (nome) VALUES ('$nome_categoria')";

     if ($conn->query($sql) === TRUE) {
        header("Location: administrador-painel.php");
        atualizarcategoria();

    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>