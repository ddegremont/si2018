<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 24/05/2018
 * Time: 16:43
 */
require_once './connexion.php';
include './header.php';
?>


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

    <section class="fiche_articleBox" data-flickity='{ "wrapAround": true }'>
        <?php while(false !== $row = $fps->fetch(PDO::FETCH_ASSOC)) :?>
        <article class="fiches_article">
            <img src="assets/imgs/box/box1.jpg" alt="" class="fiches_article_img">
            <div class="fiches_article_box">
                <h5 class="fiches_article_box_subtitle"><?=$row["fp_sign"]?></h5>
                <h3 class="fiches_article_box_title"><?=$row["fp_title"]?></h3>
                <p class="fiches_article_box_text"><?=$row["fp_text"]?></p>
                <a href="" class="fiches_article_box_link">+ lire la suite</a>
            </div>
        </article>

        <?php endwhile;?>
    </section>
<section class="imageBox">
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
    <div class="imageBox_visible">
        <?php while(false !== $row = $imgs->fetch(PDO::FETCH_ASSOC)) :?>

        <img class=" imageBox_img is-active-2" src="<?=$row["bat_src"]?>" alt="">
        <?php endwhile;?>
    </div>
    <nav class="buttons">
        <button class="buttons_left">&#60;
        </button>
        <button class="buttons_right">&#62;</button>
    </nav>
</section>
</body>
</html>


