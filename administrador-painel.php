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
                                        echo '<li class="admin__list-edit">
                                        <span class="admin__list-text">Categoria ' . $categoryId2 . '</span>' . '<button class="admin__delete-btn" onclick="deleteCategory(' . $categoryId . ')">Apagar</button>
                                        <button class="admin__editar-btn" onclick="editCategory(' . $categoryId . ')">Editar</button>' . '<span class="admin__editar-categoria">' . ucwords(strtolower($categoryName)) . '</span>' . '</li>';
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
                <h5 class="modal-title">Produtos</h5>            
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
                        <h3>Produtos por Categorias</h3>
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
                                    $precoantigo = $row["valor_promocao"];
                                    $itemPromotion = $row["promocao"];
                                    $photoPath = "img2/" . $itemPhoto;
                                    $promoIndicator = ($itemPromotion == 1) ? '<span class="promocao-indicador">Promoção Ativa</span>' : ''; 
                                    if ($itemPromotion == 1){
                                        $precoitem = 'De '. $precoantigo .' Por '. $itemValue;
                                        $promocaosaber = 'Promoção 🟩';
                                    }else{
                                        $precoitem = $itemValue;
                                        $promocaosaber = 'Promoção 🟥';
                                    }                                   
                                    echo '<li class="item-item item-category-' . $categoryId . '" style="margin-bottom: 10px; padding: 30px; background-color: #f5f5f5; border-radius: 5px;">
                                    <div class="item-preview">
                                            <h4 class="item-title">' . ucwords(strtolower($itemName)) . '</h4> 
                                            <div class="item-box"><img class="item-img" src="' . $photoPath . '" alt="Foto do Item" onclick="mostrarDetalhesItem(' . $itemId . ')"></div>
                                            <div class="item-info">
                                                <button class="admin__delete-btn" onclick="deleteItem(' . $itemId . ')">Apagar</button>
                                                <button class="admin__editar-btn" onclick="abrirFormularioEdicao(' . $itemId . ', \'' . $itemName . '\', ' . $itemValue . ', \'' . $itemDescription . '\', ' . $itemStatus . ', ' . $categoryId . ', \'' . $itemPhoto . '\', \'' . $itemPromotion . '\');">Editar</button>
                                                <button class="admin__promocao-btn" onclick="abrirFormularioEdicaoPromocao(' . $itemId . ', \'' . $itemName . '\', ' . $itemValue . ', ' . $itemPromotion . ', \'' . $itemPhoto . '\', \'' . $precoantigo . '\');">'.$promocaosaber.'</button>
                                             </div>                           
                                        </div>' ?>
                                        <div class="detalhes" id="detalhesItem<?php echo $itemId; ?>" style="display: none;">

                                            <span class="detalhes__label">Nome: </span>
                                            <span class="detalhes__value"><?php echo ucwords(strtolower($itemName)); ?></span><br>

                                            <span class="detalhes__label">Categoria: </span>
                                            <span class="detalhes__value"><?php echo getCategoryName($categoryId, $conn); ?></span><br>

                                            <span class="detalhes__label">Valor: </span>
                                            <span class="detalhes__value"><?php echo $precoitem; ?></span><br>

                                            <span class="detalhes__label">Status: </span>
                                            <span class="detalhes__value"><?php echo ($itemStatus == 1 ? 'Disponível' : 'Indisponível'); ?></span><br>

                                            <span class="detalhes__label">Descrição: </span>
                                            <span class="detalhes__value"><?php echo $itemDescription; ?></span><br>
                                        </div>

                                    <?php echo '</li>';
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
        <h1 class="index__title">Painel do administrador</h1>
        <div class="admin__add-item">
            <div class=" row justify-content-left">
                <div class="col-lg-4 col-md-12">
                    <div class="card-container">
                        <div class="card">
                            <a href="#">
                                <div class="card--display">
                                    <img class="admin__painel-img" src="img/card-itens.jpg" alt="Seleção de comidas">
                                </div>

                                <div class="card--hover">
                                    <h2>Menu Produto</h2>
                                    <p>
                                        Aqui é seu controle dos Produtos do cardápio você pode:<br>
                                       <strong>Adicionar</strong><br>
                                       <strong>Editar</strong><br>
                                       <strong>Remover</strong><br>
                                       <strong>Promoção</strong>
                                        
                                    </p>
                                    <button class="" type="button" data-bs-toggle="modal" data-bs-target="#mostrar-item">
                                        Clique Aqui
                                    </button>
                                </div>
                            </a>
                            <div class="card--border"></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                <div class="card-container">
                    <div class="card">
                        <a href="#">
                            <div class="card--display">
                                <img class="admin__painel-img" src="img/card-category.jpg" alt="Seleção de comidas">
                            </div>
                            <div class="card--hover">
                                <h2>Menu Categoria</h2>
                                <p>
                                    Aqui é seu controle das categorias do cardapio você pode:<br>
                                    <strong>Adicionar</strong><br>
                                    <strong>Remover</strong><br>
                                    <strong>Editar</strong>
                                </p>
                                <button class="" type="button" data-bs-toggle="modal" data-bs-target="#remov-cat">
                                    Clique Aqui
                                </button>
                            </div>
                        </a>
                        <div class="card--border"></div>
                    </div>
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
<script>

    function mostrarDetalhesItem(itemId) {
        var detalhesItem = document.getElementById('detalhesItem' + itemId);
        if (detalhesItem.style.display === 'none') {
            detalhesItem.style.display = 'block';
        } else {
            detalhesItem.style.display = 'none';
        }
    }

    function deleteCategory(categoryId) {
        if (confirm("Tem certeza de que deseja apagar esta categoria? Junto ira apagar todos os itens com essa Categoria")) {
            $.ajax({
                type: "POST",
                url: "categoria-rem.php",
                data: { delete_category: categoryId },
                success: function(response) {
                    $(".admin__category-list").load(location.href + " .admin__category-list>*", "");
                },
                error: function(xhr, status, error) {
                    alert("Erro ao excluir categoria: " + xhr.responseText);
                }
            });
        }
    }

    function deleteItem(itemId) {
        if (confirm("Tem certeza de que deseja apagar este item?")) {
            $.ajax({
                type: "POST",
                url: "item-rem.php",
                data: { delete_item: itemId },
                success: function(response) {
                    $(".admin__itens-list").load(location.href + " .admin__itens-list>*", "");
                },
                error: function(xhr, status, error) {
                    alert("Erro ao excluir item: " + xhr.responseText);
                }
            });
        }
    }

    function deletePromocao(itemId) {
        if (confirm("Tem certeza de que deseja apagar este item?")) {
            $.ajax({
                type: "POST",
                url: "promocao-rem.php",
                data: { promocao: itemId },
                success: function(response) {
                    $(".admin__promocao-list").load(location.href + " .admin__promocao-list>*", "");
                },
                error: function(xhr, status, error) {
                    alert("Erro ao excluir item: " + xhr.responseText);
                }
            });
        }
    }

    function editCategory(categoryId) {
        var novoNome = prompt("Digite o novo nome da categoria:");

        if (novoNome !== null) {
            $.ajax({
                type: "POST",
                url: "categoria-edit.php",
                data: {
                    edit_category: categoryId,
                    novo_nome: novoNome
                },
                success: function(response) {                  
                    $(".admin__category-list").load(location.href + " .admin__category-list>*", "");
                },
                error: function(xhr, status, error) {
                    alert("Erro ao editar categoria: " + xhr.responseText);
                }
            });
        }
    }

    function abrirFormularioEdicaoPromocao(itemId, itemName, itemValue, itemPromotion, itemPhoto, precoantigo) {
        itemValue = parseFloat(itemValue);
        var modalId = "formularioEdicaoPromocaoModal_" + itemId;
        $("#" + modalId).remove();

        var formularioEdicaoPromocao = `
            <div class="modal fade" id="${modalId}" tabindex="-1" role="dialog" aria-labelledby="${modalId}Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content text-center mx-auto">
                        <div class="modal-header">
                            <h5 class="modal-title" id="${modalId}Label">Editar Promoção</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formularioEdicaoPromocao">
                                ${itemPromotion == 1 ?
                                    `<p><h5>Este item possui promoção:</h5></p>
                                    <p><h4>${itemName}</h4></p>
                                    <img src="img2/${itemPhoto}" alt="Foto do Item" style="max-width: 100px; max-height: 100px;">
                                    <p><h6>Valor Original: </h6> <h5>R$ ${precoantigo}</h5></p>
                                    <p><h6>Valor Promoção: </h6> <h5>R$ ${itemValue}</h5></p>
                                    <label for="novoValorPromocao"><h6>Valor da Promoção editado:</h6></label>
                                    <input type="number" id="novoValorPromocao" min="0" max = "" value="${itemValue}" class="form-control">
                                    <br>
                                    <button type="button" class="btn btn-success" onclick="editarPromocao(${itemId})">Editar Preço</button>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-danger" onclick="removerPromocao(${itemId})">Remover Promoção</button>`
                                    :
                                    `<p><h5>Este item ainda não possui promoção:</h5></p>
                                    <p><h4>${itemName}</h4></p>
                                    <img src="img2/${itemPhoto}" alt="Foto do Item" style="max-width: 100px; max-height: 100px;">
                                    <p><h6>Valor Atual: </h6> <h5>R$ ${itemValue}</h5></p>
                                    <label for="novoValorPromocao"><h6>Valor da Promoção:</h6></label>
                                    <input type="number" id="novoValorPromocao" min="0" value="${itemValue}" class="form-control">
                                    <br>
                                    <button type="button" class="btn btn-success" onclick="adicionarPromocao(${itemId})">Adicionar Promoção</button>`
                                }
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        `;

        $('body').append(formularioEdicaoPromocao);

        $('#' + modalId).modal('show');
    }

    function adicionarPromocao(itemId) {
        var novoValorPromocao = document.getElementById('novoValorPromocao').value;
        $.ajax({
            type: "POST",
            url: "promocao-add.php", 
            data: { itemId: itemId, novoValorPromocao: novoValorPromocao },
            success: function(response) {
                $("#itemList").load(location.href + " #itemList>*", "");
            },
            error: function(xhr, status, error) {
                alert("Erro ao excluir item: " + xhr.responseText);
            }
        });

        $('#formularioEdicaoPromocaoModal_' + itemId).modal('hide');
    }

    function editarPromocao(itemId) {
        var novoValorPromocao = document.getElementById('novoValorPromocao').value;
        $.ajax({
            type: "POST",
            url: "promocao-edit.php", 
            data: { itemId: itemId, novoValorPromocao: novoValorPromocao },
            success: function(response) {
                $("#itemList").load(location.href + " #itemList>*", "");
            },
            error: function(xhr, status, error) {
                alert("Erro ao editar: " + xhr.responseText);
            }
        });

        $('#formularioEdicaoPromocaoModal_' + itemId).modal('hide');
    }

    function removerPromocao(itemId) {
        if (confirm("Tem certeza de que deseja apagar este item?")) {
            $.ajax({
                type: "POST",
                url: "promocao-rem.php", 
                data: { promocao: itemId },
                success: function(response) {
                    $("#itemList").load(location.href + " #itemList>*", "");
                },
                error: function(xhr, status, error) {
                    alert("Erro ao excluir item: " + xhr.responseText);
                }
            });
            $('#formularioEdicaoPromocaoModal_' + itemId).modal('hide');
        }
    }


    function abrirFormularioEdicao(itemId, itemName, itemValue, itemDescription, itemStatus, categoryId, itemPhoto, itemPromotion) {
        var modalId = "formularioEdicaoModal_" + itemId;

        $("#" + modalId).remove();

        var valorField = '';
        if (itemPromotion == 1) {
            valorField = `
                <label for="novoValor">Valor:</label>
                <input type="text" id="novoValor" value="A PROMOÇÃO DESSE ITEM ESTÁ ATIVA, Valor: R$ ${itemValue}" class="form-control" readonly>
                <input type="hidden" id="valorPromocao" value="${itemValue}">
                <br>`;
        } else {
            valorField = `
                <label for="novoValor">Valor:</label>
                <input type="number" id="novoValor" value="${itemValue}" class="form-control">
                <br>`;
        }

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
                                
                                ${valorField} <!-- Incluir o campo de valor condicionalmente -->

                                <label for="novaDescricao">Descrição:</label>
                                <textarea id="novaDescricao" class="form-control">${itemDescription}</textarea>
                                <br>
                                <label for="novoCategoria">Categoria:</label>
                                <select class="admin__select" id="novoCategoria_${itemId}" name="novo_categoria">
                                    <option class="admin__select-value" value="" disabled selected hidden>Carregando categorias...</option>
                                </select>
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

        $('body').append(formularioEdicao);

        $.ajax({
            url: 'item-categoria.php',
            type: 'GET',
            data: {
                item_category_id: categoryId
            },
            success: function(response) {
                $(`#novoCategoria_${itemId}`).empty();
                $(`#novoCategoria_${itemId}`).append(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

        $('#' + modalId).modal('show');
    }

    function enviarEdicao(itemId, fotoAntiga) {
        var novoNome = document.getElementById('novoNome').value;
        var novoValor = document.getElementById('novoValor').value;
        var novaDescricao = document.getElementById('novaDescricao').value;
        var novoCategoria = document.getElementById('novoCategoria_' + itemId).value;
        var novoStatus = document.getElementById('novoStatus').value;
        var novaFoto = document.getElementById('novaFoto').files[0];

        var formData = new FormData();
        formData.append('edit_item', itemId);
        formData.append('novo_nome', novoNome);
        formData.append('novo_valor', novoValor);
        formData.append('nova_descricao', novaDescricao);
        formData.append('novo_categoria', novoCategoria);
        formData.append('novo_status', novoStatus);
        formData.append('nova_foto', novaFoto);
        console.log(novoCategoria);

        $.ajax({
            type: "POST",
            url: "item-edit.php", 
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $("#itemList").load(location.href + " #itemList>*", "");
                $('#formularioEdicaoModal_' + itemId).modal('hide');
            },
            error: function(xhr, status, error) {
                alert("Erro ao editar item: " + xhr.responseText);
            }
        });
    }

    function filterItems(categoryId) {
        var itemList = document.getElementById("itemList");
        var items = itemList.getElementsByClassName("item-item");
        
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            var categories = item.className.match(/item-category-\d+/);
            
            if (categories) {
                categories = categories[0].split("-")[2];
                
                if (categories == categoryId || categoryId == 0) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            }
        }
    }

    function searchCategories() {
        var input, filter, ul, li, categoryName, i, txtValue;
        input = document.getElementById('searchCategory');
        filter = input.value.toUpperCase();
        ul = document.querySelector('.admin__category-list ul');
        li = ul.getElementsByTagName('li');

        for (i = 0; i < li.length; i++) {
            categoryName = li[i].textContent || li[i].innerText;

            if (categoryName.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = '';
            } else {
                li[i].style.display = 'none';
            }
        }
    }

    function searchItems() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('searchItem');
        filter = input.value.toUpperCase();
        ul = document.getElementById("itemList");
        li = ul.getElementsByTagName('li');

        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByClassName("item-title")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
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

    function fecharitens() {
        echo '<script>
                window.onload = function() {
                    var myModal = new bootstrap.Modal(document.getElementById("mostrar-item"));
                    myModal.hide()
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