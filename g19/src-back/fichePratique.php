<!--
Using my personnal BEM,
<div class="block">
  <p class="block_element">Content
    <span class="block_element-modifier">Modified content</span>
  </p>
</div>
-->
<?php
require_once './connexion.php';
include './header.php';




          $sql = "SELECT
  fp_id,
  fp_src,
  fp_title,
  fp_text,
  fp_subtitle,
  fp_sign
FROM
  fp
  WHERE 
   `fp_id` = :fp_id
;";

          $fps = $conn->prepare($sql);
          $fps->bindValue(':fp_id', $_GET['fp_id']);
          $fps->execute();

?>

      <section class="fichePratique">
        <div class="fichePratique_head">
            <?php while(false !== $row = $fps->fetch(PDO::FETCH_ASSOC)) :?>
            <div class="fichePratique_head_titles">
                <h1><?=$row["fp_title"]?></h1>
                <h2 class="title">
                  <span><?=$row["fp_sign"]?></span>
                <span id="second"><?=$row["fp_subtitle"]?></span>
              </h2>
            </div>

        <div class="fichePratique_container">
          <img src="<?=$row["fp_src"]?>" alt="moki-bar-product">
          <div class="fichePratique_container_txt">
            <p><?=$row["fp_text"]?></p>
          </div>
            <?php endwhile;?>
        </div>
            <div class="fichePratique_head_btn">
                <div class="fiches_linkBox" id="btn_back">
                    <a href="ficheMenu.php" class="fiches_linkBox_link">Retour</a>
                </div>
            </div>
      </section>

    <script src="js/swip.js" type="text/javascript"></script>
    <script src="js/scripts.js"></script>
    <script src="js/flickity.js"></script>
  </body>
</html>
