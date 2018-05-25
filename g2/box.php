<?php
require_once "includes/init_db.php";
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/box.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="css/footer.css">

  <title>Une Année De Voyages</title>
</head>
<body>

  <?php include 'header.php';?>

  <section class="box">
      <h2 class="box__h2">Boite à image</h2>
      <div class="box__container">

      <?php
      $sql = "SELECT
      `id`,
      `title`,
      `img`,
      `alt`
   FROM
      `imagebox`
   ;";

$stmt = $db->prepare($sql);
$stmt->execute();
$tableData=  $stmt -> fetchAll(PDO::FETCH_ASSOC);
$counter=0;
foreach ($tableData as $img) {
  $counter++;
      ?>
      <div class="box__container_item<?php if($counter%5===0){echo "2";}?>">
          <img class="box__container-img" src="./uploads/imagebox/<?=$img["id"]?>.<?=$img["img"]?>" title="<?=$img["title"]?>" alt="<?=$img["alt"]?>">
      </div>
<?php
}
?>

<!--       
        <div class="box__container-1">
          <img class="box__container-img" src="../image/anete-lusina-609863-unsplash.jpg" alt="">
        </div>

        <div class="box__container-2">
          <img class="box__container-img" src="../image/nina-perminova-414508-unsplash.jpg" alt="">
        </div>

        <div class="box__container-3">
          <img class="box__container-img" src="../image/liam-mckay-674319-unsplash.jpg" alt="">
        </div>

        <div class="box__container-4">
          <img class="box__container-img" src="../image/lily-banse-181917-unsplash.jpg" alt="">
        </div>

        <div class="box__container-5">
          <img class="box__container-img" src="../image/beasty-242624-unsplash.jpg" alt="">
        </div>

        <div class="box__container-6">
          <img class="box__container-img" src="../image/sorasak-253206-unsplash.jpg" alt="">
        </div>

        <div class="box__container-7">
          <img class="box__container-img" src="../image/weronika-marcinczyk-396918-unsplash.jpg" alt="">
        </div> -->

      </div>
  </section>


  <?php include 'footer.php';?>


  <script src="index.js" type="text/javascript">

  </script>

</body>
</html>
