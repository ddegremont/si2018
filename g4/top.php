<?php
include "src/functions/functions.php";
$connection = connect();
$cat1_data = getTopData($connection, "hostels");
$cat2_data = getTopData($connection, "restaurants");
$cat3_data = getTopData($connection, "spas");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/top100.css">
    <link rel="stylesheet" href="src/components/style/header.css">
    <link rel="stylesheet" href="src/components/style/footer.css">
    <title></title>
</head>
<?php include "src/includes/header.php" ?>
<body>

<h1 class="categorieTitle">TOP 100 DES</h1>
<section class="categorieContainer">
    <section class="categorieContain">
        <div class="titleBlock">
            <img class="arrow" src="src/img/arrow.png" alt="go left">
            <h2 class="categorieSubTitle" >Hotels</h2>
            <img class="arrow" src="src/img/arrow.png" alt="go right">
        </div>
        <?php displayTopContent($cat1_data) ?>
    </section>
    <section class="categorieContain">
        <div class="titleBlock">
            <img class="arrow" src="src/img/arrow.png" alt="go left">
            <h2 class="categorieSubTitle">Restaurants</h2>
            <img class="arrow" src="src/img/arrow.png" alt="go right">
        </div>
        <?php displayTopContent($cat2_data) ?>
    </section>
    <section class="categorieContain">
        <div class="titleBlock">
            <img class="arrow" src="src/img/arrow.png" alt="go left">
            <h2 class="categorieSubTitle">Spas</h2>
            <img class="arrow" src="src/img/arrow.png" alt="go right">
        </div>
        <?php displayTopContent($cat3_data) ?>
    </section>
</section>
<?php include "src/includes/footer.php"; ?>
<script src="js/top.js"></script>
</body>
</html>
