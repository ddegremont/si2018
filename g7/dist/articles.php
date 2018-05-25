
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700|Montserrat:400,500,500i,700" rel="stylesheet">
    <title>semaine intensive</title>
  <link rel="stylesheet" href="src.be7f595a.css"></head>
  <body>
    <header class="header desktopFlex">
      <div class="header-logo desktop"><a href="index.php"><img src="logo.fed09b74.png"></a></div>
      <div class="header-text desktop">
        <p>Un mook collector .  Une application  . Un site </p>
      </div>
    </header>
    <div class="search arrow">
      <div class="mobile"></div><i class="fas fa-search mobile"></i>
      <div class="nav desktopFlex"><a href="#">Articles</a><a href="#">Nos classements</a><a href="#">Nos bons plans</a></div>
      <div class="nav-icons desktopFlex"><i class="fas fa-search"></i><a href="profil.php"><i class="fas fa-user"></i></a></div>
    </div>
    <?php


    require_once "assets/includes/connection.php";

    $reqSql = 'SELECT
  `id`,`category`, `title`,`sub-title`,`img`,`p`,`auteur`,`logo`
FROM 
  `article`';
    $req = $pdo->prepare($reqSql);
    $req->execute();

    $article=$req->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="articlesContainer">
        <div class="articles-title">
            <h2 class="articles-title-h2">Découvrir nos articles</h2>

        </div>
        <?php foreach ($article as $thearticle): ?>
            <div class="articleContainer">
                <div class="articleContainer-article"><a href="page-article.php?id=<?= $thearticle['id']?>"><img class="articleContainer-article-img" src="assets/crudArticle/img/<?=$thearticle['img']?>">
                    <div class="articleContainer-article-titleContainer">
                        <h3 class="articleContainer-article-titleContainer-title"><?=$thearticle['title']?></h3>
                        <div class="articleContainer-article-details">
                            <p class="articleContainer-article-details-date"><?php setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
                                echo strftime("%A %d %B %Y");?></p>
                            <p class="articleContainer-article-details-cat"> -<?=$thearticle['category']?></p>
                           </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

    </div>
    <footer class="footer mobile">
      <div class="footer-home"><a href="#">Accueil</a></div>
      <div class="footer-profile"><a href="#">Profil</a></div>
    </footer>
    <footer class="footerDesktop desktop">
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
            <p>d'autres sites internet. Les taxes et frais ne sont pas inclus dans les offres.</p>
          </div>
        </div>
        <div class="footerDesktop-containerRight">
          <div class="footerDesktop-containerRight-contact"><a class="footerDesktop-containerRight-contact-tel" href="tel:+33643548590">+336 43 54 85 90</a></div>
          <div class="footerDesktop-containerRight-social"><i class="fab fa-facebook-f"></i><i class="fab fa-youtube"></i><i class="fab fa-twitter"></i></div>
        </div>
      </div>
    </footer>
  </body>
  <script src="src.be7f595a.js"> </script>
</html>