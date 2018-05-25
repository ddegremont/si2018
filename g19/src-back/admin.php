<?php

require_once "connexion.php";
$sql = "SELECT
  top_id,
  top_class,
  top_title,
  top_city,
  top_select
FROM
  top
  WHERE 
  top_select = 'Restaurant'
  ORDER BY top_class ASC 
;";
$stmt = $conn->prepare($sql);
$stmt->execute();


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>admin</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <style>
          *{
              box-sizing: border-box;
          }
          .container{
              width: 80vw;
              margin: 0 auto;
          }
          .classement{
              width: 50%;
              border: 1px solid black;
          }
          .classement:not(:last-child){
              margin-bottom: 20px;
          }

          .classement span:last-child{
margin-left: 50px;
          }

          section{
              padding: 50px;
              height: 100vh;
          }
          .btn-group{
              position: fixed;
              right: 20px;
          }
          h2{
              text-align: center;
              margin-bottom: 80px;
          }

          h3{
              margin-bottom: 50px;
          }
      </style>
  </head>
  <body>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">le site</a></li>
          <li class="breadcrumb-item"><a href="./admin.php">admin</a></li>
          <li class="breadcrumb-item"><a href="./crud.php">crud</a></li>
      </ol>
  </nav>
  <div class="btn-group" role="group" aria-label="Basic example">
      <a href="#top" class="btn btn-secondary">top</a>
      <a href="#bat" class="btn btn-secondary">boite a img</a>
      <a href="#fp" class="btn btn-secondary">fiche pratique</a>
  </div>
  <div class="container">
  <section id="top">
      <h2>TOP 100</h2>
      <h3>restaurant</h3>
    <div class="topBox">

        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
<div class="classement">
            <span>
              <?=$row["top_class"]?> </span>
            <span><?=$row["top_title"]?></span>
             <span><?=$row["top_city"]?></span>
              <span><?=$row["top_select"]?></span>
              <span>
           <a href="./top/delete_top.php?top_id=<?=$row["top_id"]?>" class="btn btn-danger">Delete</a>
           <a href="./top/edit_top.php?top_id=<?=$row["top_id"]?>" class="btn btn-warning">Update</a>
       </span>
</div>
        <?php endwhile;?>
    </div>
      <h3>hotel</h3>
    <div>

        <?php


        $sql = "SELECT
  top_id,
  top_class,
  top_title,
  top_city,
  top_select
FROM
  top
  WHERE 
  top_select = 'hotel'
  ORDER BY top_class ASC 
;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();


        ?>

        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    <div class="classement">
                <span><?=$row["top_class"]?>
                </span>
                <span><?=$row["top_title"]?></span>
                <span><?=$row["top_city"]?></span>
                <span><?=$row["top_select"]?></span>
                <span>
                    <a href="./top/delete_top.php?top_id=<?=$row["top_id"]?>" class="btn btn-danger">Delete</a>
                    <a href="./top/edit_top.php?top_id=<?=$row["top_id"]?>" class="btn btn-warning">Update</a>
                </span>
    </div>
        <?php endwhile;?>
    </div>
      <h3>spa</h3>
    <div>
        <?php


        $sql = "SELECT
  top_id,
  top_class,
  top_title,
  top_city,
  top_select
FROM
  top
  WHERE 
  top_select = 'spa'
  ORDER BY top_class ASC 
;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        ?>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <div class="classement">
                <span>
                  <?=$row["top_class"]?></span>
                <span><?=$row["top_title"]?></span>
                <span><?=$row["top_city"]?></span>
                <span><?=$row["top_select"]?></span>
                <span>
                    <a href="./top/delete_top.php?top_id=<?=$row["top_id"]?>" class="btn btn-danger">Delete</a>
                    <a href="./top/edit_top.php?top_id=<?=$row["top_id"]?>" class="btn btn-warning">Update</a>
                </span>
            </div>
        <?php endwhile;?>
    </div>
  </section>
<section id="bat">
    <h2>boite a image</h2>
    <?php


    $sql = "SELECT
  bat_id,
  bat_src,
  bat_title,
  bat_desc
FROM
  bat
;";

    $imgs = $conn->prepare($sql);
    $imgs->execute();

    ?>
<div style="display:flex";>
    <?php while(false !== $row = $imgs->fetch(PDO::FETCH_ASSOC)) :?>

        <div class="card" style="width: 18rem; margin-left: 50px;">
            <img class="card-img-top" src="<?=$row["bat_src"]?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?=$row["bat_title"]?></h5>
                <p class="card-text">
                    <?=$row["bat_desc"]?>
                </p>
            </div>
            <a style="display: block" href="./bat/delete_bat.php?bat_id=<?=$row["bat_id"]?>" class="btn btn-danger">Delete</a>
            <a style="display: block" href="./bat/edit_bat.php?bat_id=<?=$row["bat_id"]?>" class="btn btn-warning">Update</a>
        </div>
    <?php endwhile;?>
</div>

</section>
  <section id="fp">
      <h2>compagnie aérienne/ fiche pratique</h2>
      <?php


      $sql = "SELECT
  fp_id,
  fp_src,
  fp_title,
  fp_text,
  fp_subtitle,
  fp_sign,
  fp_logo,
  fp_select
FROM
  fp
  WHERE fp_select = 'fp'
;";

      $fps = $conn->prepare($sql);
      $fps->execute();
      ?>
      <div>
          <h3>fiche pratique</h3>
          <div style="display: flex";>
          <?php while(false !== $row = $fps->fetch(PDO::FETCH_ASSOC)) :?>
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?=$row["fp_src"]?>" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">titre: <?=$row["fp_title"]?></h5>
              <h6 class="card-title">subtitle: <?=$row["fp_subtitle"]?></h6>
              <p class="card-text">text: <?=$row["fp_text"]?></p>
              <p class="card-text"><small class="text-muted">signature: <?=$row["fp_sign"]?></small></p>
              <img src="<?=$row["fp_logo"]?>" alt="card img logo" class="card-img-top" style="width:2rem;">
          </div>
          <a href="./fp/delete_fp.php?fp_id=<?=$row["fp_id"]?>" class="btn btn-danger">Delete</a>
          <a href="./fp/edit_fp.php?fp_id=<?=$row["fp_id"]?>" class="btn btn-warning">Update</a>
      </div>
          <?php endwhile;?>
          </div>
      </div>
      <?php


      $sql = "SELECT
  fp_id,
  fp_src,
  fp_title,
  fp_text,
  fp_subtitle,
  fp_sign,
  fp_logo,
  fp_select
FROM
  fp
  WHERE fp_select = 'avion'
;";

      $fps = $conn->prepare($sql);
      $fps->execute();
      ?>
      <div>
          <h3>bon plan aérien</h3>
          <div style="display: flex;">
              <?php while(false !== $row = $fps->fetch(PDO::FETCH_ASSOC)) :?>
                  <div class="card" style="width: 18rem; margin-left: 50px;">
                  <img class="card-img-top" src="<?=$row["fp_src"]?>" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">titre: <?=$row["fp_title"]?></h5>
                      <h6 class="card-title">subtitle:  <?=$row["fp_subtitle"]?></h6>
                      <p class="card-text">text: <?=$row["fp_text"]?></p>
                      <p class="card-text"><small class="text-muted">signature: <?=$row["fp_sign"]?></small></p>
                      <img src="<?=$row["fp_logo"]?>" alt="card img logo" class="card-img-top" style="width:2rem;">
                  </div>
                  <a href="./fp/delete_fp.php?fp_id=<?=$row["fp_id"]?>" class="btn btn-danger">Delete</a>
                  <a href="./fp/edit_fp.php?fp_id=<?=$row["fp_id"]?>" class="btn btn-warning">Update</a>
              </div>
          <?php endwhile;?>
          </div>
      </div>
  </section>
  </div>
  </body>
</html>
