<?php
session_start();
if(!$_SESSION["painel_administrador"]){
    header("Location: administrador.html");
    exit;
} else { ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="mask-icon" href="svg/safari-pinned-tab.svg" color="#5bbad5">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
        <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" rel="stylesheet">  
        <link rel="stylesheet" href="style.css">
        <!-- AXIOS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área do administrador</title>
    </head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__content">
                <div class="header__logo-box">
                    <a class="header__logo" href="">
                        <img class="header__logo-img" src="img/tabajara-logo.png" alt="">
                    </a>
                </div>
                <nav class="nav__menu">
                    <div class="nav__logo-box">
                        <a class="nav__logo" href="">
                            <img class="nav__logo-img" src="img/tabajara-logo.png" alt="">
                        </a>
                        <button class="nav__close">
                            <svg class="nav__close-icon" width="21.5" height="21.5" viewBox="0 0 21.5 21.5"><g transform="translate(-1.25 -1.25)"><circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/><path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/></g></svg>
                        </button>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__btn" href="index.php">
                                Voltar para loja
                            </a>
                    </ul>
                </nav>
                <button class="nav__open">
                    <svg class="nav__icon" width="37.098" height="33.746" viewBox="0 0 37.098 33.746"><g transform="translate(-42.7 -64)"><path d="M303.914,88.529h-25a1.614,1.614,0,0,1,0-3.229h25a1.614,1.614,0,0,1,0,3.229Zm0,29.034h-25a1.614,1.614,0,0,1,0-3.229h25a1.614,1.614,0,0,1,0,3.229Zm0-14.517h-25a1.614,1.614,0,1,1,0-3.229h25a1.614,1.614,0,1,1,0,3.229Z" transform="translate(-225.731 -20.498)" fill="#ff3131"/><path d="M45.119,66.41m-2.419,0A2.42,2.42,0,1,0,45.119,64,2.415,2.415,0,0,0,42.7,66.41Z" fill="#007d2d"/><path d="M45.119,450.41m-2.419,0A2.42,2.42,0,1,0,45.119,448,2.415,2.415,0,0,0,42.7,450.41Z" transform="translate(0 -369.537)" fill="#007d2d"/><path d="M45.119,834.41m-2.419,0A2.42,2.42,0,1,0,45.119,832,2.415,2.415,0,0,0,42.7,834.41Z" transform="translate(0 -739.074)" fill="#007d2d"/></g></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- modal -->
    <div class="modal fade" id="item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40"><g transform="translate(-159.943 -191.959)"><path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/><path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/></g></svg>
                    </div>
                    <h5 class="modal-title">Cadastrar item</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5"><g transform="translate(-1.25 -1.25)"><circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/><path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/></g></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="admin__add">
                        <form action="item-adc.php" id="register__item" method="post" enctype="multipart/form-data">
                            <div class="admin__input-box">
                                <label class="admin__label" for="nome_item">Nome do item:</label>
                                <input class="admin__input" name="nome_item" type="text" placeholder="Digite o nome do item" required>
                            </div>

                            <?php
                            require("php/config.php");

                            $sql = "SELECT * FROM categoria";
                            $result = $conn->query($sql);

                            ?>

                            <div class="admin__input-box">
                                <label class="admin__label" for="categoria_id">Categoria:</label>
                                <select class="admin__select" name="categoria_id">
                                    <option class="admin__select-value" value="" disabled selected hidden>Selecione a categoria</option>

                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row["categoria_id"] . '">' . $row["nome"] . '</option>';
                                        }
                                    }
                                    ?>

                                </select>
                            </div>

                            <?php
                            ?>

                            <div class="admin__input-box">
                                <label class="admin__label" for="valor">Valor:</label>
                                <input class="admin__input" name="valor" type="number" placeholder="Digite o Valor" required>
                            </div>
                            <div class="admin__input-box">
                                <label class="admin__label" for="status_item">Status:</label>
                                <select class="admin__select" name="status_item">
                                    <option class="admin__select-value" value="" disabled selected hidden>Selecione o status</option>
                                    <option value="0">Indisponivel</option>
                                    <option value="1">Disponivel</option>
                                </select>
                            </div>
                            <div class="admin__input-box">
                                <label class="admin__label" for="descricao">Descrição:</label>
                                <textarea class="admin__text" name="descricao" id="descricao" placeholder="Digite a Descrição"></textarea>
                            </div>
                            <div class="admin__input-box">
                                <label class="admin__label" for="foto_item">Foto:</label>
                                <input type="file" id="foto_item" name="foto_item" accept="image/png, image/jpeg" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="register__item" class="admin__submit" id="item__submit">
                        Cadastrar
                    </button>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="cadastrar-cat">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-back">
                <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40"><g transform="translate(-159.943 -191.959)"><path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/><path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/></g></svg>
            </div>
            <h5 class="modal-title">Cadastrar Categoria</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5"><g transform="translate(-1.25 -1.25)"><circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/><path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/></g></svg>
            </button>
            </div>
            <div class="modal-body">
                <div class="admin__add">
                    <form action="categoria-adc.php" id="add__category"method="post">
                        <div class="admin__input-box">
                            <label class="admin__label" for="nome_categoria">Nome categoria:</label> 
                            <input class="admin__input" name="nome_categoria" type="text" placeholder="Ex: Pizza, Lanche, Sobremesa" required>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" form="add__category" class="admin__submit">
                    Cadastrar
                </button>
            </div>
        </div>
        </div>
    </div>    
    <?php
        require("php/config.php");
        function getCategoryName($categoryId, $conn) {
            $sql_category_name = "SELECT nome FROM categoria WHERE categoria_id = $categoryId";
            $result_category_name = $conn->query($sql_category_name);
        
            if ($result_category_name->num_rows > 0) {
                $row_category_name = $result_category_name->fetch_assoc();
                return $row_category_name["nome"];
            } else {
                return "Categoria Desconhecida";
            }
        }
    ?>
    <div class="modal fade" id="remov-cat">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40">
                            <g transform="translate(-159.943 -191.959)">
                                <path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/>
                                <path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/>
                            </g>
                        </svg>
                    </div>
                    <h5 class="modal-title">Categorias Registradas</h5>            
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5">
                            <g transform="translate(-1.25 -1.25)">
                                <circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/>
                                <path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="admin__add">
                        <div class="admin__category-list">
                        <div class="admin__search">
                        <input type="text" id="searchCategory" oninput="searchCategories()" placeholder="Digite o nome">
                        <button class="admin__search-btn" onclick="searchCategories()">Pesquisar</button> ㅤ
                        <button class="admin__searcha-btn" type="button" data-bs-toggle="modal" data-bs-target="#cadastrar-cat">Cadastrar Categoria</button>
                        </div> 
                            <h3>Categorias Registradas</h3>
                            <ul style="list-style: none; padding: 0;">
                                <?php
                                require("php/config.php");

                                $sql = "SELECT DISTINCT categoria_id, nome FROM categoria";
                                $result = $conn->query($sql);

                                $counter = 1;
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $categoryId2 = $counter;
                                        $categoryId = $row["categoria_id"];
                                        $categoryName = $row["nome"];
                                        echo '<li style="margin-bottom: 10px; padding: 10px; background-color: #f5f5f5; border-radius: 5px;">
                                        Categoria ' . $categoryId2 . '<button class="admin__delete-btn" onclick="deleteCategory(' . $categoryId . ')">Apagar</button>
                                        <button class="admin__editar-btn" onclick="editCategory(' . $categoryId . ')">Editar</button>
                                        ㅤㅤㅤㅤ' .  ucwords(strtolower($categoryName)) . '
                                            </li>';
                                        $counter++;
                                    }
                                } else {
                                    echo "<li>Nenhuma categoria encontrada</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mostrar-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40">
                        <g transform="translate(-159.943 -191.959)">
                            <path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/>
                            <path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/>
                        </g>
                    </svg>
                </div>
                <h5 class="modal-title">Itens Registrados</h5>            
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5">
                        <g transform="translate(-1.25 -1.25)">
                            <circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/>
                            <path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="admin__add">
                    <div class="admin__itens-list">
                        <div class="admin__search">
                            <input type="text" id="searchItem" oninput="searchItems()" placeholder="Digite o nome">
                            <button class="admin__search-btn" onclick="searchItems()">Pesquisar</button> ㅤ
                            <button class="admin__searcha-btn" type="button" data-bs-toggle="modal" data-bs-target="#item">Cadastrar Item</button>
                        </div> 
                        <h3>Itens Registrados</h3>
                        <div class="category-buttons">
                            <?php
                            $sql_categories = "SELECT DISTINCT categoria_id, nome FROM categoria";
                            $result_categories = $conn->query($sql_categories);
                            echo '<button class="category-filter-btn" onclick="filterItems(0)">Mostrar Todos</button>';
                            if ($result_categories->num_rows > 0) {
                                while ($row_category = $result_categories->fetch_assoc()) {
                                    $category_id = $row_category["categoria_id"];
                                    $category_name = $row_category["nome"];
                                    echo '<button class="category-filter-btn" onclick="filterItems(' . $category_id . ')">' . $category_name . '</button>';
                                }
                            }
                            ?>
                        </div>
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
                                            <img src="' . $photoPath . '" alt="Foto do Item" style="max-width: 100px; max-height: 100px;" onclick="mostrarDetalhesItem(' . $itemId . ')">
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
                        <script>
                            
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
    <div class="modal fade" id="cadastrar-cliente">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <div class="modal-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40"><g transform="translate(-159.943 -191.959)"><path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/><path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/></g></svg>
        </div>
        <h5 class="modal-title">Cadastrar Cliente</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5"><g transform="translate(-1.25 -1.25)"><circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/><path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/></g></svg>
        </button>
        </div>
        <div class="modal-body">
            <div class="admin__add">
                <form action="" id="add__cliente">
                    <div class="admin__input-box">
                        <label class="admin__label" for="telefone"></label> 
                        <input class="admin__input" name="telefone" type="text" placeholder="Digite o nome" required>
                    </div>
                    <div class="admin__input-box">
                        <label class="admin__label" for="senha"></label> 
                        <input class="admin__input" name="senha" type="text" placeholder="Digite a senha" required>
                    </div>
                    <div class="admin__input-box">
                        <label class="admin__label" for="nome_cliente"></label> 
                        <input class="admin__input" name="nome_cliente" type="text" placeholder="Digite o nome" required>
                    </div>
                    <div class="admin__input-box">
                        <label class="admin__label" for="end_cep"></label>
                        <input class="admin__input" name="end_cep" type="text" placeholder="Digite o CEP" required>
                    </div>
                    <div class="admin__input-box">
                        <label class="admin__label" for="end_rua"></label>
                        <input class="admin__input" name="end_rua" type="text" placeholder="Digite o logradouro">
                    </div>
                    <div class="admin__input-box">
                        <label class="admin__label" for="end_bairro"></label>
                        <input class="admin__input" name="end_bairro" type="text" placeholder="Digite o logradouro">
                    </div>
                    <div class="admin__input-box">
                        <label class="admin__label" for="end_numero"></label>
                        <input class="admin__input" name="end_numero" type="text" placeholder="Digite o logradouro">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" value="Entrar" class="admin__submit">
                Cadastrar
            </button>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" id="promocao">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40">
                        <g transform="translate(-159.943 -191.959)">
                            <path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/>
                            <path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/>
                        </g>
                    </svg>
                </div>
                <h5 class="modal-title">Promoção</h5>            
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5">
                        <g transform="translate(-1.25 -1.25)">
                            <circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/>
                            <path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="admin__add">
                    <div class="admin__promocao-list">
                        <div class="admin__search">
                            <input type="text" id="searchItem" oninput="searchItems()" placeholder="Digite o nome">
                            <button class="admin__search-btn" onclick="searchItems()">Pesquisar</button> ㅤ
                            <button class="admin__searcha-btn" type="button" data-bs-toggle="modal" data-bs-target="#item">Cadastrar Item</button>
                        </div> 
                        <h3>Itens na Promoção</h3>
                        <!-- Adição de botões de filtro por categoria -->
                        <div class="category-buttons">
                            <?php
                            $sql_categories = "SELECT DISTINCT categoria_id, nome FROM categoria";
                            $result_categories = $conn->query($sql_categories);
                            echo '<button class="category-filter-btn" onclick="filterItems(0)">Mostrar Todos</button>';
                            if ($result_categories->num_rows > 0) {
                                while ($row_category = $result_categories->fetch_assoc()) {
                                    $category_id = $row_category["categoria_id"];
                                    $category_name = $row_category["nome"];
                                    echo '<button class="category-filter-btn" onclick="filterItems(' . $category_id . ')">' . $category_name . '</button>';
                                }
                            }
                            ?>
                        </div>
                        <ul id="itemList" style="list-style: none; padding: 0;">
                            <?php
                            $sql = "SELECT * FROM item WHERE promocao = 1";
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
                                    $precoantigo = $row["valor_promocao"];
                                    echo '<li class="item-item item-category-' . $categoryId . '" style="margin-bottom: 10px; padding: 10px; background-color: #f5f5f5; border-radius: 5px;">
                                        <div class="item-preview">
                                            <img src="' . $photoPath . '" alt="Foto do Item" style="max-width: 100px; max-height: 100px;" onclick="mostrarDetalhesItema(' . $itemId . ')">
                                            <div class="item-info">
                                                <h4>' . ucwords(strtolower($itemName)) . '</h4>
                                                <h5>De: R$'. $precoantigo .' - Por: R$' . $itemValue . '</h5>
                                                <button class="admin__delete-btn" onclick="deletePromocao(' . $itemId . ')">Remover Promoção</button>
                                                <button class="admin__editar-btn" onclick="abrirFormularioPromocao(' . $itemId . ', \'' . $itemValue . ', \'' . $precoantigo . ');">Editar</button>

                                            </div>                           
                                        </div>
                                    </li>';
                                    $counter++;
                                }
                            } else {
                                echo "<li>Nenhum item em promoção encontrado</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container">
        <h1>Cadastramento</h1>
        <div class="admin__add-item">
            <div class="row justify-content-between">
                <div class="col-3">
                    <button class="admin__painel-btn" type="button" data-bs-toggle="modal" data-bs-target="#mostrar-item">
                        <img class="admin__painel-img" src="img/card-itens.jpg" alt="Seleção de comidas">
                    </button>
                </div>
                <div class="col-3">
                    <button class="admin__painel-btn" type="button" data-bs-toggle="modal" data-bs-target="#remov-cat">
                        <img class="admin__painel-img" src="img/card-category.jpg" alt="Seleção de comidas">
                    </button>
                </div>
                <div class="col-3">
                    <button class="admin__painel-btn" type="button" data-bs-toggle="modal" data-bs-target="#promocao">
                        <img class="admin__painel-img" src="img/card-promo.jpg" alt="Seleção de comidas">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <button type="button" class="footer__cart-btn" data-bs-toggle="modal" data-bs-target="#pedido">
        <svg class="index__cart-icon" width="36.634" height="36.731" viewBox="0 0 26.634 26.731"><g transform="translate(-1.02 -2.019)"><path d="M7.5,18A1.5,1.5,0,1,1,6,19.5,1.5,1.5,0,0,1,7.5,18Z" transform="translate(1.5 7)" fill="none" stroke="#fff" stroke-width="1.5"/><path d="M16.5,18A1.5,1.5,0,1,1,15,19.5,1.5,1.5,0,0,1,16.5,18Z" transform="translate(4.875 7)" fill="none" stroke="#fff" stroke-width="1.5"/><path d="M13,13V11m0,0V9m0,2h2m-2,0H11" transform="translate(3.6 3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"/><path d="M2,3l.344.143C4.056,3.857,4.913,4.214,5.4,5.064s.49,1.979.49,4.236v4.246c0,4.589.083,6.1,1.223,7.529S10.09,22.5,13.76,22.5h1.4m5.579,0c2.054,0,3.081,0,3.807-.7s.933-1.894,1.348-4.279l.658-3.783c.457-2.713.685-4.069.1-4.97s-2.58-.9-4.8-.9H13.873m-7.981,0H8.579" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"/></g></svg>
        <div class="btn__count">!</div>
    </button>
    <div class="container">
        <div class="footer__top">
            <a class="footer__logo" href="">
                <img class="footer__logo-img" src="img/tabajara-logo.png" alt="">
            </a>
            <div class="footer__adress">
                <h3 class="footer__adress-title">Onde estamos ?</h3>
                <span class="footer__info">
                    Rua Dos Tabajaras, 11333, Alto Pinheiro. Marilia - SP
                </span>
            </div>
            <div class="footer__social">
                <h3 class="footer__social-title">Nos Siga</h3>
                <div class="footer__social-items">
                    <a href="" class="footer__social-item">
                        <img width="26" height="26" src="svg/facebook-svgrepo-com.svg" alt="">
                    </a>
                    <a href="" class="footer__social-item">
                        <img width="26" height="26" src="svg/instagram-svgrepo-com.svg" alt="">
                    </a>
                    <a href="" class="footer__social-item">
                        <img width="26" height="26" src="svg/twitter-svgrepo-com.svg" alt="">
                    </a>
                </div>
                <a class="nav__btn" href="administrador-painel.php">
                        Admin
                    </a>
            </div>
        </div>
    </div>
</footer>
<script src="js/painel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
    function atualizarcategoria() {
        echo '<script>
                window.onload = function() {
                    var myModal = new bootstrap.Modal(document.getElementById("remov-cat"));
                    myModal.show();
                    $(".admin__category-list").load(location.href + " .admin__category-list>*", "");
                };
            </script>';
    }

    function atualizaritens() {
        echo '<script>
                window.onload = function() {
                    var myModal = new bootstrap.Modal(document.getElementById("mostrar-item"));
                    myModal.show();
                    $(".admin__itens-list").load(location.href + " .admin__itens-list>*", "");
                };
            </script>';
    }

    function atualizarpromocao() {
        echo '<script>
                window.onload = function() {
                    var myModal = new bootstrap.Modal(document.getElementById("promocao"));
                    myModal.show();
                    $(".admin__promocao-list").load(location.href + " .admin__promocao-list>*", "");
                };
            </script>';
    }
?>
    
<?php } ?>