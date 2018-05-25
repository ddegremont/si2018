<!--
Using my personnal BEM,
<div class="block">
  <p class="block_element">Content
    <span class="block_element-modifier">Modified content</span>
  </p>
</div>
-->
<?php

require_once "./connexion.php";

include './header.php';
?>


    <header class="header">
      <div class="header_burger">
        <div class="header_burger_line hbl-nm"></div>
        <div class="header_burger_line hbl-1"></div>
        <div class="header_burger_line hbl-2"></div>
        <div class="header_burger_line hbl-nm"></div>
      </div>
      <ul class="header_deskMenu">
        <li class="header_deskMenu_item gotoHome">Accueil</li>
        <li class="header_deskMenu_item gotoMook">Le mook</li>
        <li class="header_deskMenu_item gotoFiches">Fiches pratiques</li>
        <li class="header_deskMenu_item gotoBonPlans">Bons plans</li>
        <li class="header_deskMenu_item gotoTop">Top 100</li>
        <li class="header_deskMenu_item gotoTeam">L'équipe</li>
        <li class="header_deskMenu_item gotoContact">Contact</li>
      </ul>
      <div class="header_titleBox">
        <h1 class="header_titleBox_title">Une année de voyages<span class="header_titleBox_title_span">.</span></h1>
      <h2 class="header_titleBox_subtitle">DES VOYAGES TESTÉS…<br>DES IDÉES POUR PARTIR TOUTES L’ANNÉES !</h2>
      </div>
      <ul class="header_menu">
        <li class="header_menu_item gotoHome">Accueil</li>
        <li class="header_menu_item gotoMook">Le mook</li>
        <li class="header_menu_item gotoFiches">Fiches pratiques</li>
        <li class="header_menu_item gotoBonPlans">Bons plans</li>
        <li class="header_menu_item gotoTop">Top 100</li>
        <li class="header_menu_item gotoTeam">L'équipe</li>
        <li class="header_menu_item gotoContact">Contact</li>
        <div class="header_menu_bg hmb-1"></div>
        <div class="header_menu_bg hmb-2"></div>
      </ul>

      <div class="header_videoBox">
          <video autoplay muted loop src="assets/clips/bg.mp4" class="header_videoBox_video"></video>
      </div>
    </header>
    <section class="mook">
      <h3 class="mook_box_title">Le Mook <span class="mook_box_title_span">.</span></h3>
      <img src="./assets/imgs/mook.jpg" alt="aperçu mook #0001-2018" class="mook_img">
      <div class="mook_box">
        <h3 class="mook_box_deskTitle">Le Mook <span class="mook_box_deskTitle_span">.</span></h3>
        <div class="mook_box_textBox">
          <p class="mook_box_textBox_text">Un mook annuel à collectionner grâce à sa couverture illustrée, œuvre d'un artiste.
            </p>
          <p class="mook_box_textBox_text">Des goddies : 5 dessins originaux issus des "illustrateurs voyageurs" de la communauté internationale Urban Sketchers.
            </p>
          <p class="mook_box_textBox_text">300 pages de reportages sous forme de "carnets de voyages"
            </p>
          <p class="mook_box_textBox_text">Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !)
            </p>
          <p class="mook_box_textBox_text">40.000 exemplaires vendus en kiosques, librairies et sur notre site.
            </p>
            <p class="mook_box_textBox_text">Des fiches pratiques d'exception et détachables.
              </p>
            <p class="mook_box_textBox_text">TV YouTube</p>
        </div>
        <nav class="mook_box_nav">
          <a href="https://fr.calameo.com/read/005588247325549c8dd75" target="blank_" class="mook_box_nav_button">Lire un extrait</a>
          <a href="#" class="mook_box_nav_button">Acheter</a>
        </nav>
      </div>
    </section>
    <section class="fiches">
      <h3 class="fiches_title">Les fiches pratiques<span class="fiches_title_span">.</span></h3>
      <div class="fiches_textBox">
        <p class="fiches_textBox_text">Minutieusement détaillées, elles vous disent tout du voyage décrit nos articles : Hôtels, restaurants, boutiques, musée, shopping, The Place to be et aussi quelle est la meilleure compagnie aérienne pour rejoindre par exemple San Francisco, quelles sont les meilleures dates, comment aller à pied de Nob Hill au Golden Gate en passant par des ruelles remplies de street art méconnus du grand public, arriver pile à l'heure pour être dans l'axe du soleil sur le 3ème pilier et réussir à coup sûr la photo du siècle tout en s'émerveillant de la beauté de la Bay... ça, c'est Une Année de Voyages !</p>
        <p class="fiches_textBox_text">Des QR Codes intégrés aux fiches pratiques pour offrir une vitrine extra-large à nos partenaires.</p>
      </div>
      <h4 class="fiches_subtitle">Découvrir :</h4>
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
          <img src="<?=$row["fp_src"]?>" alt="" class="fiches_article_img">
          <div class="fiches_article_box">
            <h5 class="fiches_article_box_subtitle"><?=$row["fp_sign"]?></h5>
            <h3 class="fiches_article_box_title"><?=$row["fp_title"]?></h3>
            <p class="fiches_article_box_text"><?=$row["fp_text"]?></p>
            <a href="./fichePratique.php?fp_id=<?=$row["fp_id"]?>" class="fiches_article_box_link">+ lire la suite</a>
          </div>
        </article>
          <?php endwhile;?>
      </section>
      <div class="fiches_linkBox">
          <a href="ficheMenu.php" class="fiches_linkBox_link">Voir plus</a>
      </div>
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
            <div class="imageBox_imgBox">
            <h4 class="imageBox_imgBox_title"><?=$row["bat_title"]?></h4>
            <h5 class="imageBox_imgBox_subtitle"><?=$row["bat_desc"]?></h5>
            <img class=" imageBox_img is-active-2" src="<?=$row["bat_src"]?>" alt="">
          </div>
            <?php endwhile;?>
        </div>
        <nav class="buttons">
          <button class="buttons_left">&#60;
          </button>
          <button class="buttons_right">&#62;</button>
        </nav>
    </section>
<section class="bonPlans">
    <h3 class="bonPlans_title">Les bons plans aériens <span class="bonPlans_offers_title_span">.</span></h3>
    <div class="bonPlans_box">
        <div class="bonPlans_offers">
            <div class="bonPlans_offers_container">
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
                <?php while(false !== $row = $fps->fetch(PDO::FETCH_ASSOC)) :?>
                <article class="bonPlans_offers_container_article">
                    <div class="bonPlans_offers_container_article_headBox">
                        <div class="bonPlans_offers_container_article_headBox_titleBox">
                            <h4 class="bonPlans_offesr_container_article_headBox_titleBox_title"><?=$row["fp_title"]?></h4>
                            <h4 class="bonPlans_offesr_container_article_headBox_titleBox_title"><?=$row["fp_subtitle"]?></h4>
                        </div>
                        <img src="<?=$row["fp_logo"]?>" alt="logo" class="bonPlans_offers_container_article_headBox_img">
                    </div>
                    <p class="bonPlans_offers_container_article_text"><?=$row["fp_text"]?></p>
                </article>
                <?php endwhile;?>
            </div>
        </div>
        <div class="bonPlans_tweetBox">
            <h2>Fil d'actualité Twitter</h2>
            <div class="bonPlans_tweetBox_container">
                <div class="bonPlans_tweetBox_flow">

                    <a class="twitter-timeline" href="https://twitter.com/skyteam?ref_src=twsrc%5Etfw">Tweets by our partners</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    <a class="twitter-timeline" href="https://twitter.com/staralliance?ref_src=twsrc%5Etfw"></a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    <a class="twitter-timeline" href="https://twitter.com/traveloneworld?ref_src=twsrc%5Etfw"></a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                </div>
            </div>
        </div>
    </div>
    <div class="fiches_linkBox">
        <a href="ficheMenu.html" class="fiches_linkBox_link">Voir plus</a>
    </div>
</section>

    <section class="top aled">
        <nav class="top_nav">
            <h3 class="top_nav_title">Top 100<span class="top_nav_title_span">.</span></h3>
            <nav class="top_nav_menu">
                <p class="top_nav_menu_main">Thalasso / SPA</p>
                <ul class="top_nav_menu_list">
                    <li class="top_nav_menu_list_item topSpa">Thalasso / SPA</li>
                    <li class="top_nav_menu_list_item topHot">Hôtels</li>
                    <li class="top_nav_menu_list_item topRes">Restaurants</li>
                </ul>

            </nav>
            <ul class="top_nav_deskMenu_list">
                <li class="top_nav_menu_list_item topSpa">Thalasso / SPA</li>
                <li class="top_nav_menu_list_item topHot">Hôtels</li>
                <li class="top_nav_menu_list_item topRes">Restaurants</li>
            </ul>
        </nav>
        <ul class="top_list topSpaList">
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
                <li class="top_list_item">
                    <p class="top_list_item_nb"><?=$row["top_class"]?>.</p>
                    <div class="top_list_item_titleBox">
                        <h4 class="top_list_item_titleBox_title"><?=$row["top_title"]?></h4>
                        <h5 class="top_list_item_titleBox_subtitle"><?=$row["top_city"]?></h5>
                    </div>
                </li>
            <?php endwhile;?>
        </ul>
        <ul class="top_list topHotList">
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
                <li class="top_list_item">
                    <p class="top_list_item_nb"><?=$row["top_class"]?>.</p>
                    <div class="top_list_item_titleBox">
                        <h4 class="top_list_item_titleBox_title"><?=$row["top_title"]?></h4>
                        <h5 class="top_list_item_titleBox_subtitle"><?=$row["top_city"]?></h5>
                    </div>
                </li>
            <?php endwhile;?>
        </ul>
        <ul class="top_list topResList">
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
  top_select = 'restaurant'
  ORDER BY top_class ASC 
;";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            ?>
            <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                <li class="top_list_item">
                    <p class="top_list_item_nb"><?=$row["top_class"]?>.</p>
                    <div class="top_list_item_titleBox">
                        <h4 class="top_list_item_titleBox_title"><?=$row["top_title"]?></h4>
                        <h5 class="top_list_item_titleBox_subtitle"><?=$row["top_city"]?></h5>
                    </div>
                </li>
            <?php endwhile;?>
        </ul>
      <div class="fiches_linkBox">
          <a href="./top100.php" class="fiches_linkBox_link">Voir tout</a>
      </div>
    </section>
    <section class="team">
      <h3 class="team_title">Notre équipe<span class="team_title_span">.</span></h3>
      <div class="team_articleBox">
        <article class="team_article">
          <img src="assets/imgs/team/team1.jpg" alt="" class="team_article_img">
          <div class="team_article_titleBox">
            <h4 class="team_article_titleBox_title">Judith LOSSMANN</h4>
            <h5 class="team_article_titleBox_subtitle">Fondatrice</h5>
            <h5 class="team_article_titleBox_subtitle">Rédactrice en chef</h5>
          </div>
        </article>
        <article class="team_article">
          <img src="assets/imgs/team/team2.jpg" alt="" class="team_article_img">
          <div class="team_article_titleBox">
            <h4 class="team_article_titleBox_title">Caroline M'ZALI</h4>
            <h5 class="team_article_titleBox_subtitle">Pigiste</h5>
            <h5 class="team_article_titleBox_subtitle">Secrétaire de rédaction</h5>
          </div>
        </article>
        <article class="team_article">
          <img src="assets/imgs/team/team3.jpg" alt="" class="team_article_img">
          <div class="team_article_titleBox">
            <h4 class="team_article_titleBox_title">Inma SERRANO</h4>
            <h5 class="team_article_titleBox_subtitle">Illustratrice</h5>
          </div>
        </article>
        <article class="team_article">
          <img src="assets/imgs/team/team4.jpg" alt="" class="team_article_img">
          <div class="team_article_titleBox">
            <h4 class="team_article_titleBox_title">Damien DÉGREMONT</h4>
            <h5 class="team_article_titleBox_subtitle">Développeur du site</h5>
          </div>
        </article>
      </div>
    </section>
    <section class="contact">
      <h3 class="contact_title">Nous contacter<span class="contact_title_span">.</span></h3>
      <form action="" class="contact_form">
        <input type="text" placeholder="Vous êtes" class="contact_form_input">
        <input type="text" placeholder="Société" class="contact_form_input">
        <input type="text" placeholder="Votre nom" class="contact_form_input">
        <input type="text" placeholder="e-mail" class="contact_form_input">
        <input type="text" placeholder="Téléphone" class="contact_form_input">
        <textarea placeholder="Votre message" id="" cols="30" rows="10" class="contact_form_textarea"></textarea>
      </form>
        <button class="contact_link">Envoyer</button>
    </section>
    <footer class="footer">
      <h3 class="footer_title">Nos partenaires</h3>
      <section class="part">
        <img src="./assets/imgs/adp.png" alt="" class="part_img">
        <img src="./assets/imgs/fuji.png" alt="" class="part_img">
        <img src="./assets/imgs/nikon.png" alt="" class="part_img">
      </section>
      <section class="footer_box">
          <p class="footer_text">Copyright 2018 - Une année de voyages</p>
          <nav class="footer_nav">
            <img src="./assets/imgs/icons/facebook.svg" class="footer_nav_imgBox">
            <img src="./assets/imgs/icons/instagram.svg" class="footer_nav_imgBox">
            <img src="./assets/imgs/icons/twitter.svg" class="footer_nav_imgBox">
          </nav>
      </section>
    </footer>
    
    <script src="js/swip.js" type="text/javascript"></script>
    <script src="js/scripts.js"></script>
    <script src="js/flickity.js"></script>
  </body>
</html>
