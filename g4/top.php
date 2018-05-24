<?php
include "src/functions/functions.php";

$connection = connect();
$cat1_data = getTopData($connection, "hostels");
$cat2_data = getTopData($connection, "restaurants");
$cat3_data = getTopData($connection, "spas");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/top100.css">
    <title></title>
</head>
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
<!--
<body>
    <h1>Top 100 destinations</h1>
    <section class="top top_cat1">
        <h2>Category: hostels</h2>
        <?php displayTopContent($cat1_data) ?>
    </section>
    <section class="top top_cat2">
        <h2>Category: restaurants</h2>
        <?php displayTopContent($cat2_data) ?>
    </section>
    <section class="top top_cat3">
        <h2>Category: spas</h2>
        <?php displayTopContent($cat3_data) ?>
    </section>
</body>-->
<body>
<section class="topcontainer">
    <h1 class="topTitle">TOP 100 DES</h1>
    <h1>Top 100 destinations</h1>
    <section class="top top_cat1">
        <h2>Category: hostels</h2>
        <?php displayTopContent($cat1_data) ?>
    </section>
    <section class="top top_cat2">
        <h2>Category: restaurants</h2>
        <?php displayTopContent($cat2_data) ?>
    </section>
    <section class="top top_cat3">
        <h2>Category: spas</h2>
        <?php displayTopContent($cat3_data) ?>
    </section>
</section>
<?php include "src/includes/footer.php"; ?>
</body>
</html>
