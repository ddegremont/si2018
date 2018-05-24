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
<!--<body>
    <header class="header">
        <div class="header-header">
            <img class="header-logo" src="assets/img/logo.png">
            <img class="header-burger" src="assets/img/bars.svg">
        </div>
        <h1 class="header-title">Une année de voyages</h1>
        <h2 class="header-subtitle">Des voyages testés... Des idées pour partir toute l'année !</h2>
    </header>


    <section class="section2">
        <h2 class="section2-title">Soyez un voyageur averti !</h2>
        <div class="section2-blueline"></div>
        <span class="section2-list">Un mook collector. Des fiches pratiques. Une application. Un site.</span>
        <p class="section2-paragraph">"Un mook (contraction de magazine et book) est un ouvrage hybride dont le format se situe entre le magazine et le livre. Il est publié de manière périodique et renferme essentiellement de grands reportages. Il comprend également des dessins et des photos servant à l'illustration des textes.</p>
        <img class="section2-magazine" src="">
    </section>

    <section class="section3">
        <h1 class="section3-title">Carnet de voyage</h1>
        <h2 class="section3-subtitle">Détour par la côte italienne pour cet été 2018. Les meilleurs hôtels et restaurants de la côte.</h2>
        <div class="section3-textArrow">
            <span class="section3-textArrow-text">Lire l'article</span>
            <img class="section3-textArrow-arrow" src="assets/img/chevron-right.svg">
        </div>
    </section>

    <section class="carousel">

    </section>

    <section class="section4Mobile">
        <h2>Découvrez nos Tops</h2>
        <div class="section4Mobile-textArrow">
            <span class="section4Mobile-textArrow-text">Découvrir</span>
            <img class="section4Mobile-textArrow-arrow" src="assets/img/chevron-right.svg">
        </div>
    </section>

    <section class="section4Desktop">
        <h2>Découvrez nos TOPS</h2>
        <div class="section4Desktop-blueline"></div>
        <div class="section4Desktop-align">
            <div class="section4Desktop-align-item">
                <p>Top 100 de nos meilleurs restaurants</p>
            </div>
            <div class="section4Desktop-align-item"></div>
            <div class="section4Desktop-align-item"></div>
        </div>

    </section>-->

    <section class="articlesSection">
      <h2 class="articlesSection__title">Les derniers articles</h2>
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

    <footer>

    </footer>

    <script src="app.generated.js"></script>
</body>
</html>
