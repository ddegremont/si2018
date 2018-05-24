<?php
include "src/functions/functions.php";

$connection = connect();
$data = getNewsData($connection);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/actualitestyle.css">
    <title></title>
</head>
<!--<body>
    <h1>News</h1>
    <section class="news_filter">
        <form>
            <h2 class="news_filter_title">Filtres:</h2>
            <label for="company">Company name</label>
            <select name="company" title="company">
                <?php displayNewsSelectCompany($data) ?>
            </select>
            <input type="submit">
        </form>
    </section>
    <script type="text/javascript" src="src/js/news.js"></script>
</body>-->
<body>
<header class="header">
    <div class="headerNavTContainer">
        <div class="headerNavLogoContainer"><img class="headerNavLogo" src="img/home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></div>
        <div class="headerNavBurger"><img class="headerNavTel" src="img/home/burger.png" alt="BurgerMenu" class="bugerMenu"></div>
    </div>
    <div class="headerNavContainer">
        <a class="headerNav" href="src/components/">Home</a>
        <a class="headerNav" href="src/components/">Actualités</a>
        <a class="headerNav" href="src/components/">Fiches pratiques</a>
        <a class="headerNav" href="src/components/">Boite à image</a>
        <a class="headerNav" href="src/components/">Top 100</a>
        <a class="headerNav" href="src/components/">Contact</a>
    </div>
    <div class="headerTitleContainer">
        <h1 class="headerTitle">Une Année de Voyages</h1>
        <h1 class="headerSubTitle">Soyez un voyageur averti !</h1>
    </div>
</header>
<section class="news_filter">
    <form>
        <h2 class="news_filter_title">Filtres:</h2>
        <label for="company">Company name</label>
        <select name="company" title="company">
             <div class="newsairJobContainer">
                <?php displayNewsSelectCompany($data) ?>
             </div>
        </select>
        <input type="submit">
    </form>
</section>
<div class="newsairButtonContainer">
    <a class="newsairAddArticle" href="newsCreate.php">AJOUTER UN ARTICLE</a>
</div>
<section class="newsairJob">
  <div class="newsairJobContainer">
        <?php displayNewsContent($data) ?>
  </div>
</section>
<section class="bonplan">
    <h2 class="bonplanTitle">Bons plans</h2>
</section>
<!--<div class="newsairButtonContainerSeeMore">
    <button class="newsairAddArticleSeeMore">Voir plus</button>
</div>-->
<?php include "src/includes/footer.php"; ?>
<script type="text/javascript" src="src/js/news.js"></script>
</body>

</html>
