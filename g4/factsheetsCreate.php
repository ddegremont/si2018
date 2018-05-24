<?php
include "src/functions/functions.php";
$connection = connect();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/factsheets_create_style.css">
    <title>Créer un article</title>
</head>
<header class="header">
    <div class="headerNavTContainer">
        <div class="headerNavLogoContainer"><img class="headerNavLogo" src="img/home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></div>
        <div class="headerNavBurger"><img class="headerNavTel" src="img/home/burger.png" alt="BurgerMenu" class="bugerMenu"></div>
    </div>
    <div class="headerNavContainer">
        <a class="headerNav" href="">Home</a>
        <a class="headerNav" href="">Actualités</a>
        <a class="headerNav" href="">Fiches pratiques</a>
        <a class="headerNav" href="">Boite à image</a>
        <a class="headerNav" href="">Top 100</a>
        <a class="headerNav" href="">Contact</a>
    </div>
    <div class="headerTitleContainer">
        <h1 class="headerTitle">Une Année de Voyages</h1>
        <h1 class="headerSubTitle">Soyez un voyageur averti !</h1>
    </div>
</header>
<body>
<h1 class="create_article_title">Créer un article</h1>
<div class="link_container">
  <a class="link_fact" href="factsheets.php">Revenir en arrière</a>
</div>
<div class="form_container">
  <form action="src/actions/factsheetArticle_doCreate.php" method="post">
      <label for="title">title</label>
      <input type="text" name="title" title="title">
      <label for="imgSrc">imgSrc</label>
      <input type="text" name="imgSrc" title="imgSrc">
      <label for="imgAlt">imgAlt</label>
      <input type="text" name="imgAlt" title="imgAlt">
      <label for="paragraph">paragraph</label>
      <input type="text" name="paragraph" title="paragraph">
      <label for="category">category</label>
      <input type="text" name="category" title="category">
      <label for="websiteUrl">websiteUrl</label>
      <input type="text" name="websiteUrl" title="websiteUrl">
      <input class="create_formbtn" type="submit" value="Créer">
  </form>
</div>
<footer class="footer">
    <h1 class="footerPartenaire">PARTENAIRES</h1>
    <div class="footerPartImgContainer">
        <img class="footerPartImg" src="src/components/img/Accueil/adp-logo2.png" alt="">
        <img class="footerPartImg" src="src/components/img/Accueil/Fujifilm_logo_logotype.png" alt="">
        <img class="footerPartImg" src="src/components/img/Accueil/nikon-logo.png" alt="">
    </div>
    <div class="footerBotomContainer">
        <div class="footerBotomCopyContainer">
            <h1 class="footerBotomCopyContainerNav">Homepage</h1>
            <h1 class="footerBotomCopyContainerNav">About</h1>
            <h1 class="footerBotomCopyContainerNav">US contact</h1>
        </div>
        <div class="footerBotomCopyright">Tous droits réservés Une Année De Voyages ©2018-2020</div>
    </div>
</footer>
<script type="text/javascript" src="src/js/factsheets.js"></script>
</body>
</html>
