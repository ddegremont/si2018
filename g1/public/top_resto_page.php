<?php
require 'includes/connection.php';
include "includes/header.php";

$sql = "SELECT
`city_name`,
`img_src`,
`img_alt`
FROM
`top_resto`
;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
  <body>
    <header class="header">
      <div class="header__container">
        <div class="header__container__logoContainer">
          <img src="../src/img/logo.png" alt="logo">
        </div>
        <div class="header__container__burgerMenu">
          <div class=""></div>
          <div class=""></div>
          <div class=""></div>
        </div>
      </div>
      <ul class="header__menuList">
        <li class="header__menuList__item"></li>
        <li class="header__menuList__item"></li>
        <li class="header__menuList__item"></li>
        <li class="header__menuList__item"></li>
        <li class="header__menuList__item"></li>
      </ul>
    </header>
    <h2 class="title">Top 100 Restaurants</h2>
    <div class="filtersCtn">
      <div class="filtersCtn__buttonsCtn">
        <div class="filtersCtn__buttonsCtn__button">Trier par : </div>
        <div class="filtersCtn__buttonsCtn__button">Filtrer</div>
      </div>
      <ul class="filtersCtn__sortList">
        <li class="filtersCtn__sortList__item">Classement croissant</li>
        <li class="filtersCtn__sortList__item">Classement décroissant</li>
        <li class="filtersCtn__sortList__item">Prix croissants</li>
        <li class="filtersCtn__sortList__item">Prix décroissants</li>
        <li class="filtersCtn__sortList__item">Pays A-Z</li>
        <li class="filtersCtn__sortList__item">Pays Z-A</li>
      </ul>
      <div class="filtersCtn__filterListCtn">
        <ul class="filtersCtn__filterListCtn__filterList">
          <li>
            Lieu : <input type="text" name="" value="" placeholder="Pays, Ville, Région...">
          </li>
          <li>Prix :</li>
          <li>Type de cuisine</li>
        </ul>
      </div>
    </div>
    <div class="grid">
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
      <div class="grid__imgContainer">
        <a href="#" class="grid__imgContainer__link"><img src="<?=$row['img_src']?>" alt="<?=$row['img_alt']?>"></a>
      </div>
        <?php endwhile;?>
    </div>
  </body>
</html>
