<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/contactstyle.css">
</head>

<body>
<header class="header">
    <div class="headerNavTContainer">
        <div class="headerNavLogoContainer">
            <a href="src/components/index.html"><img class="headerNavLogo" src="src/components/img/home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></a>
        </div>
        <!-- The overlay -->
        <div id="myNav" class="overlay">

            <!-- Button to close the overlay navigation -->
            <a href="src/components/javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <!-- Overlay content -->
            <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="news.php">Actualités</a>
                <a href="factsheets.php">Fiches Pratiques</a>
                <a href="imagebox.php">Boite à image</a>
                <a href="top.php">Top 100</a>
                <a href="contact.php">Contact</a>
            </div>

        </div>

        <!-- Use any element to open/show the overlay navigation menu -->
        <span onclick="openNav()"><div class="headerNavBurger"><img class="headerNavTel" src="src/components/img/home/burger.png" alt="BurgerMenu" class="bugerMenu"></div></span>
    </div>
    <div class="headerNavContainer">
        <a class="headerNav" href="index.php">Home</a>
        <a class="headerNav" href="news.php">Actualités</a>
        <a class="headerNav" href="factsheets.php">Fiches pratiques</a>
        <a class="headerNav" href="imagebox.php">Boite à image</a>
        <a class="headerNav" href="top.php">Top 100</a>
        <a class="headerNav" href="contact.php">Contact</a>
    </div>
    <div class="headerTitleContainer">
        <h1 class="headerTitle">Contact</h1>
        <h1 class="headerSubTitle">Besoin de nous contacter ?</h1>
    </div>
</header>
<div class="contactinfo">
    <div class="info">
        UNE ANNÉE DE VOYAGES<br> 32, rue des Peupliers<br> 92100 Boulogne<br> Phone: <span class="contactblue">+33(0) 413 10 513</span><br> E-mail: <span class="contactblue">rédaction@uneanneedevoyages.com</span> <br> Ouvert du lundi au vendredi de
        10h à 18h<br> Rédactrice en chef : Judith Lossmann<br>
        <span class="contactblue">+ 33 (0)6 88 31 61 37<br> judith.lossmann@uneanneedevoyages.com</span><br> Pigiste et secrétaire de rédaction : Caroline M’zali<br> <span class="contactblue">+33 (0) 7 71 12 87 48<br> caroline.mzali@uneanneedevoyages.com</span>
    <div class="">
        <a href=""><img src="src/components/img/Accueil/facebook.png" alt="" class="imgsocial"></a>
        <a href=""><img src="src/components/img/Accueil/instagram.png" alt="" class="imgsocial"></a>
        <a href=""><img src="src/components/img/Accueil/twitter.png" alt="" class="imgsocial"></a>
        <a href=""><img src="src/components/img/Accueil/youtube.png" alt="" class="imgsocial"></a>
    </div>
    </div>

    <div class="contactmail">
        <form action="src/actions/contact_doSendMail.php" method="post">
            <select style="display:block">
                <option value="0">Vous êtes :</option>
                <option value="1">Un journaliste</option>
                <option value="2">Un annonceur</option>
                <option value="3">Un lecteur</option>
                <option value="4">Un partenaire</option>
                <option value="5">Un office du tourisme</option>
            </select>
            <input type="text" name="name" placeholder="Votre nom" class="contactmailinput"><br>
            <input type="text" name="company" placeholder="Votre société" class="contactmailinput"><br>
            <input type="text" name="mail" placeholder="Votre e-mail" class="contactmailinput"><br>
            <input type="text" name="phone" placeholder="Votre numéro de téléphone" class="contactmailinput"><br>
            <textarea placeholder="Votre message" class="contacttextarea"></textarea><br>
            <input type="submit" value="Valider" class="contactbtn">
        </form>
    </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../../js/index.js"></script>
</script>

</body>


</html>