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
        <link rel="stylesheet" href="src/components/style/header.css">
        <link rel="stylesheet" href="src/components/style/footer.css">
        <title></title>
    </head>
    <body>
    <?php include "src/includes/header.php" ?>
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
    <script src="js/index.js"></script>
    </body>

</html>
