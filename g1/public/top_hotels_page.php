<?php
require 'includes/connection.php';
include "includes/header.php";

$sql = "SELECT
`city_name`,
`img_src`,
`img_alt`
FROM
`top_hotels`
;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
  <body>
    <header class="headerTops">
      <nav class="header__nav">

          <div class="header__nav__logo">
              <img src="assets/img/logo.png" alt="" class="header__nav__logo__img">
          </div>

          <div class="header__nav__list">
              <div class="header__nav__list__item">Accueil </div>
              <div class="header__nav__list__item">Catégorie</div>
              <div class="header__nav__list__item">Qui sommes-nous ?</div>
              <div class="header__nav__list__item">Contact</div>
          </div>

          <div class="header__nav__burger">
              <div class="header__nav__burger__item"></div>
              <div class="header__nav__burger__item"></div>
              <div class="header__nav__burger__item"></div>
          </div>
      </nav>
      <div class="burger"></div>
    </header>
    <h2 class="title">Top 100 Hôtels</h2>
    <div class="filtersCtn">
      <div class="filtersCtn__buttonsCtn">
        <div class="filtersCtn__buttonsCtn__button --sortBtn">Trier par : </div>
        <div class="filtersCtn__buttonsCtn__button --filterBtn">Filtrer</div>
      </div>
      <div class="filtersCtn__ctn --sortList">
        <div class="filtersCtn__ctn__closeBtn --sortClose">
          <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve">
          <polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 "/>
        </div>
        <ul class="filtersCtn__ctn__list">
          <li>Classement croissant</li>
          <li>Classement décroissant</li>
          <li>Prix croissants</li>
          <li>Prix décroissants</li>
          <li>Pays A-Z</li>
          <li>Pays Z-A</li>
          <button class="filtersCtn__ctn__btn">trier</button>
        </ul>
      </div>
      <div class="filtersCtn__ctn --filterList">
        <div class="filtersCtn__ctn__closeBtn --filterClose">
          <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve">
          <polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 "/>
        </div>
        <ul class="filtersCtn__ctn__list">
          <li>
            Lieu : <input type="text" name="" value="" placeholder="Pays, Ville, Région...">
          </li>
          <li>Prix :
            <input type="range" min="1" max="300" value="50" class="slider">
            <p><span class="demo"></span>€</p>
          </li>
          <li>Type d'hégergement :</li>
          <button class="filtersCtn__ctn__btn">Appliquer les filtres</button>
        </ul>
      </div>
    </div>
    <div class="grid">
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
      <div class="grid__imgContainer">
          <a href="#"><img class="grid__imgContainer__img" src="<?=$row['img_src']?>" alt="<?=$row['img_alt']?>"></a>
      </div>
        <?php endwhile;?>
    </div>
    <div class="overlay"></div>
    <script type="text/javascript" src="app.generated.js"></script>
<?php require 'includes/footer.php' ?>
