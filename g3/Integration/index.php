<?php
include "../db.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Une Année De Voyages</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
    <body>
      <div class="menuDesktop">
        <nav class="navDesktop">
          <ul class="ulDesktop">
            <li class="liDesktop"><a href="index.php" class="liLinks">Accueil</a></li>
            <li class="liDesktop"><a href="styles/view/articles.html" class="liLinks">Article</a></li>
            <li class="liDesktop"><a href="styles/view/top.html" class="liLinks">Top 100</a></li>
            <li class="liDesktop"><a href="styles/view/contact.html" class="liLinks">Contact</a></li>
          </ul>
        </nav>
      </div>

      <div class="burgermenuContainer --phoneTablet">
        <div class="button_container" id="toggle">
          <span class="top --pos"></span>
          <span class="middle --pos"></span>
          <span class="bottom --pos"></span>
        </div>

        <div class="overlay" id="overlay">
          <nav class="overlay-menu --nav">
            <ul>
              <li><a href="../../index.php" class="container-a">Accueil</a></li>
              <li><a href="./articles.html" class="container-a">Article</a></li>
              <li><a href="./top.html" class="container-a">Top 100</a></li>
              <li><a href="./contact.html" class="container-a">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <section class="homepage">
        <div class="homepage-background"><img class="homepage-background-img" src="'../styles/img/magazine.jpg'" alt=""></div>
        <h1 class="homepage-title">Une années de voyages</h1>
        <div class="homepage-bar"></div>
        <p class="homepage-paragraph">Une revue pour les gens qui <br />
          aime voyager et découvir</p>
    </section>

    <section class="about">
      <h2 class="about-title">A propos</h2>
      <div class="about-bar"></div>
        <div class="about-paragraph">
          <p class="about-paragraph-content">Un mook annuel à collectionner grâce à sa couverture illustrée, œuvre d'un artiste</p>
          <p class="about-paragraph-content">Des goddies : 5 dessins originaux issus des "illustrateurs voyageurs" de la communauté internationale Urban Sketchers</p>
          <p class="about-paragraph-content">300 pages de reportages sous forme de "carnets de voyages"</p>
          <p class="about-paragraph-content">Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !)</p>
          <p class="about-paragraph-content">40.000 exemplaires vendus en kiosques, librairies et sur notre site</p>
          <p class="about-paragraph-content">Des fiches pratiques d'exception et détachables.</p>
          <p class="about-paragraph-content">TV YouTube</p>
        </div>
    </section>

    <section class="tweets">
      <h2 class="tweets-title">Live Tweets</h2>
      <div class="tweets-bar"></div>
      <div class="tweeterContainer">
        <?php include "../twitter/displayTwitter.php" ?>
        </div>
    </section>

    <footer class="partners">
      <h2 class="partners-title">Partenaires</h2>
      <div class="partners-container">
        <img class="partners-container-aeroports" src="styles/img/aeroports.png" alt="Aéroports de Paris" class="partners-container-content">
        <img class="partners-container-fujifilm" src="styles/img/fujifilm.png" alt="Fujifilm" class="partners-container-content">
        <img class="partners-container-nikon" src="styles/img/nikon.jpg" alt="Nikon" class="partners-container-content">
      </div>
      <div class="partners-copyrights">
        <p class="partners-copyrights-content">Tous droits réservés Une Année De Voyages ©2018-2022</p>
      </div>
    </footer>
    <script src="index.js"></script>
  </body>
</html>
