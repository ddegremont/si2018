<?php
define('APP_ROOT_DIR', dirname(__DIR__)."/");
require_once APP_ROOT_DIR."public/includes/connection.php";
require_once APP_ROOT_DIR."public/includes/functions.php"; ?>

<!doctype html>
<html lang="fr">
<head>
    <!-- HTML Meta Tags -->
    <title>The design tool that does it all.</title>
    <meta name="description" content="Framer is the only tool you need to create interactive designs for any platform. Powering the product teams at Dropbox, Pinterest, Twitter, and thousands more.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Une année de voyages">
    <meta itemprop="description" content="Framer is the only tool you need to create interactive designs for any platform. Powering the product teams at Dropbox, Pinterest, Twitter, and thousands more.">
    <meta itemprop="image" content="http://framer.com/assets/static/images/social/design.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://uneanneedevoyages.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Une année de voyages">
    <meta property="og:description" content="Des voyages testés... Des idées pour partir toute l'année !">
    <meta property="og:image" content="http://framer.com/assets/static/images/social/design.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Une année de voyages">
    <meta name="twitter:description" content="Des voyages testés... Des idées pour partir toute l'année !">
    <meta name="twitter:image" content="http://framer.com/assets/static/images/social/design.png">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/articles.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header__header">
            <img class="header__logo" src="assets/img/logo.png">
            <img class="header__burger" src="assets/img/bars.svg">
            <nav class="header__nav">
                <ul class="header__nav__items">
                    <li class="header__nav__items__item"><a href="#" class="header__nav__items__item__link">Accueil</a></li>
                    <li class="header__nav__items__item"><a href="#" class="header__nav__items__item__link">Catégorie</a></li>
                    <li class="header__nav__items__item"><a href="#" class="header__nav__items__item__link header__three">Qui sommes-nous ?</a></li>
                    <li class="header__nav__items__item"><a href="#" class="header__nav__items__item__link">Contact</a></li>
                </ul>
            </nav>
        </div>
        <h1 class="header__title">Détour par l'Italie.</h1>
    </header>

    <?php
    define('APP_PAGE_PARAM', 'p');
    $currentPage = $_GET[APP_PAGE_PARAM];
    $page = getPage($pdo, $currentPage);

    displayPage($page);

    ?>

    <section class="oneWorld">
        <h2 class="oneWorld__title">One World</h2>
        <div class="oneWorld__blueline"></div>
        <div class="oneWorld__container">
            <div class="oneWorld__container__item">
                <div class="oneWorld__container__item__img"></div>
                <div class="oneWorld__container__item__circle"></div>
                <div class="oneWorld__container__item__box"></div>
            </div>
            <div class="oneWorld__container__item"></div>
            <div class="oneWorld__container__item"></div>
            <div class="oneWorld__container__item"></div>
        </div>
        <div class="oneWorld__mobileContainer">
            <div class="oneWorld__mobileContainer__item">
            </div>
            <div class="oneWorld__mobileContainer__item"></div>
        </div>
    </section>

    <section class="starAlliance">
        <h2 class="starAlliance__title">StarAlliance</h2>
        <div class="starAlliance__blueline"></div>
        <div class="starAlliance__container">
            <div class="starAlliance__container__item">
            </div>
            <div class="starAlliance__container__item"></div>
            <div class="starAlliance__container__item"></div>
            <div class="starAlliance__container__item"></div>
        </div>
        <div class="starAlliance__mobileContainer">
            <div class="starAlliance__mobileContainer__item">
            </div>
            <div class="starAlliance__mobileContainer__item"></div>
        </div>

    </section>

    <section class="skyTeam">
        <h2 class="skyTeam__title">Sky Team</h2>
        <div class="skyTeam__blueline"></div>
        <div class="skyTeam__container">
            <div class="skyTeam__container__item">
            </div>
            <div class="skyTeam__container__item"></div>
            <div class="skyTeam__container__item"></div>
            <div class="skyTeam__container__item"></div>
        </div>
        <div class="skyTeam__mobileContainer">
            <div class="skyTeam__mobileContainer__item">
            </div>
            <div class="skyTeam__mobileContainer__item"></div>
        </div>
    </section>

    <footer class="footer">
        <img class="footer__logo" src="assets/img/logo.png">
    </footer>




  <script src="app.generated.js"></script>
</body>
</html>