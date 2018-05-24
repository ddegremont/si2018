<?php
include "src/functions/functions.php";
$connection = connect();
$data = getFactsheetData($connection);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/fichepratique.css">
    <title>Fiches Pratique - Une Année de Voyage</title>
</head>
<!--<body>
<h1>Factsheet</h1>
<a href="factsheetsCreate.php">Créer un article</a>
<section class="factsheets_filter">
    <form>
        <h2 class="factsheets_filter_title">Filtres:</h2>
        <label for="category">Company name</label>
        <select name="category" title="category">
            <?php displayFactsheetSelectCategory($data) ?>
        </select>
        <input type="submit">
    </form>
</section>
<section class="factsheets_articles">
    <?php displayFactsheetContent($data) ?>
</section>
<script type="text/javascript" src="src/js/factsheets.js"></script>
</body>-->
<body>
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
<section class="catSection">
    <h2 class="catTitle">Choisssez une catégorie</h2>
    <p class="catOrtext">Ou</p>
    <div class="link_addarticle">
        <a class="catAddArticle" href="factsheetsCreate.php">AJOUTER UN ARTICLE</a>
    </div>
    <form>
        <h2 class="factsheets_filter_title">Filtres:</h2>
        <label for="category">Company name</label>
        <select name="category" title="category">
            <?php displayFactsheetSelectCategory($data) ?>
        </select>
        <input type="submit">
    </form>
</section>
<section class="factsheets_articles">
    <?php displayFactsheetContent($data) ?>
</section>
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
