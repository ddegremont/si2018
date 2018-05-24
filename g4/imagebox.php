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
    <link rel="stylesheet" href="src/components/style/imagebox.css">
    <title>Boite d'îmages</title>
</head>
<body>
  <header class="header">
      <div class="headerNavTContainer">
          <div class="headerNavLogoContainer"><img class="headerNavLogo" src="src/components/img/home/planewhite.png" alt="LogoUneAnneeDeVoyage" class="logo"></div>
          <div class="headerNavBurger"><img class="headerNavTel" src="src/components/img/home/burger.png" alt="BurgerMenu" class="bugerMenu"></div>
      </div>
      <div class="headerNavContainer">
          <a class="headerNav" href="">Home</a>
          <a class="headerNav" href="">Actualités</a>
          <a class="headerNav" href="">Fiches pratiques</a>
          <a class="headerNav" href="">Boite à image</a>
          <a class="headerNav" href="">Top 100</a>
          <a class="headerNav" href="">Contact</a>
      </div>
      <div class="headerTitleContainer">
          <h1 class="headerTitle">Une Année de Voyages</h1>
          <h1 class="headerSubTitle">Soyez un voyageur averti !</h1>
      </div>
  </header>
    <h1 class="imagebox_title">Choissisez une images</h1>
    <div class="imagebox_buttonContainer">
      <button id="imagebox_generator">Click here to get a random image!</button>
    </div>
    <div class="imagebox_container">
      <h2 class="categoryTitle">Category: <span class="category">cat1</span></h2>
      <button class="category_prevbtn">previous category</button>
      <button class="category_nextbtn">next category</button>
    </div>
    <section class="imagebox" style="display: none">
        <h3 class="imagebox_title"></h3>
        <h4 class="imagebox_subtitle"></h4>
        <img class="imagebox_image" src="" alt="">
    </section>
    <?php include "src/includes/footer.php"; ?>
</body>
<script type="text/javascript" src="src/js/ajax/getImage/getImage.js"></script>
</html>
