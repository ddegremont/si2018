<?php
require_once "includes/connexion.php";

include "includes/header.php";
?>

<img class="topRate-Bg" src="img/bg_rate.jpg" alt="background">

<section class="topRate-MenuContent">
  <h3 class="topRate-Title">Top 100 :</h3>
  <ul class="topRate-Menu">
    <li data-category="Restaurant" class="btn-filter topRate Restaurant">Restaurants</li>
    <li data-category="Hotel" class="btn-filter topRate Hotel">Hôtels</li>
    <li data-category="Spa" class="btn-filter topRate Spa">SPAs</li>
  </ul>

  <div class="cards">

    <div data-category="Restaurant" class="card Restaurant">
      <div class="rank-Content">
        <p class="rank">1</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Restaurant">
        <h2 class="info-Titre">Jardin Impérial</h2>
        <p class="info-Desc"><a class="info-Link" href="ficheRestaurant.php">voir la fiche</a></p>
      </div>
    </div>

    <div data-category="Restaurant" class="card Restaurant">
      <div class="rank-Content">
        <p class="rank">2</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Restaurant">
        <h2 class="info-Titre">Le Tourbillon</h2>
        <p class="info-Desc">voir la fiche</p>
      </div>
    </div>

    <div data-category="Restaurant" class="card Restaurant">
      <div class="rank-Content">
        <p class="rank">3</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Restaurant">
        <h2 class="info-Titre">Le Victor Hugo</h2>
        <p class="info-Desc">voir la fiche</p>
      </div>
    </div>

    <div data-category="Hotel" class="card Hotel">
      <div class="rank-Content">
        <p class="rank">1</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Hotel">
        <h2 class="info-Titre">Georges V</h2>
        <p class="info-Desc"><a class="info-Link" href="ficheHotel.php">voir la fiche</a></p>
      </div>
    </div>

    <div data-category="Hotel" class="card Hotel">
      <div class="rank-Content">
        <p class="rank">2</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Hotel">
        <h2 class="info-Titre">Ceasar Palace</h2>
        <p class="info-Desc">voir la fiche</p>
      </div>
    </div>

    <div data-category="Spa" class="card Spa">
      <div class="rank-Content">
        <p class="rank">1</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Spa">
        <h2 class="info-Titre">Chez Chloé</h2>
        <p class="info-Desc"><a class="info-Link" href="ficheSpa.php">voir la fiche</a></p>
      </div>
    </div>

    <div data-category="Spa" class="card Spa">
      <div class="rank-Content">
        <p class="rank">2</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Spa">
        <h2 class="info-Titre">Ban Sin Thai</h2>
        <p class="info-Desc">voir la fiche</p>
      </div>
    </div>

    <div data-category="Spa" class="card Spa">
      <div class="rank-Content">
        <p class="rank">3</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Spa">
        <h2 class="info-Titre">Nuxe Spa</h2>
        <p class="info-Desc">voir la fiche</p>
      </div>
    </div>

    <div data-category="Spa" class="card Spa">
      <div class="rank-Content">
        <p class="rank">4</p>
        <p class="note">note : <span class="rate">5 / 5</span></p>
      </div>
      <div class="info-Spa">
        <h2 class="info-Titre">Spa des 5 mondes</h2>
        <p class="info-Desc">voir la fiche</p>
      </div>
    </div>

  </div>
</section>

<?php
include "includes/footer.php";
?>
