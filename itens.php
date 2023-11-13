<!DOCTYPE html>
<html>
<head>
    <title>Itens Cadastrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        h2 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        li {
            background-color: #fff;
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            width: 200px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        strong {
            font-size: 1.2rem;
        }

        p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
// Conectar ao banco de dados
require("php/config.php");

// Consulta SQL para buscar todos os itens e suas categorias
$sql = "SELECT i.*, c.nome AS categoria_nome FROM item i
        INNER JOIN categoria c ON i.categoria_id = c.categoria_id
        ORDER BY i.categoria_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $itemsPorCategoria = array();

    // Organizar os itens por categoria
    while ($row = $result->fetch_assoc()) {
        $categoriaNome = $row["categoria_nome"];
        if (!isset($itemsPorCategoria[$categoriaNome])) {
            $itemsPorCategoria[$categoriaNome] = array();
        }
        $itemsPorCategoria[$categoriaNome][] = $row;
    }

    // Exibir os itens por categoria
    foreach ($itemsPorCategoria as $categoriaNome => $itens) {
        echo "<h2>$categoriaNome:</h2>";
        echo "<ul>";
        foreach ($itens as $item) {
            echo "<li>";
            echo "<strong>{$item['nome']}</strong><br>";
            echo "R$ {$item['valor']}<br>";
            echo " " . ($item['status_item'] == 1 ? 'Disponível' : 'Sem Estoque') . "<br>";
            // echo "Categoria: {$categoriaNome}<br>";
            echo "<img src='img2/{$item['foto']}' alt='Foto do item' width='200' height='200'><br>";
            echo "{$item['descricao']}<br>";
            echo "</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Nenhum item encontrado.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
</body>
</html>

