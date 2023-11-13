<?php
require("php/config.php");

// Função para mapear os nomes das categorias
function mapCategoryName($nomeOriginal) {
    $mapeamento = [
        'pizza' => 'pizza',
        'lanches' => 'burg',
        'pratos' => 'prato',
        'sobremesas' => 'sobremesas',
        'bebidas' => 'Bebidas',
    ];

    // Se o nome original existir no mapeamento, retorna o nome mapeado; caso contrário, retorna o nome original
    return isset($mapeamento[$nomeOriginal]) ? $mapeamento[$nomeOriginal] : $nomeOriginal;
}

function fetchItemsFromDatabase($conn, $categoria_id, $categoria_nome) {
    $sql = "SELECT * FROM item WHERE categoria_id = $categoria_id";
    $result = $conn->query($sql);

    $items = [];
    $id = 1; // Inicia o ID para cada categoria

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nome = $row['nome'];
            $emPromocao = ($row['status_item'] == 1) ? true : false;
            $img = 'img2/' . $row['foto'];
            $categoria = mapCategoryName($categoria_nome);
            $preco = (float)$row['valor']; // Converter para float
            $descricao = $row['descricao'];

            $items[] = [
                'id' => "$id",
                'nome' => $nome,
                'emPromocao' => $emPromocao,
                'img' => $img,
                'categoria' => $categoria,
                'preco' => $preco,
                'descricao' => $descricao
            ];

            $id++; // Incrementa o ID para o próximo item
        }
    }

    return $items;
}

// Obter dados para cada categoria
$pizzaItems = fetchItemsFromDatabase($conn, 1, 'pizza');
$burguerItems = fetchItemsFromDatabase($conn, 2, 'lanches');
$pratoItems = fetchItemsFromDatabase($conn, 3, 'pratos');
$sobremesaItems = fetchItemsFromDatabase($conn, 4, 'sobremesas');
$bebidaItems = fetchItemsFromDatabase($conn, 5, 'bebidas');

$conn->close();

// Escrever os dados no arquivo JavaScript
$fileContent = <<<EOT
let pizzaJson = ${json_encode($pizzaItems)};
let burguerJson = ${json_encode($burguerItems)};
let pratoJson = ${json_encode($pratoItems)};
let sobremesaJson = ${json_encode($sobremesaItems)};
let bebidaJson = ${json_encode($bebidaItems)};
EOT;

file_put_contents('js/items.js', $fileContent);
?>

