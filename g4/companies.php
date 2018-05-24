<?php
include "src/functions/functions.php";
$connection = connect();
$data = getTwitterData($connection);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/newsairstyle.css">
    <title>Actualités</title>
</head>

<body>
<header class="header">
    <div class="headerNavTContainer">
        <div class="headerNavLogoContainer"><img class="headerNavLogo" src="src/components/img/Home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></div>
        <div class="headerNavBurger"><img class="headerNavTel" src="src/components/img/Home/burger.png" alt="BurgerMenu" class="bugerMenu"></div>
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
<section class="twittersection">
    <h2 class="twitterTitle">Actualités Twitter</h2>
    <div class="twitterContainer">
        <form action="src/actions/twitter_doCreate.php" method="post">
            <label for="name">name</label>
            <input type="text" name="name">
            <label for="url">url</label>
            <input type="text" name="url">
            <input type="submit" value="Create">
        </form>
        <?php displayTwitterContent($data) ?>
    </div>
</section>
<section class="newsairContainer">
    <h1 class="newsairTitle">NEWS AIR</h1>
    <div class="newsairDescContainer">
        <p class="newsairP1">
            Acheter un billet "Tour du monde" pour moins de 3.000 €… Séquencer un voyage à destinations multiples… Cumuler les milles inter-compagnies…
            Permettre un stop longue durée sur une escale avec un billet unique… sont autant d'avantages offerts par les Alliances des Compagnies aériennes !
        </p>
        <p class="newsairp2">
            Le voyage commence à peine le pied posé dans l'avion. La meilleure façon de découvrir une destination consiste à voyager avec la Compagnie
            aérienne nationale. Chacune avec son style, sa culture, son identité s'applique à nous transmettre "l'esprit du pays", dans les meilleures conditions
            de sécurité, de confort et d'accueil.
        </p>
        <p class="newsairp2">

            Les compagnies aériennes, regroupées en trois Alliances mondiales, s'enrichissent de leur multiculturalisme, offrent des innovations constantes,
            possèdent un "réseau" planétaire. Elles mutualisent leurs qualités et compétences, améliorent et harmonisent l'expérience "voyage".
        </p>
        <a href="" class="newsairLink">Découvrez-les</a>
    </div>
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
</body>

</html>
