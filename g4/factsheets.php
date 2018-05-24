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
    <a class="catAddArticle" href="factsheetsCreate.php">AJOUTER UN ARTICLE</a>
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
<?php include "src/includes/footer.php"; ?>
<script type="text/javascript" src="src/js/factsheets.js"></script>
</body>
</html>