<?php
include "src/functions/functions.php";
$connection = connect();
$data = getNewsArticleData($connection, $_GET["id"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/newsarticle_style.css">
    <link rel="stylesheet" href="src/components/style/header.css">
    <link rel="stylesheet" href="src/components/style/footer.css">
    <title>Article</title>
</head>
<body>
<?php include "src/includes/header.php" ?>
    <div class="newsarticleDetailsContainer">
        <?php displayNewsArticleDetailContent($data[0]); ?>
    </div>
    <div class="newsarticleUpdateContainer">
        <?php displayNewsArticleUpdateContent($data[0]); ?>
    </div>
    <?php include "src/includes/footer.php"; ?>
    <script type="text/javascript" src="src/js/newsArticle.js"></script>
</body>
</html>
