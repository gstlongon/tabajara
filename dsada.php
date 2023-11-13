<!-- Adicione essas linhas no head do seu HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Restante do seu HTML -->

<ul id="itemList" style="list-style: none; padding: 0;">
    <?php
    $sql = "SELECT * FROM item";
    $result = $conn->query($sql);
    $counter = 1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $itemId = $row["item_id"];
            $itemName = $row["nome"];
            $categoryId = $row["categoria_id"];
            $itemValue = $row["valor"];
            $itemStatus = $row["status_item"];
            $itemDescription = $row["descricao"];
            $itemPhoto = $row["foto"];
            $photoPath = "img2/" . $itemPhoto;
            
            echo '<li class="item-item item-category-' . $categoryId . '" style="margin-bottom: 10px; padding: 10px; background-color: #f5f5f5; border-radius: 5px;">
                    <div class="item-preview">
                        <img src="' . $photoPath . '" alt="Foto do Item" style="max-width: 100px; max-height: 100px;" onclick="abrirFormularioEdicao(' . $itemId . ', \'' . $itemName . '\', ' . $itemValue . ', \'' . $itemDescription . '\', ' . $itemStatus . ', ' . $categoryId . ', \'' . $itemPhoto . '\');">
                        <div class="item-info">
                            <h4>' . ucwords(strtolower($itemName)) . '</h4>
                            <button class="admin__delete-btn" onclick="deleteItem(' . $itemId . ')">Apagar</button>
                            <button class="admin__editar-btn" onclick="abrirFormularioEdicao(' . $itemId . ', \'' . $itemName . '\', ' . $itemValue . ', \'' . $itemDescription . '\', ' . $itemStatus . ', ' . $categoryId . ', \'' . $itemPhoto . '\');">Editar</button>
                        </div>
                    </div>
                    <div id="detalhesItem' . $itemId . '" style="display: none;">
                        Nome: ' . ucwords(strtolower($itemName)) . '<br>
                        Categoria: ' . getCategoryName($categoryId, $conn) . '<br>
                        Valor: ' . $itemValue . '<br>
                        Status: ' . ($itemStatus == 1 ? 'Disponível' : 'Indisponível') . '<br>
                        Descrição: ' . $itemDescription . '<br>
                    </div>
                </li>';
            $counter++;
        }
    } else {
        echo "<li>Nenhum item encontrado</li>";
    }
    ?>
</ul>

<!-- Script para abrir o formulário de edição -->
<script>
    function abrirFormularioEdicao(itemId, itemName, itemValue, itemDescription, itemStatus, categoryId, itemPhoto) {
        var modalId = "formularioEdicaoModal_" + itemId;

        // Remove o modal antigo se existir
        $("#" + modalId).remove();

        var formularioEdicao = `
            <div class="modal fade" id="${modalId}" tabindex="-1" role="dialog" aria-labelledby="${modalId}Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content text-center mx-auto">
                        <div class="modal-header">
                            <h5 class="modal-title" id="${modalId}Label">Editar Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formularioEdicao">
                                <label for="novoNome">Nome:</label>
                                <input type="text" id="novoNome" value="${itemName}" class="form-control">
                                <br>

                                <label for="novoValor">Valor:</label>
                                <input type="text" id="novoValor" value="${itemValue}" class="form-control">
                                <br>

                                <label for="novaDescricao">Descrição:</label>
                                <textarea id="novaDescricao" class="form-control">${itemDescription}</textarea>
                                <br>

                                <label for="novoStatus">Status:</label>
                                <select id="novoStatus" class="form-control">
                                    <option value="1" ${itemStatus == 1 ? 'selected' : ''}>Disponível</option>
                                    <option value="0" ${itemStatus == 0 ? 'selected' : ''}>Indisponível</option>
                                </select>
                                <br>

                                <label>Foto Atual:</label>
                                <img src="img2/${itemPhoto}" alt="Foto Atual" style="max-width: 100px; max-height: 100px;">
                                <br>

                                <label for="novaFoto">Nova Foto:</label>
                                <input type="file" id="novaFoto" accept="image/*" class="form-control-file">
                                <br>

                                <button type="button" class="btn btn-primary" onclick="enviarEdicao(${itemId}, '${itemPhoto}')">Salvar Edições</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Exibe o modal na página
        $('body').append(formularioEdicao);

        // Abre o modal usando JavaScript
        $('#' + modalId).modal('show');
    }
</script>
