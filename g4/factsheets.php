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
        <link rel="stylesheet" href="src/components/style/header.css">
        <link rel="stylesheet" href="src/components/style/footer.css">
        <title>Fiches Pratique - Une Année de Voyage</title>
    </head>
    <body>
    <?php include "src/includes/header.php" ?>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    </body>
</html>