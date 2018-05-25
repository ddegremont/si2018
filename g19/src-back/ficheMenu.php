<?php
require_once './connexion.php';

include './header.php';

?>
 <header class="fmHeader">
      <div class="fiches_linkBox" id="btn_back">
          <a href="./index.php" class="fiches_linkBox_link">Accueil</a>
      </div>
    </header>

    <div class="topBar">
      <h2>Les fiches pratiques</h2>
    </div>


      <section class="fiche_articleBox" data-flickity='{ "wrapAround": true }'>
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
          <?php while(false !== $row = $fps->fetch(PDO::FETCH_ASSOC)) :?>
        <article class="fiches_article">
          <img src="<?=$row["fp_src"]?>" alt="img article" class="fiches_article_img">
          <div class="fiches_article_box">
            <h5 class="fiches_article_box_subtitle"><?=$row["fp_title"]?></h5>
            <p class="fiches_article_box_text"><?=$row["fp_text"]?></p>
            <a href="./fichePratique.php?fp_id=<?=$row["fp_id"]?>" class="fiches_article_box_link">lire la suite</a>
          </div>
        </article>
          <?php endwhile; ?>
      </section>
      <script type="text/javascript" src="js/swip.js"></script>
      <script type="text/javascript" src="js/swipswip.js"></script>
      <script type="text/javascript" src="js/flickity.js"></script>
</body>
</html>
