<!DOCTYPE html>
<html lang="en">
<head>
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
        <title>Pizzaria Tabajara´s - Contato</title>
    </head>
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
    <div class="main">
        <div class="container">
            <div class="contact__content">
                <form class="form__contact">
                    <h4>Entre em contato, feedbacks, sugestões, reclamações!</h4>
                    <span><span class="form__required">*</span> - Items obrigatórios</span>
                    <div class="form__input-box">
                        <label class="form__label" for="nome">Nome<span class="form__required">*</span>:</label>
                        <input class="form__input" name="nome" type="text" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form__input-box">
                        <label class="form__label" for="email">E-mail:<span class="form__required">*</span>:</label>
                        <input class="form__input" name="email" type="text" placeholder="email" required>
                    </div>
                    <div class="form__input-box">
                        <label class="form__label" for="text">Mande sua mensagem<span class="form__required">*</span>:</label>
                        <textarea class="form__text" id="text" name="text" rows="4" cols="50"></textarea>
                    </div>
                </form>
                <div class="contact__box">
                    <img class="contact__img" src="img/tabajara-footer.png" alt="Animação segurando uma pizza">
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.364282334461!2d-49.96488022387673!3d-22.226253213906105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd76ca098206d%3A0x72312b04c461ab06!2sR.%20Tabajara%2C%2055%20-%20Sen.%20Salgado%20Filho%2C%20Mar%C3%ADlia%20-%20SP%2C%2017502-273!5e0!3m2!1spt-BR!2sbr!4v1695659720042!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="js/page.js"></script>

</body>
</html>