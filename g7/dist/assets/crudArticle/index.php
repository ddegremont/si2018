<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
<a href="../authentification/register.php">
    <?php
    session_start();
    if (isset($_SESSION['username']))
    {
        echo "<a href='../authentification/logout.php' >Se déconnecter</a>";
    }
    else
        echo 'S\'inscrire';
    ?>
</a>
<a href="../authentification/login.php">
    <?php



    if (isset($_SESSION['username']))
    {
        echo $_SESSION['username'];
    }
    else
        echo 'SE CONNECTER';
    ?>
</a>
<?php


require_once "../includes/connection.php";

$reqSql = 'SELECT
  `category`, `title`,`sub-title`,`img`,`p`,`auteur`,`logo`
FROM 
  `article`';
$req = $pdo->prepare($reqSql);
$req->execute();

$article=$req->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="container">
        <?php foreach ($article as $thearticle): ?>
        <article class="article">
            <h1><?=$thearticle['category']?></h1>
            <h2><?=$thearticle['title']?></h2>
            <h3><?=$thearticle['sub-title']?></h3>
            <img src="img/<?=$thearticle['img']?>" alt="">
            <p><?=$thearticle['p']?></p>
            <h4><?= $thearticle['auteur']?></h4>
            <img src="img/<?=$thearticle['logo']?>" alt="">
            <h5><?php setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
                echo strftime("%A %d %B %Y");?></h5>
        </article>
        <?php endforeach;?>
    </div>


</body>
</html>

