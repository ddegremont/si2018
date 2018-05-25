<?php
require_once "includes/init_db.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top 100</title>
    <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/top100.css">
  <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
<?php include 'header.php';?>

<section class="top100Section">

    <h2 class="top100Section_title">Nos Top 100</h2>

    <div class="top100Section_filters">
        <button class="top100Section_filtersItem --active" data-category="Hotel">Hôtels</button>
        <button class="top100Section_filtersItem" data-category="Bar">Bar</button>
        <button class="top100Section_filtersItem" data-category="Restaurant">Restaurant</button>
    </div>

    <div class="top100Section_ranking --active" data-category="Hotel">

<?php
$sql = "SELECT
       `id`,
       `title`,
       `img`,
       `slug`
    FROM
       `factsheet`
    WHERE
        `category` = 'Hotel'
    ORDER BY
        `mark` DESC
    ;";

$stmt = $db->prepare($sql);
$stmt->execute();
$tableData=  $stmt -> fetchAll(PDO::FETCH_ASSOC);

$counter=0;
foreach($tableData as $factsheet) {
    $counter++;
    ?>
        <div class="top100Section_rankingItem">
            <div class="top100Section_rankingItem_imgContainer">
                <img class="top100Section_rankingItem_img" src="uploads/factsheet/<?=$factsheet["id"]?>.<?=$factsheet["img"]?>
" alt="">
            </div>
                <p class="top100Section_rankingItem_infoName">
<a class="top100Section_rankingItem_link" href="./fiche.php?slug=<?=$factsheet["slug"]?>"><span class="top100Section_rankingItem_rank">#<?=$counter?></span><?=$factsheet["title"]?></a>
                </p>
        </div>
<?php
}
?>

    </div>

        <div class="top100Section_ranking" data-category="Bar">

<?php
$sql = "SELECT
       `id`,
       `title`,
       `img`,
       `slug`
    FROM
       `factsheet`
    WHERE
        `category` = 'Bar'
    ORDER BY
        `mark` DESC
    ;";

$stmt = $db->prepare($sql);
$stmt->execute();
$tableData=  $stmt -> fetchAll(PDO::FETCH_ASSOC);


foreach($tableData as $factsheet) {
    ?>
        <div class="top100Section_rankingItem">
            <div class="top100Section_rankingItem_imgContainer">
                <img class="top100Section_rankingItem_img" src="uploads/factsheet/<?=$factsheet["id"]?>.<?=$factsheet["img"]?>
" alt="">
            </div>
            <p class="top100Section_rankingItem_infoName">
            <a href="./fiche.php?slug=<?=$factsheet["slug"]?>"><?=$factsheet["title"]?></a>
                </p>
        </div>
<?php
}
?>

    </div>

        <div class="top100Section_ranking" data-category="Restaurant">

<?php
$sql = "SELECT
       `id`,
       `title`,
       `img`,
       `slug`
    FROM
       `factsheet`
    WHERE
        `category` = 'Restaurant'
    ORDER BY
        `mark` DESC
    ;";

$stmt = $db->prepare($sql);
$stmt->execute();
$tableData=  $stmt -> fetchAll(PDO::FETCH_ASSOC);


foreach($tableData as $factsheet) {
    ?>
        <div class="top100Section_rankingItem">
            <div class="top100Section_rankingItem_imgContainer">
                <img class="top100Section_rankingItem_img" src="uploads/factsheet/<?=$factsheet["id"]?>.<?=$factsheet["img"]?>" alt="">
            </div>
            <p class="top100Section_rankingItem_infoName">
            <a href="./fiche.php?slug=<?=$factsheet["slug"]?>"><?=$factsheet["title"]?></a>
                </p>
<?php
}
?>

    </div>




</section>

  <?php include 'footer.php';?>


  <script src="index.js"></script>
<script>
var topUi = {
    button : document.querySelectorAll('.top100Section_filtersItem'),
    ranking : document.querySelectorAll('.top100Section_ranking')
}


for (let i = 0; i < topUi.button.length; i++) {
    topUi.button[i].addEventListener('click', function(){
        for (var j = 0; j < topUi.button.length; j++) {
            if (i!==j) {
                topUi.button[j].classList.remove('--active')
            } else {
                topUi.button[j].classList.add('--active')
            }
        }
        for (var j = 0; j < topUi.ranking.length; j++) {
            if (this.dataset.category===topUi.ranking[j].dataset.category) {
                topUi.ranking[j].classList.add('--active')
            } else {
                topUi.ranking[j].classList.remove('--active')
            }
        }
    })
}


</script>
</body>
</html>