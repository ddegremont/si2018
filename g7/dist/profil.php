
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
    <div class="search arrow">
      <div class="mobile"></div><i class="fas fa-search mobile"></i>
      <div class="nav desktopFlex"><a href="articles.php">Articles</a><a href="#">Nos classements</a><a href="#">Nos bons plans</a></div>
      <div class="nav-icons desktopFlex"><i class="fas fa-search"></i><a href="index.php"><i class="fas fa-user"></i></a></div>
    </div>
    <div class="profileHeader">     
      <div class="profileheader-picture"><img src="man-pan-400429-unsplash.463e8c38.jpg"></div>
      <div class="profileHeader-text">
         <?php
          session_start();?>

           <form method="POST">
              <input type="hidden" name="nom" value="<?php echo $_SESSION['username']; ?>" />
          </form>
          <?php

          if (isset($_SESSION['username']))
          {
              echo $_SESSION['username'];
              if ($_SESSION['username'] == 'admin'){
                  echo " <a href='assets/crudArticle/gestion.php'>Gérer les articles</a>    ";
                  echo "<a href='assets/usersManagement/show.php'>Gérer les comptes</a>";
              }

          }
          else
              echo 'Bonjour, vous pouvez vous connecter ci-dessus';
          ?></div>

    </div>
    <div class="profileConnect">
        <?php

        if (isset($_SESSION['username']))
        {
            echo "<a href='assets/authentification/logout.php' ><input type=\"submit\" name=\"connexion\" value=\"Deconnexion\"></a>";
        }
        else
            echo "<a href='assets/authentification/login.php' ><input type=\"submit\" name=\"connexion\" value=\"Connexion\"></a>";
        ?>

    </div>
    <div class="profileContainer">
      <div><a href="#">- A propos</a></div>
      <div><a href="#">- Informations légales</a></div>
      <div><a href="#">- Contact</a></div>
      <div><a href="#">- Services</a></div>
    </div>
    <footer class="footer mobile">
      <div class="footer-home"><a href="#">Accueil</a></div>
      <div class="footer-profile"><a href="#">Profil</a></div>
    </footer>
    <script src="src.be7f595a.js"></script>
  </body>
</html>