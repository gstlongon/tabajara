<?php
require("php/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['itemId']) && isset($_POST['novoValorPromocao'])) {
    $itemId = $_POST['itemId'];
    $novoValorPromocao = $_POST['novoValorPromocao'];

    $sql = "SELECT valor_promocao FROM item WHERE item_id = $itemId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $valorOriginal = $row["valor_promocao"];
        if ($novoValorPromocao <= $valorOriginal) {
            $sqlUpdate = "UPDATE item SET valor = $novoValorPromocao WHERE item_id = $itemId";

            if ($conn->query($sqlUpdate) === TRUE) {
                atualizaritens();
            } else {
                echo "Erro ao adicionar a promoção: " . $conn->error;
            }
        } else {
            echo "Erro: O valor da promoção não pode ser maior que o valor original do item.";
        }
    } else {
        echo "Erro: Item não encontrado.";
    }
} else {
    echo "Erro: Parâmetros ausentes ou método de requisição inválido.";
}

$conn->close();
?>
