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
    <a href="news.php">Revenir en arrière</a>
    <form action="src/actions/newsArticle_doCreate.php" method="post">
        <label for="title">title</label>
        <input type="text" name="title" title="title">
        <label for="subtitle">subtitle</label>
        <input type="text" name="subtitle" title="subtitle">
        <label for="company">company</label>
        <input type="text" name="company" title="company">
        <label for="imgSrc">imgSrc</label>
        <input type="text" name="imgSrc" title="imgSrc">
        <label for="imgAlt">imgAlt</label>
        <input type="text" name="imgAlt" title="imgAlt">
        <label for="paragraph">paragraph</label>
        <input type="text" name="paragraph" title="paragraph">
        <label for="signature">signature</label>
        <input type="text" name="signature" title="signature">
        <label for="logoSrc">logoSrc</label>
        <input type="text" name="logoSrc" title="logoSrc">
        <label for="logoAlt">logoAlt</label>
        <input type="text" name="logoAlt" title="logoAlt">
        <input type="submit" value="Créer">
    </form>
</body>
</html>