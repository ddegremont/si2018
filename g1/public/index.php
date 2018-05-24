<?php
require 'includes/connection.php';

$sql = "SELECT
`title`,
`content`,
`img_src`,
`img_alt`
FROM
`articles`
;";
$stmt = $pdo->prepare($sql);
$stmt->execute();


$sql = "SELECT
`content`,
`article_number`
FROM
`articles`
;";
$stmt2 = $pdo->prepare($sql);
$stmt2->execute();
?>

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
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">

            <div class="header__nav__logo">
                <img src="assets/img/logo.png" alt="" class="header__nav__logo__img">
            </div>

            <div class="header__nav__list">
                <div class="header__nav__list__item">Accueil </div>
                <div class="header__nav__list__item">Catégorie</div>
                <div class="header__nav__list__item">Qui sommes-nous ?</div>
                <div class="header__nav__list__item">Contact</div>
            </div>

            <div class="header__nav__burger" >
                <div class="header__nav__burger__item"></div>
                <div class="header__nav__burger__item"></div>
                <div class="header__nav__burger__item"></div>
            </div>
        </nav>
        <div class="header__infos">
            <h1 class="header__infos__title">une annee de voyage</h1>
            <p class="header__infos__quote">Des voyages testés… Des idées pour partir toute l’année !</p>
        </div>
        <div class="burger"></div>

    </header>

    <section class="search">
        <div class="search__head">
            <h2 class="search__head__title">Je recherche ...</h2>
            <div class="search__head__underline"></div>
        </div>

        <div class="search__infosContainer">
            <div class="search__infosContainer__item">
                <div class="search__infosContainer__item__img">
                  <a><img src="../src/img/Tops/Resto/r1.jpg" alt=""></a>
                </div>
                <p class="search__infosContainer__item__title">Compagnies aériennes</p>
            </div>
            <div class="search__infosContainer__item">
                <div class="search__infosContainer__item__img">
                  <a><img src="../src/img/Tops/Resto/r1.jpg" alt=""></a>
                </div>
                <p class="search__infosContainer__item__title">Croisières</p>
            </div>
            <div class="search__infosContainer__item">
                <div class="search__infosContainer__item__img">
                  <a><img src="../src/img/Tops/Hotel/barcelona.jpg" alt=""></a>
                </div>
                <p class="search__infosContainer__item__title">Hôtel</p>
            </div>
            <div class="search__infosContainer__item">
                <div class="search__infosContainer__item__img">
                  <a><img src="../src/img/Tops/Resto/r1.jpg" alt=""></a>
                </div>
                <p class="search__infosContainer__item__title">Restaurants</p>
            </div>
            <div class="search__infosContainer__item">
                <div class="search__infosContainer__item__img">
                  <a><img src="../src/img/Tops/Resto/r1.jpg" alt=""></a>
                </div>
                <p class="search__infosContainer__item__title">Activités</p>
            </div>
            <div class="search__infosContainer__item">
                <div class="search__infosContainer__item__img">
                  <a><img src="../src/img/Tops/Spa/spaHome.jpg" alt=""></a>
                </div>
                <p class="search__infosContainer__item__title">Spa / Thalasso</p>
            </div>
        </div>
    </section>


    <section class="articlesSection">
          <h2 class="articlesSection__title">Les derniers articles</h2>
          <div class="articlesSection__underline"></div>
          <div class="articlesSection__articlesCtn">
            <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <div class="articlesSection__articlesCtn__article">
              <img class="articlesSection__articlesCtn__article__img" src="<?=$row['img_src']?>" alt="<?=$row['img_alt']?>">
              <h3 class="articlesSection__articlesCtn__article__title"><?=$row['title']?></h3>
            </div>
            <?php endwhile;?>
            <?php while (false !== $row = $stmt2->fetch(PDO::FETCH_ASSOC)) :?>
              <div class="articlesSection__articlesCtn__article__ctn <?=$row['article_number']?>">
                <p class="articlesSection__articlesCtn__article__ctn__content"><?=$row['content']?></p>
                <div class="articlesSection__articlesCtn__article__ctn__circle">
                  <a>
                    <svg fill="#32CCCD" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve">
                    <polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 "/>
                    </svg>
                  </a>
                </div>
              </div>
            <?php endwhile;?>
            <div class="circlesCtn">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
          <div class="articlesSection__btn">
            Voir tous les articles
          </div>
        </section>

    <section class="top">
        <div class="top__head">
            <h2 class="top__head__title">Découvrez nos TOPS</h2>
            <div class="top__head__underline"></div>
        </div>

        <div class="top__container">
            <div class="top__container__item">
                <a href="top_resto_page.php"><img src="../src/img/Tops/Resto/r1.jpg" alt="Top 100 Restaurants" class="top__container__item__img"></a>
                <p class="top__container__item__title">Nos meilleurs restaurants</p>
            </div>

            <div class="top__container__item">
                <a href="top_hotels_page.php"><img src="../src/img/Tops/Hotel/barcelona.jpg" alt="Top 100 Hôtels" class="top__container__item__img"></a>
                <p class="top__container__item__title">Nos meilleurs hôtels</p>
            </div>

            <div class="top__container__item">
                <img src="../src/img/Tops/Spa/spaHome.jpg" alt="Top 100 Spas/Thalassos" class="top__container__item__img">
                <p class="top__container__item__title">Nos meilleures Thalassos</p>
            </div>
        </div>

    </section>

    <section class="advertise">
        <div class="advertise__infos">
            <h2 class="advertise__infos__title">Annonceurs rejoignez-nous !</h2>
            <div class="advertise__infos__btn">En savoir plus</div>
        </div>
    </section>

    <section class="twitter">
        <div class="twitter__head">
            <h2 class="twitter__head__title">Les derniers Tweets</h2>
            <div class="twitter__head__underline"></div>
        </div>
        <div class="twitter__container">
            <blockquote class="twitter-tweet" data-lang="fr"><p lang="fr" dir="ltr">Gênes accueille le <a href="https://twitter.com/hashtag/MSCFantasia?src=hash&amp;ref_src=twsrc%5Etfw">#MSCFantasia</a> dans toute sa splendeur.<br>Merci Nico pour cette photo. <a href="https://t.co/IGU2i0g4lL">https://t.co/IGU2i0g4lL</a> <a href="https://t.co/iTjSA9xbg3">pic.twitter.com/iTjSA9xbg3</a></p>&mdash; MSC Croisières (@MSCCroisieres) <a href="https://twitter.com/MSCCroisieres/status/996341944233099265?ref_src=twsrc%5Etfw">15 mai 2018</a></blockquote>

            <blockquote class="twitter-tweet" data-lang="fr"><p lang="fr" dir="ltr">Nous y sommes presque.<a href="https://twitter.com/hashtag/EnjoyTheSea?src=hash&amp;ref_src=twsrc%5Etfw">#EnjoyTheSea</a> <a href="https://twitter.com/hashtag/MSCSeaview?src=hash&amp;ref_src=twsrc%5Etfw">#MSCSeaview</a> <a href="https://t.co/XxByiqpT91">https://t.co/XxByiqpT91</a> <a href="https://t.co/Cf7nZSKvkL">pic.twitter.com/Cf7nZSKvkL</a></p>&mdash; MSC Croisières (@MSCCroisieres) <a href="https://twitter.com/MSCCroisieres/status/996033665372229632?ref_src=twsrc%5Etfw">14 mai 2018</a></blockquote>


        </div>

    </section>

    <section class="promo">
        <div class="promo__head">
            <h2 class="promo__head__title">Soyez un voyageur averti !</h2>
            <div class="promo__head__underline"></div>
        </div>

        <div class="promo__container">
            <img src="assets/img/promo.png" alt="" class="promo__container__img">
            <div class="promo__container__description">
                <img src="assets/img/leftLine.png" alt="" class="promo__container__description__img --left">
                <p class="promo__container__description__text">
                    TÉLÉCHARGEZ notre mook, hybride dont le format se situe entre le magazine et le livre. Ce numéro 2018 est unique renfermant 4211 photographies est le résultat d'une collaboration avec 11 reporters-photographes qui ont parcouru le monde à travers 130 destinations exceptionnelles.</p>
                <img src="assets/img/rightLine.png" alt="" class="promo__container__description__img --right">
            </div>
        </div>
    </section>

    <section class="staff">
        <div class="staff__head">
            <h2 class="staff__head__title">L'équipe</h2>
            <div class="staff__head__underline"></div>
        </div>

        <div class="staff__container">
            <div class="staff__container__item">
                <div class="staff__container__item__img"></div>
                <div class="staff__container__item__infos">
                    <p class="staff__container__item__infos__name">Judith Lossmann
                    </p>
                    <p class="staff__container__item__infos__status">Fondatrice - Rédactrice en chef</p>
                </div>
            </div>
            <div class="staff__container__item">
                <div class="staff__container__item__img"></div>
                <div class="staff__container__item__infos">
                    <p class="staff__container__item__infos__name">Caroline M’zali</p>
                    <p class="staff__container__item__infos__status">Pigiste - Secrétaire de rédaction</p>
                </div>
            </div>
            <div class="staff__container__item">
                <div class="staff__container__item__img"></div>
                <div class="staff__container__item__infos">
                    <p class="staff__container__item__infos__name">Inma Serrano
                    </p>
                    <p class="staff__container__item__infos__status">Illustratrice</p>
                </div>
            </div>
            <div class="staff__container__item">
                <div class="staff__container__item__img"></div>
                <div class="staff__container__item__infos">
                    <p class="staff__container__item__infos__name">Damien Dégremont
                    </p>
                    <p class="staff__container__item__infos__status">Développeur du site</p>
                </div>
            </div>

        </div>

        <div class="staff__contact">
            <p class="staff__contact__text">Nous contacter </p>
            <img src="assets/img/arrowContact.svg" alt="" class="staff__contact_img">
        </div>
    </section>

    <section class="sponsor">
        <div class="sponsor__container">
            <img src="assets/img/sponsor.png" alt="" class="sponsor__container__img">
        </div>



    <footer class="footer">

    </footer>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="app.generated.js"></script>
</body>
</html>
