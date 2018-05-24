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
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/newsCreate.css">
    <link rel="stylesheet" href="src/components/style/header.css">
    <link rel="stylesheet" href="src/components/style/footer.css">
    <title>Document</title>
    <style>
        input {
            display: block;
        }
    </style>
</head>
<body>
<?php include "src/includes/header.php" ?>
    <div class="create_article_container">
        <h1 class="create_article" >Créer un article</h1>
    </div>
    <div class="backContainer"><a class="back" href="news.php">Revenir en arrière</a></div>
    <form class="create_partner" action="src/actions/newsArticle_doCreate.php" method="post">
        <label class="update" for="title">title</label>
        <input class="" type="text" name="title" title="title">
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
        <input class="submitbtn" type="submit" value="Créer">
    </form>

    <?php include "src/includes/footer.php"; ?>
</body>
</html>