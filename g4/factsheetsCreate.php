<?php
include "src/functions/functions.php";
$connection = connect();
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
        input {
            display: block;
        }
    </style>
</head>
<body>
<h1>Créer un article</h1>
<a href="factsheets.php">Revenir en arrière</a>
<form action="src/actions/factsheetArticle_doCreate.php" method="post">
    <label for="title">title</label>
    <input type="text" name="title" title="title">
    <label for="imgSrc">imgSrc</label>
    <input type="text" name="imgSrc" title="imgSrc">
    <label for="imgAlt">imgAlt</label>
    <input type="text" name="imgAlt" title="imgAlt">
    <label for="paragraph">paragraph</label>
    <input type="text" name="paragraph" title="paragraph">
    <label for="category">category</label>
    <input type="text" name="category" title="category">
    <label for="websiteUrl">websiteUrl</label>
    <input type="text" name="websiteUrl" title="websiteUrl">
    <input type="submit" value="Créer">
</form>
</body>
</html>