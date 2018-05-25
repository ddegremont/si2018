<?php
require_once "./includes/init_db.php";

$sql = "SELECT
            `id`,
            `title`,
            `category`,
            `text`,
            `img`,
            `alt`
        FROM
            `factsheet`
        WHERE
            `slug` = :slug
        LIMIT
            1
;";
$stmt = $db->prepare($sql);
$stmt->bindParam(":slug",$_GET['slug'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row === false) {
    header("Location: ./?error");
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/article.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title><?=$row["title"]?></title>
</head>
<body>
  <?php include 'header.php';?>
 
 
<section class="factsheet">

<h2 class="factsheet_title">Fiche pratique</h2>

    <button class="factsheet_category" data-category="Hotel"><?=$row["category"]?></button>

    <div class="factsheet_content">
    <h3 class="factsheet_name"><?=$row["title"]?></h3>

    <div class="factsheet_imgContainer">
    <img class="factsheet_img" src="./uploads/factsheet/<?=$row["id"]?>.<?=$row["img"]?>" alt="<?=$row["alt"]?>" title="<?=$row["title"]?>">
    </div>
    <p class="factsheet_text"><?=nl2br($row["text"])?></p>
    </div>
</section>



<?php include 'footer.php';?>
</body>
</html>
