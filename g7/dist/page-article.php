
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700|Montserrat:400,500,500i,700" rel="stylesheet">
    <title>semaine intensive </title>
  <link rel="stylesheet" href="src.be7f595a.css"></head>
  <body>
    <header class="header desktopFlex">
        <div class="header-logo desktop"><a href="index.php"><img src="logo.fed09b74.png"></a></div>
      <div class="header-text desktop">
        <p>Un mook collector .  Une application  . Un site</p>
      </div>
    </header>
    <div class="search arrow"><i class="fas fa-arrow-left mobile"></i><i class="fas fa-search mobile"></i>
      <div class="nav desktopFlex"><a href="index.php">Home</a><a href="#">About</a><a href="#">lorem</a></div>
      <div class="nav-icons desktopFlex"><i class="fas fa-search"></i><a href="profil.php"><i class="fas fa-user"></i></a></div>
    </div>
    <?php

    require_once "assets/includes/connection.php";

    $reqSql = $reqSql = 'SELECT
    `id`,`category`,`title`,`sub-title`,`img`,`p`,`auteur`,`logo`
    FROM
    `article`
    WHERE
    `id`=:id';
    ;
    $req = $pdo->prepare($reqSql);
    $req->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
    $req->execute();

    $row = $req ->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="article-pageContainer">
      <div class="article-pageContainer-img"><img src="assets/crudArticle/img/<?=$row['img']?>" alt="#">
        <p class="article-pageContainer-img-p"><?=$row['category']?></p>
      </div>
      <div class="article-pageContainer-title">
        <h3 class="article-pageContainer-title-h3"><?=$row['title']?></h3>
        <div class="article-pageContainer-title-author">
          <p><?php setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
              echo strftime("%A %d %B %Y");?></p>
          <p><?=$row['auteur']?></p>
        </div>
      </div>
      <div class="article-pageContainer-text">
        <p class="article-pageContainer-text-p"><?=$row['p']?></p>
      </div>
    </div>
    <footer class="footer mobile">
      <div class="footer-home"><a href="#">Accueil</a></div>
      <div class="footer-profile"><a href="#">Profil</a></div>
    </footer>
    <footer class="footerDesktop desktop">
      <div class="footerDesktop-line"></div>
      <div class="footerDesktop-container">
        <div class="footerDesktop-containterLeft">
          <ul class="footerDesktop-containterLeft-list">
            <li><a href="#">A propos </a></li>
            <li> <a href="#">Legal information </a></li>
            <li> <a href="#">Contact</a></li>
            <li> <a href="#">Services</a></li>
          </ul>
          <div class="footerDesktop-containterLeft-text">
            <p>TripAdvisor LLC n'est pas responsable du contenu</p>
          </div>
        </div>
        <div class="footerDesktop-containerRight">
          <div class="footerDesktop-containerRight-contact"><a class="footerDesktop-containerRight-contact-tel" href="tel:+33643548590">+336 43 54 85 90</a></div>
          <div class="footerDesktop-containerRight-social"><i class="fab fa-facebook-f"></i><i class="fab fa-youtube"></i><i class="fab fa-twitter"></i></div>
        </div>
      </div>
    </footer>
    <script src="src.be7f595a.js"> </script>
  </body>
</html>