<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/accueilStyle.css">
</head>

<body>
<header class="header">
    <div class="headerNavTContainer">
        <div class="headerNavLogoContainer">
            <a href="index.html"><img class="headerNavLogo" src="src/components/img/home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></a>
        </div>
        <!-- The overlay -->
        <div id="myNav" class="overlay">

            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="accueil.html">Home</a>
                <a href="actualit.html">Actualités</a>
                <a href="fichepratique.html">Fiches Pratiques</a>
                <a href="imagebox.html">Boite à image</a>
                <a href="top.html">Top 100</a>
                <a href="contact.html">Contact</a>
            </div>

        </div>

        <!-- Use any element to open/show the overlay navigation menu -->
        <span onclick="openNav()"><div class="headerNavBurger"><img class="headerNavTel" src="src/components/img/home/burger.png" alt="BurgerMenu" class="bugerMenu"></div></span>
    </div>
    <div class="headerNavContainer">
        <a class="headerNav" href="accueil.html">Home</a>
        <a class="headerNav" href="actualit.html">Actualités</a>
        <a class="headerNav" href="fichepratique.html">Fiches pratiques</a>
        <a class="headerNav" href="imagebox.html">Boite à image</a>
        <a class="headerNav" href="top.html">Top 100</a>
        <a class="headerNav" href="contact.html">Contact</a>
    </div>
    <div class="headerTitleContainer">
        <h1 class="headerTitle">Une Année de Voyages</h1>
        <h1 class="headerSubTitle">Soyez un voyageur averti !</h1>
    </div>
</header>
<section class="mookSection">
    <a href="https://fr.calameo.com/read/0055876561d93fbc72946" target="_blank"><img class="mookSectionImg" src="src/components/img/Accueil/uadv-couv.png" alt="CouvertureDuMook" class="mookImg"></a>
    </div>

    <div class="mookDescriptContainer">
        <h2 class="mookTitle">Mook Collector</h2>
        <p class="mookDescrip">"Un mook (contraction de magazine et book) est un ouvrage hybride dont le format se situe entre le magazine et le livre. Il est publié de manière périodique et renferme essentiellement de grands reportages. Il comprend également des dessins
            et des photos servant à l’illustration des textes." <span class="mookDescripWiki">— Wikipédia</span></p>
        <ul class="mookList">
            <li class="mookListDescrip">Un mook annuel à collectionner grâce à sa couverture illustrée, œuvre d'un artiste.</li>
            <li class="mookListDescrip">Des goddies : 5 dessins originaux issus des "illustrateurs voyageurs" de la communauté internationale Urban Sketchers.</li>
            <li class="mookListDescrip">300 pages de reportages sous forme de "carnets de voyages".</li>
            <li class="mookListDescrip">Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !).
            </li>
            <li class="mookListDescrip">40.000 exemplaires vendus en kiosques, librairies et sur notre site.</li>
            <li class="mookListDescrip">Des fiches pratiques d'exception et détachables.
            </li>
            <li class="mookListDescrip">TV YouTube</li>
        </ul>
    </div>
</section>
<section class="toolTip">
    <h3 class="toolTipTitle">Des fiches pratiques</h3>
    <ul class="toolTiptextContainer">
        <li class="toolTiptext">Minutieusement détaillées, elles vous disent tout du voyage décrit nos articles : Hôtels, restaurants, boutiques, musée, shopping, The Place to be et aussi quelle est la meilleure compagnie aérienne pour rejoindre par exemple San Francisco,
            quelles sont les meilleures dates, comment aller à pied de Nob Hill au Golden Gate en passant par des ruelles remplies de street art méconnus du grand public, arriver pile à l'heure pour être dans l'axe du soleil sur le 3ème pilier et
            réussir à coup sûr la photo du siècle tout en s'émerveillant de la beauté de la Bay... ça, c'est Une Année de Voyages !
        </li>
        <li class="toolTiptext">Des QR Codes intégrés aux fiches pratiques pour offrir une vitrine extra-large à nos partenaires
        </li>
    </ul>
    <h3 class="toolTipTitle"> Une application</h3>
    <ul class="toolTiptextContainer">
        <li class="toolTiptext">Qui supprime l'obsolescence du print... Rien que ça ! Une Année De Voyages est un mook print qui vit simultanément à l’ère du numérique... C'est sur l'application que nos fiches pratiques seront updatées et téléchargeables ! Ainsi Une Année
            De Voyages devient une sorte de "bible" intemporelle des destinations avec des reportages bénéficiant d'une durée de vie illimitée... Le rêve !
        </li>
        <li class="toolTiptext">Qui vous dit, sous forme d'un Quizz fun et personnalisé "Quel voyage êtes-vous ?" dont le résultat renvoie forcément à une destination qui correspond à un de nos articles.</li>
    </ul>
    <h3 class="toolTipTitle">Un Site</h3>
    <ul class="toolTiptextContainer">
        <li class="toolTiptextli">Présentation des numéros en cours et archivés</li>
        <li class="toolTiptextli">La possibilité d'acheter en ligne les numéros déjà parus et l'actuel en cours</li>
        <li class="toolTiptextli">D'accéder via un abonnement Full Premium à tous les articles avant leur parution dans le prochain mook</li>
        <li class="toolTiptextli">Les bons plans aériens</li>
        <li class="toolTiptextli">Les Tops 100 : restaurants, hôtels, spas</li>
    </ul>
</section>
<section class="statScreen">

    <div class="statScreenContainer">

        <div class="statScreenNumberContainer">
            <p class="statScreenNumber">11</p>
            <p class="statScreenDesc">Reporters et<br> photographes</p>
        </div>
        <div class="statScreenNumberContainer">
            <p class="statScreenNumber">130</p>
            <p class="statScreenDesc">Destinations</p>
        </div>
        <div class="statScreenNumberContainer">
            <p class="statScreenNumber">12 M</p>
            <p class="statScreenDesc">Pages imprimés</p>
        </div>
        <div class="statScreenNumberContainer">
            <p class="statScreenNumber">4211</p>
            <p class="statScreenDesc">Photos sélectionnées</p>
        </div>
    </div>
</section>
<section class="annonceur">
    <div class="slider">
        <div class="slide_viewer">
            <div class="slide_group">
                <div class="slide">
                </div>
                <div class="slide">
                </div>
                <div class="slide">
                </div>
                <div class="slide">
                </div>
            </div>
        </div>
    </div>

    <div class="slide_buttons">
    </div>

    </div>
    </div>
    <!-- End // .directional_nav -->
</section>
<section class="staffScreen">
    <h1 class="stafftitle">L'équipe</h1>
    <div class="staffScreenContainer">

        <div class="staffPresContainer">
            <img src="http://uneanneedevoyages.com/img/team/team1.jpg" class="staffScreenphoto">
            <p class="staffScreenName">Judith Lossmann</p>
            <p class="staffScreenDesc">Fondatrice</p>
            <p class="staffScreenDesc">Rédactrice en chef</p>
        </div>
        <div class="staffPresContainer">
            <img src="http://uneanneedevoyages.com/img/team/team2.jpg" class="staffScreenphoto">
            <p class="staffScreenName">Caroline M’zali</p>
            <p class="staffScreenDesc">Pigiste</p>
            <p class="staffScreenDesc">Secrétaire de rédaction</p>
        </div>
        <div class="staffPresContainer">
            <img src="http://uneanneedevoyages.com/img/team/team3.jpg" class="staffScreenphoto">
            <p class="staffScreenName">Inma Serrano</p>
            <p class="staffScreenDesc">Illustratrice</p>

        </div>
        <div class="staffPresContainer">
            <img src="http://uneanneedevoyages.com/img/team/team4.jpg" class="staffScreenphoto">
            <p class="staffScreenName">Damien Dégremont</p>
            <p class="staffScreenDesc">Développeur du site</p>

        </div>
    </div>
</section>
<a href="#0" class="cd-top js-cd-top">Top</a>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../../js/index.js"></script>
</body>

</html>