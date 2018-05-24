<?php
require_once '../connection.php';
require_once '../functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ajouter un article</h1>
<p>Ici vous pouvez créer un article</p>
<a href="index.php">retour aux articles</a>
<form action="doadd.php" method="post">
    <label for="">titre</label><input type="text" name="article[title]">
    <label for="">sous titre</label><input type="text" name="article[subtitle]">
    <label for="">contenu de l'article</label><textarea name="article[content]"></textarea>
    <label for="">link</label><input type="text" name="article[link]">
    <label for="">details</label><input type="text" name="article[details]">
    <label for="">date limite</label><input type="date" name="article[deadline]">
    <label for="">image de couverture</label><input type="text" name="article[cover_img]">
    <button type="submit">Ajouter l'article</button>
</form>
</body>
</html>