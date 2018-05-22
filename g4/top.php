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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UADV - Top</title>
    <style>
        .top {
            background: #EEE;
            border: 1px solid red;
            margin-bottom: 200px;
        }
    </style>
</head>
<body>
    top
    <section class="top top_cat1">
        <h2>Category: hostels</h2>
        <?php displayTopContent($cat1_data) ?>
    </section>
    <section class="top top_cat2">
        <h2>Category: restaurants</h2>
        <?php displayTopContent($cat2_data) ?>
    </section>
    <section class="top top_cat3">
        <h2>Category: spas</h2>
        <?php displayTopContent($cat3_data) ?>
    </section>
</body>
</html>
