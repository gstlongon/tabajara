<?php
require("atualizar-itens.php");
?>

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                                <a class="nav__btn" href="sobre.php">
                                    Sobre Nós
                                </a>
                            </li>
                            <li>
                                <a class="nav__btn" href="contato.php">
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
                <!-- Additional required wrapper -->
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
                  
                 
                  <!-- <div class="swiper-slide">
                    <div class="swiper__img-box">
                        <picture>
                            <source media="(min-width: 567px)" srcset="./img/tabajara2-banner.jpg">
                            <img class="swiper__img" src="./img/tabajara2-banner-mobile.jpg" alt="">
                        </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper__img-box">
                        <picture>
                            <source media="(min-width: 567px)" srcset="./img/tabajara3-banner.jpg">
                            <img class="swiper__img" src="./img/tabajara3-banner-mobile.jpg" alt="">
                        </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper__img-box">
                        <picture>
                            <source media="(min-width: 567px)" srcset="./img/tabajara4-banner.jpg">
                            <img class="swiper__img" src="./img/tabajara4-banner-mobile.jpg" alt="">
                        </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper__img-box">
                        <picture>
                            <source media="(min-width: 567px)" srcset="./img/tabajara5-banner.jpg">
                            <img class="swiper__img" src="./img/tabajara5-banner-mobile.jpg" alt="">
                        </picture>
                    </div>
                  </div> -->
                  
                  
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
            <div class="index__item index__pizza-item">
                <div class="index__sale">
                    <img src="img/promotion.png" alt="Promoção">
                </div>
                <a href="">
                    <div class="index__item-img index__pizza-item--img"><img src="" /></div>
                </a>
                <div class="index__item-price index__pizza-item--price">R$ --</div>
                <div class="index__item-name index__pizza-item--name">--</div>
                <div class="index__item-desc index__pizza-item--desc">--</div>
                <div class="index__item-add index__pizza-item--add add-to-cart-button" type="button">Adicionar</div>
            </div>
            <div class="index__item index__burguer-item">
                <div class="index__sale">
                    <img src="img/promotion.png" alt="Promoção">
                </div>
                <a href="">
                    <div class="index__item-img index__burguer-item--img"><img src="" /></div>
                </a>
                <div class="index__item-price index__burguer-item--price">R$ --</div>
                <div class="index__item-name index__burguer-item--name">--</div>
                <div class="index__item-desc index__burguer-item--desc">--</div>
                <div class="index__item-add index__burguer-item--add add-to-cart-button">Adicionar</div>
            </div>
            <div class="index__item index__pratos-item">
                <div class="index__sale">
                    <img src="img/promotion.png" alt="Promoção">
                </div>
                <a href="">
                    <div class="index__item-img index__pratos-item--img"><img src="" /></div>
                </a>
                <div class="index__item-price index__pratos-item--price">R$ --</div>
                <div class="index__item-name index__pratos-item--name">--</div>
                <div class="index__item-desc index__pratos-item--desc">--</div>
                <div class="index__item-add index__pratos-item--add add-to-cart-button">Adicionar</div>
            </div>
            <div class="index__item index__sobremesas-item">
                <div class="index__sale">
                    <img src="img/promotion.png" alt="Promoção">
                </div>
                <a href="">
                    <div class="index__item-img index__sobremesas-item--img"><img src="" /></div>
                </a>
                <div class="index__item-price index__sobremesas-item--price">R$ --</div>
                <div class="index__item-name index__sobremesas-item--name">--</div>
                <div class="index__item-desc index__sobremesas-item--desc">--</div>
                <div class="index__item-add index__sobremesas-item--add add-to-cart-button">Adicionar</div>
            </div>
    
            <div class="index__item index__bebidas-item">
                <div class="index__sale">
                    <img src="img/promotion.png" alt="Promoção">
                </div>
                <a href="">
                    <div class="index__item-img index__bebidas-item--img"><img src="" /></div>
                </a>
                <div class="index__item-price index__bebidas-item--price">R$ --</div>
                <div class="index__item-name index__bebidas-item--name">--</div>
                <div class="index__item-desc index__bebidas-item--desc">--</div>
                <div class="index__item-add index__bebidas-item--add add-to-cart-button">Adicionar</div>
            </div>
        </div>
        <section class="container">
            <div class="index__pedidos" id="pedidos">
                <h1 class="index__title">Seja bem-vindo à Tabajara's Pizzaria, onde o amor pela comida se transforma em cada fatia.</h1>
                <div class="index__filter">
                    <button class="index__btn index__btn-pizza active">
                        <svg class="index__btn-icon" width="15" height="15" viewBox="0 0 15 15"><defs><clipPath id="a"><rect width="15" height="15" fill="rgba(255,255,255,0)"/></clipPath></defs><g clip-path="url(#a)"><rect width="15" height="15" fill="rgba(255,255,255,0)"/><g transform="translate(1.568 1.688)"><path d="M5.9,3.627,2.541,13.71a.625.625,0,0,0,.791.791L13.416,11.14M5.9,3.627l.023-.07A1.25,1.25,0,0,1,8,3.068l5.979,5.979a1.25,1.25,0,0,1-.489,2.07l-.07.023M5.9,3.627l7.513,7.513" transform="translate(-2.508 -2.702)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g><g transform="translate(5 6.25)"><circle cx="0.938" cy="0.938" r="0.938" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1"/></g><g transform="translate(7.5 8.75)"><circle cx="0.625" cy="0.625" r="0.625" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1"/></g><g transform="translate(4.063 9.688)"><circle cx="0.625" cy="0.625" r="0.625" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1"/></g></g></svg>
                        <span>Pizzas</span>
                    </button>
                    <button class="index__btn index__btn-lanche">
                        <svg class="index__btn-icon" width="15" height="15" viewBox="0 0 15 15"><g transform="translate(0 -30.853)"><path d="M14.972,38.308a18.86,18.86,0,0,0-.945-2.509.462.462,0,0,0,.015-.126A4.855,4.855,0,0,0,11.9,32.15a7.087,7.087,0,0,0-4.23-1.3c-2.338-.039-6.31,1.22-6.757,5.367a.239.239,0,0,0,.114.245,3.648,3.648,0,0,0-.742,2.917,2.656,2.656,0,0,0,.163.522A6.994,6.994,0,0,0,.04,41.765.145.145,0,0,0,0,41.907c.137.732.412,1.169.743,1.291-.255.522.889,1.535,1.1,1.649a11.657,11.657,0,0,0,5.182,1c.912.028,7.689.108,7.139-3.046a2.731,2.731,0,0,0,.391-2.061,2.876,2.876,0,0,0-.116-1.509.2.2,0,0,0,.053-.1c.129-.128.26-.253.394-.374A.429.429,0,0,0,14.972,38.308ZM10.786,33.96a5.357,5.357,0,0,0-.905-1.974,7.415,7.415,0,0,1,1.17.495c-.04.231-.033.472-.071.711A4.717,4.717,0,0,1,10.786,33.96ZM7.425,31.641A15.759,15.759,0,0,1,8,33.18,2.919,2.919,0,0,1,7.9,34.8a8.267,8.267,0,0,0-1.673-3.024A8.763,8.763,0,0,1,7.425,31.641ZM3.182,33.161c.41,1.286,1.026,2.423,1.5,3.661a.177.177,0,0,0,.348,0c.487-1.347.3-3.463-.649-4.323-.1-.089-.241.059-.2.227.136.57.423,1.032.582,1.6a3.616,3.616,0,0,1,.051,1.705c-.456-1.029-.96-2.011-1.4-3.053A6.3,6.3,0,0,1,5.93,31.831a.245.245,0,0,0,.041.2,8.713,8.713,0,0,1,1.662,3.531c.045.227.252.323.368.143a3.5,3.5,0,0,0,.5-2.29A4.959,4.959,0,0,0,8,31.643a7.018,7.018,0,0,1,1.3.179.348.348,0,0,0,.046.252,6.165,6.165,0,0,1,1.121,2.9c.042.344.343.316.455.087a6.335,6.335,0,0,0,.646-2.268,5.481,5.481,0,0,1,1.124,1.066,7.817,7.817,0,0,1,.865,1.772c-3.845.58-7.46,3-11.183,1.139a.153.153,0,0,0-.1-.083.426.426,0,0,0-.053,0,7.59,7.59,0,0,1-.953-.6A6.655,6.655,0,0,1,3.182,33.161Zm6.35,5.251c.2-.191.587,1.789.749,2.3l-.014,0a4.849,4.849,0,0,1-.526.04,3.536,3.536,0,0,0-.3-1.668,3.509,3.509,0,0,0-.615-1.067c.4-.1.8-.221,1.2-.345.379.684,1.285,2.462.546,2.935.007-.793-.705-3.109-1.175-2.448C9.308,38.284,9.427,38.516,9.532,38.413Zm-6.525-.332a3.839,3.839,0,0,0-.969,2.737,3.614,3.614,0,0,1-.512-.338,4.322,4.322,0,0,1,.589-1.563c.224-.352.608-.57.768-.984a.176.176,0,0,0,0-.127,6.892,6.892,0,0,0,4.025.588,2.818,2.818,0,0,1,1.714,2.138c-1.922-.688-4.1-.138-6.146.443a6.761,6.761,0,0,1,.743-2.591C3.283,38.19,3.143,37.966,3.008,38.081Zm-1.6-.026a1.756,1.756,0,0,1,.649-.754,6.146,6.146,0,0,0,.727.456c-.355.049-.7.631-.918,1a3.983,3.983,0,0,0-.478,1.6,2.663,2.663,0,0,1-.316-.342.146.146,0,0,0,.08-.152A4.13,4.13,0,0,1,1.412,38.055Zm6.325.21c.249-.047.5-.1.746-.163a4.381,4.381,0,0,1,.676,1.227c.163.437.174.988.308,1.428H9.193c-.138,0-.2-.686-.25-.829A3.059,3.059,0,0,0,7.737,38.265Zm2.726-.733.1-.034A3.956,3.956,0,0,1,12.74,40.25a4.178,4.178,0,0,0-1.588-1.208.113.113,0,0,0-.041,0A4.884,4.884,0,0,0,10.463,37.532Zm.694-.23.694-.233a.107.107,0,0,0,.036.1,3.138,3.138,0,0,1,.88.984c.252.421.334,1.019.589,1.415,0,.007.009.007.014.011-.088.11-.176.22-.262.335A3.953,3.953,0,0,0,11.157,37.3Zm.864-.289.466-.153a4.491,4.491,0,0,1,.728,1.128c.181.388.3.824.468,1.224-.057.066-.116.127-.172.195a3.029,3.029,0,0,0-.565-1.517A2.614,2.614,0,0,0,12.021,37.014ZM13.165,40.7a11.662,11.662,0,0,1,.922-1.139,1.791,1.791,0,0,1-.488,1.906c-.152-.254-.309-.5-.473-.725A.246.246,0,0,0,13.165,40.7Zm.719-1.712a4.469,4.469,0,0,0-1.135-2.209c.1-.031.187-.056.281-.086a.166.166,0,0,0,.035.1,5.243,5.243,0,0,1,.7,1.094,8.52,8.52,0,0,1,.334.875C14.03,38.837,13.955,38.907,13.885,38.984ZM1.245,36.605c.134.135.271.259.408.376a3.012,3.012,0,0,0-.521.834,4.209,4.209,0,0,0-.208,1.992,2.718,2.718,0,0,1-.16-.289A3.378,3.378,0,0,1,1.245,36.605Zm-.722,3.46a3.129,3.129,0,0,0,1.068,1.159c-.393.111-.778.214-1.154.3C.457,41.039.495,40.553.524,40.065ZM.275,42.158a29.853,29.853,0,0,0,3.87-.814,10.9,10.9,0,0,1,1.814-.263,1.952,1.952,0,0,0-.38.381c-.325.4-.479.44-.857,0-.126-.146-.275-.088-.336.13-.139.5-.345,1.057-.761.759-.132-.094-.251-.24-.377-.352-.029-.026-.06,0-.075.032-.019-.092-.125-.124-.168-.028q-.108.235-.2.48c-.266.65-.733.482-.961-.113a.115.115,0,0,0-.212-.04,1.659,1.659,0,0,1-.606.547C.66,43.047.421,42.588.275,42.158ZM7.436,44.94a19.439,19.439,0,0,1-4.373-.487c-.576-.134-1.774-.268-1.933-1.251a1.28,1.28,0,0,0,.583-.45c.18.3.435.722.72.593.385-.175.59-.716.737-1.233a.942.942,0,0,0,.635.818c.408.065.671-.335.849-.813a.711.711,0,0,0,.7.286c.3-.079.635-.678.846-.956a.28.28,0,0,0-.04-.376c.283-.014.566-.016.85-.014a.355.355,0,0,0,.005.076c.129.638.369,1.432.9,1.49a.816.816,0,0,0,.628-.146c.354-.281.455-.063.795-.012a1.7,1.7,0,0,0,.6-.074c.213-.046.523.6.778.678.329.1.577-.419.722-.849.477.7.945,1.008,1.333.149.223.393.521.759.851.771C13.189,44.921,8.13,44.942,7.436,44.94Zm6.605-2.752c-.01.025-.021.045-.031.067-.146-.269-.505-.047-.41.309v.005c-.274-.061-.556-.508-.7-.836-.07-.159-.256-.194-.32,0-.107.324-.219.886-.581.63a2.487,2.487,0,0,1-.481-.562c-.034-.127-.167-.194-.239-.079-.2.324-.552,1.075-.966.213-.053-.11-.118-.142-.206-.123a1.7,1.7,0,0,1-1.257-.23.146.146,0,0,0-.157.03c-.577.561-1.068.451-1.36-.551.457.012.918.038,1.39.074,0,.007,0,.013,0,.02a.245.245,0,0,0,.206.231,7.076,7.076,0,0,0,2.1-.216.276.276,0,0,0,.147-.216,4.772,4.772,0,0,0,.036-1.363A6.851,6.851,0,0,1,13.4,42.1a.169.169,0,0,0,.263.05,2.633,2.633,0,0,0,.511-.535A2.261,2.261,0,0,1,14.041,42.189Zm.332-3.705a5.2,5.2,0,0,0-1.089-1.872c.117-.036.238-.075.353-.108a.263.263,0,0,0,.16-.151c.257.652.48,1.323.7,2C14.456,38.4,14.416,38.442,14.374,38.483Z" transform="translate(0 0)" fill="#fff"/></g></svg>
                        <span>Lanches</span>
                    </button>
                    <button class="index__btn index__btn-pratos">
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg class="index__btn-icon" fill="#FFF" width="15px" height="15px" viewBox="0 -3.84 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  style="enable-background:new 0 0 122.88 115.21" xml:space="preserve">
                        <g>
                        <path d="M29.03,100.46l20.79-25.21l9.51,12.13L41,110.69C33.98,119.61,20.99,110.21,29.03,100.46L29.03,100.46z M53.31,43.05 c1.98-6.46,1.07-11.98-6.37-20.18L28.76,1c-2.58-3.03-8.66,1.42-6.12,5.09L37.18,24c2.75,3.34-2.36,7.76-5.2,4.32L16.94,9.8 c-2.8-3.21-8.59,1.03-5.66,4.7c4.24,5.1,10.8,13.43,15.04,18.53c2.94,2.99-1.53,7.42-4.43,3.69L6.96,18.32 c-2.19-2.38-5.77-0.9-6.72,1.88c-1.02,2.97,1.49,5.14,3.2,7.34L20.1,49.06c5.17,5.99,10.95,9.54,17.67,7.53 c1.03-0.31,2.29-0.94,3.64-1.77l44.76,57.78c2.41,3.11,7.06,3.44,10.08,0.93l0.69-0.57c3.4-2.83,3.95-8,1.04-11.34L50.58,47.16 C51.96,45.62,52.97,44.16,53.31,43.05L53.31,43.05z M65.98,55.65l7.37-8.94C63.87,23.21,99-8.11,116.03,6.29 C136.72,23.8,105.97,66,84.36,55.57l-8.73,11.09L65.98,55.65L65.98,55.65z"/>
                        </g>
                        </svg>
                        <span>Pratos</span>
                    </button>
                    <button class="index__btn index__btn-sobremesas">
                        <svg class="index__btn-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M115.6.917h-1.661c-1.32,0-2.419.593-2.5,1.35l-.209,1.9a2.4,2.4,0,0,0-.8-.274.734.734,0,0,0,.206-.49c0-.447-.477-.831-1.153-.993a.669.669,0,0,0,.18-.439V1.857c0-1.024-1.449-1.857-3.23-1.857H105.8c-.3,0-.549.141-.549.315s.246.315.549.315h.32c.256,0,.464.12.464.266s-.208.266-.464.266h-1.311c-.861,0-1.561.4-1.561.9a.591.591,0,0,0,.134.363c-.652.168-1.107.545-1.107.981a.734.734,0,0,0,.206.49c-.773.132-1.338.544-1.338,1.031a.768.768,0,0,0,.263.549l-.027.018a.219.219,0,0,0-.1.272l2.63,5.829a2.653,2.653,0,0,0,1.812,1.239l-3.323,1.61c-.176.085-.241.225-.162.349a.622.622,0,0,0,.515.207H111c.3,0,.549-.141.549-.315,0-.1-.085-.194-.217-.251l-3.17-1.536a2.831,2.831,0,0,0,2.087-1.3l2.63-5.829a.219.219,0,0,0-.1-.272.749.749,0,0,0-.434-.122h-.158l.337-3.064c.047-.426.665-.759,1.407-.759H115.6c.3,0,.549-.141.549-.315S115.9.917,115.6.917Zm-10.786.877h1.311c.861,0,1.561-.4,1.561-.9,0-.011,0-.022,0-.033.534.223.882.585.882.993v.116c0,.2-.278.356-.62.357l-3.134,0c-.256,0-.464-.12-.464-.266S104.558,1.794,104.814,1.794Zm-.662,1.166h4.615c.427,0,.774.2.774.445s-.347.445-.774.445h-4.615c-.427,0-.774-.2-.774-.445S103.724,2.96,104.151,2.96Zm-1.132,1.521H109.9c.427,0,.774.2.774.445s-.347.445-.774.445h-6.878c-.427,0-.774-.2-.774-.445S102.593,4.481,103.019,4.481Zm1.242,9.889,2.62-1.27,2.62,1.27Zm4.93-2.934a2.836,2.836,0,0,1-4.212,0l-1.8-3.993h6.609c.3,0,.549-.141.549-.315s-.246-.315-.549-.315h-6.894L102.527,6h9.116Z" transform="translate(-101.148)" fill="#fcfcfc"/></svg>
                        <span>Sobremesas</span>
                    </button>
    
                    <button class="index__btn index__btn-bebidas">
                        <svg class="index__btn-icon" width="11.745" height="15" viewBox="0 0 11.745 15"><g transform="translate(-71.543 -20.431)"><g transform="translate(71.543 20.431)"><path d="M71.676,30.971a.814.814,0,0,0-.133.446v3.589a.445.445,0,0,0,.462.425h4.5a.445.445,0,0,0,.462-.425V31.437a.815.815,0,0,0-.115-.417l-.1-.166a.209.209,0,0,1,.006-.231l.075-.114a.814.814,0,0,0,.133-.446v-2.49a.811.811,0,0,0-.115-.416l-.1-.167a.208.208,0,0,1,.006-.231l.075-.114a.814.814,0,0,0,.133-.446v-.325a5.035,5.035,0,0,0-.033-.52,2.663,2.663,0,0,0-.772-1.594l-.221-.219a2.117,2.117,0,0,1-.636-1.4.369.369,0,0,0,.259-.352V20.8a.369.369,0,0,0-.368-.368h-1.79a.369.369,0,0,0-.368.368v.993a.369.369,0,0,0,.163.306s0,.006,0,.009v0a2.117,2.117,0,0,1-.632,1.432l-.233.233a2.663,2.663,0,0,0-.763,1.586,5.067,5.067,0,0,0-.033.522v.328a.816.816,0,0,0,.133.447l.068.1a.22.22,0,0,1,0,.24l-.069.1a.814.814,0,0,0-.133.446v2.522a.813.813,0,0,0,.133.446l.068.1a.22.22,0,0,1,0,.24Zm.335-.519-.068-.1a.5.5,0,0,1-.081-.272V27.552a.5.5,0,0,1,.081-.272l.068-.1a.538.538,0,0,0,0-.589l-.068-.1a.5.5,0,0,1-.081-.273v-.328a4.741,4.741,0,0,1,.031-.487,2.3,2.3,0,0,1,.065-.343c.235.065.382.276.546.515a1.029,1.029,0,0,0,1.932,0c.2-.288.37-.536.7-.536s.505.248.7.536a1.286,1.286,0,0,0,.809.661.5.5,0,0,1-.08.242l-.075.114a.526.526,0,0,0-.013.568l.1.167a.494.494,0,0,1,.07.253v2.49a.5.5,0,0,1-.081.272l-.075.114a.526.526,0,0,0-.013.568l.1.167a.5.5,0,0,1,.07.254V34.4H71.861V31.417a.5.5,0,0,1,.081-.272l.068-.1A.538.538,0,0,0,72.011,30.451Zm4.5,4.661h-4.5c-.078,0-.144-.049-.144-.107v-.283h4.791v.283C76.653,35.064,76.587,35.113,76.509,35.113ZM73.359,20.8a.05.05,0,0,1,.05-.05H75.2a.05.05,0,0,1,.05.05v.993a.05.05,0,0,1-.05.05h-1.79a.05.05,0,0,1-.05-.05ZM72.564,24l.233-.233a2.439,2.439,0,0,0,.721-1.575l1.474,0a2.436,2.436,0,0,0,.729,1.578l.221.219a2.343,2.343,0,0,1,.679,1.4,4.786,4.786,0,0,1,.031.485V25.9c-.236-.065-.383-.276-.548-.515a1.029,1.029,0,0,0-1.932,0c-.2.288-.37.536-.7.536s-.505-.248-.7-.536a1.4,1.4,0,0,0-.7-.637A2.348,2.348,0,0,1,72.564,24Z" transform="translate(-71.543 -20.431)" fill="#fff"/><rect width="3.663" height="0.318" transform="translate(0.93 6.28)" fill="#fff"/><rect width="3.663" height="0.318" transform="translate(0.93 10.15)" fill="#fff"/><path d="M258.312,136.226h4.4l.71-8.089h-2.752v-1.113l1.631-2.276-.259-.185-1.691,2.359v1.215H257.6Zm.292-.318-.032-.369h3.883l-.032.369Zm3.878-.687h-3.939l-.442-5.035c.269.045.425.27.6.527a1.029,1.029,0,0,0,1.932,0c.2-.288.37-.536.7-.536s.505.249.7.536a1.316,1.316,0,0,0,.777.655Zm.594-6.765-.227,2.591c-.234-.066-.379-.277-.543-.514a1.176,1.176,0,0,0-.966-.674.9.9,0,0,0-.668.292v-1.695h2.4Zm-2.723,2.106c-.19.275-.361.507-.684.507s-.505-.248-.7-.536a1.219,1.219,0,0,0-.893-.671l-.123-1.406h2.4v2.106Z" transform="translate(-251.678 -121.247)" fill="#fff"/><path d="M101.671,250.535a.753.753,0,0,0,.569-.268.427.427,0,0,1,.694,0,.738.738,0,0,0,1.138,0,.45.45,0,0,1,.347-.178v-.318a.753.753,0,0,0-.569.268.427.427,0,0,1-.694,0,.738.738,0,0,0-1.138,0,.427.427,0,0,1-.694,0,.753.753,0,0,0-.569-.268v.318a.45.45,0,0,1,.347.178A.752.752,0,0,0,101.671,250.535Z" transform="translate(-99.825 -242.469)" fill="#fff"/><path d="M101.671,291.764a.753.753,0,0,0,.569-.268.427.427,0,0,1,.694,0,.738.738,0,0,0,1.138,0,.45.45,0,0,1,.347-.178V291a.753.753,0,0,0-.569.268.427.427,0,0,1-.694,0,.738.738,0,0,0-1.138,0,.427.427,0,0,1-.694,0,.752.752,0,0,0-.569-.268v.318a.45.45,0,0,1,.347.178A.753.753,0,0,0,101.671,291.764Z" transform="translate(-99.825 -282.386)" fill="#fff"/></g></g></svg>
                        <span>Bebidas</span>
                    </button>
                </div>
                <div class=" index__pizza-area active"></div>
                <div class="index__burguer-area"></div>
                <div class="index__sobremesas-area"></div>
                <div class="index__pratos-area"></div>
                <div class="index__bebidas-area"></div>
            </div>
        </section>
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
    <script src="js/index.js"></script>
</body>
</html>

