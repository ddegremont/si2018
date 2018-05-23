<?php
include "src/functions/functions.php";
$connection = connect();
$data = getFactsheetData($connection);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        article {
            background: #AAA;
            border: 5px solid bisque;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
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
</body>
</html>