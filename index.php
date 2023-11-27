<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="mask-icon" href="svg/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title>Pizzaria Tabajara´s - Home</title>

</head>
<body>
    <div class="main">
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
                                <a class="nav__btn" href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="nav__btn" href="index.php#pedidos">
                                    Cardápio
                                </a>
                            </li>
                            <li>
                                <a class="nav__btn" href="sobre.html">
                                    Sobre Nós
                                </a>
                            </li>
                            <li>
                                <a class="nav__btn" href="contato.html">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <button class="nav__open">
                        <svg class="nav__icon" width="37.098" height="33.746" viewBox="0 0 37.098 33.746"><g transform="translate(-42.7 -64)"><path d="M303.914,88.529h-25a1.614,1.614,0,0,1,0-3.229h25a1.614,1.614,0,0,1,0,3.229Zm0,29.034h-25a1.614,1.614,0,0,1,0-3.229h25a1.614,1.614,0,0,1,0,3.229Zm0-14.517h-25a1.614,1.614,0,1,1,0-3.229h25a1.614,1.614,0,1,1,0,3.229Z" transform="translate(-225.731 -20.498)" fill="#ff3131"/><path d="M45.119,66.41m-2.419,0A2.42,2.42,0,1,0,45.119,64,2.415,2.415,0,0,0,42.7,66.41Z" fill="#007d2d"/><path d="M45.119,450.41m-2.419,0A2.42,2.42,0,1,0,45.119,448,2.415,2.415,0,0,0,42.7,450.41Z" transform="translate(0 -369.537)" fill="#007d2d"/><path d="M45.119,834.41m-2.419,0A2.42,2.42,0,1,0,45.119,832,2.415,2.415,0,0,0,42.7,834.41Z" transform="translate(0 -739.074)" fill="#007d2d"/></g></svg>
                    </button>
                </div>
            </div>
        </header>
        <section class="index__slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                        <div class="swiper__img-box swiper__desktop">
                            <video class="swiper__img" src="./video/video1.mp4" autoplay muted loop>
                        </div>
                        <div class="swiper__img-box swiper__mobile">
                            <img class="swiper__img" src="img/img-slider2.jpg" alt="">
                        </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper__img-box swiper__desktop">
                        <video class="swiper__img" src="./video/video2.mp4" autoplay muted loop>
                    </div>
                    <div class="swiper__img-box swiper__mobile">
                        <img class="swiper__img" src="img/img-slider.jpg" alt="">
                    </div>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              </div>
    
        </section>
        <!-- Modal -->
        <div class="modal fade" id="pedido">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <div class="modal-back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45.998" height="40" viewBox="0 0 45.998 40"><g transform="translate(-159.943 -191.959)"><path d="M194,480h39.995a2,2,0,0,1,0,4H194a2,2,0,0,1,0-4Z" transform="translate(-30.054 -270.04)" fill="#007d2d"/><path d="M164.774,211.96l16.586,16.582a2,2,0,1,1-2.832,2.832l-18-18a2,2,0,0,1,0-2.832l18-18a2,2,0,1,1,2.832,2.832Z" fill="#007d2d"/></g></svg>
                </div>
                <h5 class="modal-title">Meus Pedidos</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5"><g transform="translate(-1.25 -1.25)"><circle cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#007d2d" stroke-width="1.5"/><path d="M14.5,9.5l-5,5m0-5,5,5" fill="none" stroke="#007d2d" stroke-linecap="round" stroke-width="1.5"/></g></svg>
                </button>
                </div>
                <div class="modal-body">
                    <div class="cart">
                        <ul class="cart-items"></ul>
                        <div class="cart-total">
                            Total: R$ <span id="cart-total">0.00</span>
                        </div>
                    </div>
                    <form class="form">
                        <h4>Informe seus dados</h4>
                        <span><span class="form__required">*</span> - Items obrigatórios</span>
                        <div class="form__input-box">
                            <label class="form__label" for="nome">Nome<span class="form__required">*</span>:</label>
                            <input class="form__input" name="nome" type="text" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form__input-box">
                            <label class="form__label" for="telefone">Telefone<span class="form__required">*</span>:</label>
                            <input class="form__input" name="telefone" type="text" placeholder="Ex. (14)99999-9999" required>
                        </div>
                        <div class="form__input-box">
                            <label class="form__label" for="cep">CEP:</label>
                            <input class="form__input" name="cep" type="text" placeholder="Ex. 00000-000">
                        </div>
                        <div class="form__input-box">
                            <label class="form__label" for="endereco">Endereço<span class="form__required">*</span>:</label>
                            <input class="form__input" name="endereco" type="text" placeholder="Nome da rua" required>
                        </div>
                        <div class="form__input-box">
                            <label class="form__label" for="numero">Número<span class="form__required">*</span>:</label>
                            <input class="form__input" name="numero" type="text" placeholder="Numero da casa" required>
                        </div>
                        <div class="form__input-box">
                            <label class="form__label" for="complemento">Complemento:</label>
                            <input class="form__input" name="complemento" type="text" placeholder="Digite o complemento" required>
                        </div>
                        <div class="form__input-box">
                            <label class="form__label" for="bairro">Bairro<span class="form__required">*</span>:</label>
                            <input class="form__input" name="bairro" type="text" placeholder="Nome do bairro" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger clear-cart-button" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary form__avance">Avançar</button>
                <button type="button" class="btn btn-primary form__finish">Finalizar</button>
                </div>
            </div>
            </div>
        </div>
        <div class="index__model">
            <div class="index__item">
                <div class="index__sale">
                    <img src="img/promotion.png" alt="Promoção">
                </div>
                <a href="">
                    <div class="index__item-img"><img src="" /></div>
                </a>
                <div class="index__item-price">R$ --</div>
                <div class="index__item-name">--</div>
                <div class="index__item-desc">--</div>
                <div class="index__item-add" type="button">Adicionar</div>
            </div>
        </div>
        <?php
            require("php/config.php");

            $query = "SELECT DISTINCT c.nome 
                    FROM categoria c 
                    INNER JOIN item i ON c.categoria_id = i.categoria_id";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<section class="container">
                        <div class="index__pedidos" id="pedidos">
                            <h1 class="index__title">Seja bem-vindo à Tabajara\'s Pizzaria, onde o amor pela comida se transforma em cada fatia.</h1>
                            <div class="index__filter">';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<button class="index__btn" data-categoria="' . $row['nome'] . '">
                            <span>' . ucfirst(strtolower($row['nome'])) . '</span>
                        </button>';
                }

                echo '    </div>
                        <div class="index__item-area row justify-content-left align-items-center"></div>
                        </div>
                    </section>';
            } else {
                echo 'Não há categorias com itens associados.';
            }

            mysqli_close($conn);
        ?>


        <section class="container">
            <div class="index__benefit">
                <h2 class="index__title">Conheça as vantagens do Taba!!</h2>
                <div class="index__counter">
                    <div class="index__numbers-data">
                        <span class="index__numbers-main" data-val="50">
                            0
                        </span>
                        <span class="index__numbers-text">
                            Minutos<br>prazo máximo
                        </span>
                        <svg class="index__number-icon" width="210" height="210" viewBox="0 0 102 102.282"><path d="M36.333,3.512C16.913,10.577,3,29.64,3,52.048c0,28.423,22.386,51.464,50,51.464s50-23.041,50-51.464C103,29.64,89.087,10.577,69.667,3.512" transform="translate(-2 -2.23)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </div>
                    <div class="index__numbers-data">
                        <span class="index__numbers-main" data-val="153">
                            +0
                        </span>
                        <span class="index__numbers-text">
                            Opções<br>no cardápio
                        </span>
                        <svg class="index__number-icon" width="210" height="210" viewBox="0 0 102 102.282"><path d="M36.333,3.512C16.913,10.577,3,29.64,3,52.048c0,28.423,22.386,51.464,50,51.464s50-23.041,50-51.464C103,29.64,89.087,10.577,69.667,3.512" transform="translate(-2 -2.23)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </div>
                    <div class="index__numbers-data">
                        <span class="index__numbers-main" data-val="100">
                            0
                        </span>
                        <span class="index__numbers-text">
                            Entregas<br>por dia
                        </span>
                        <svg class="index__number-icon" width="210" height="210" viewBox="0 0 102 102.282"><path d="M36.333,3.512C16.913,10.577,3,29.64,3,52.048c0,28.423,22.386,51.464,50,51.464s50-23.041,50-51.464C103,29.64,89.087,10.577,69.667,3.512" transform="translate(-2 -2.23)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </div>
                </div>
                <div class="index__benefit-box">
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Variedade de Sabores
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Ingredientes Frescos
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Entrega Rápida
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Descontos e Ofertas Especiais
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Customização de Pizzas
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Opções de Tamanho
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Cardápio Variado
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Pedidos Online Simples
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Higiene e Segurança
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Sustentabilidade
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Horário Estendido
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Pedidos para Eventos
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Entrega em toda a cidade
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Pedidos Antecipados
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Suporte a Dietas Especiais
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Opções de Molhos Caseiros
                        </span>
                    </div>
                    <div class="index__benefit-item">
                        <svg class="index__benefit-icon" width="18.036" height="18.001" viewBox="0 0 18.036 18.001"><g transform="translate(-3.012 -2.999)"><path d="M10.5,15.25A.74.74,0,0,1,10,15L7,12a.75.75,0,0,1,1-1l2.47,2.47L19,5a.75.75,0,0,1,1,1l-9,9A.74.74,0,0,1,10.5,15.25Z"/><path d="M12,21a9,9,0,0,1-7.87-4.66,8.669,8.669,0,0,1-1.07-3.41,9,9,0,0,1,4.6-8.81,8.67,8.67,0,0,1,3.41-1.07,8.86,8.86,0,0,1,3.55.34.75.75,0,1,1-.43,1.43,7.62,7.62,0,0,0-3-.28A7.5,7.5,0,0,0,7.24,17.82a7.5,7.5,0,0,0,8.35.75,7.5,7.5,0,0,0,2.2-1.84,7.42,7.42,0,0,0,1.64-5.51A.789.789,0,0,1,21,11.07a9,9,0,0,1-4.61,8.81A8.669,8.669,0,0,1,12.93,21Z"/></g></svg>
                        <span class="index__benefit-text">
                            Atendimento à Comunidade
                        </span>
                    </div>
                </div>
                <img class="index__benefit-img" src="./img/super-tabajara.png" alt="">
            </div>
        </section>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/items.js"></script>
    <script src="itens.php"></script>
    <script src="js/index.js"></script>
</body>
</html>

