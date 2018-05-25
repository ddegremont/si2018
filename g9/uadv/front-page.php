<?php
  get_header();
  the_post();
?>

<header>
    <div class="imgContainer">
      <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/3.png" alt="" class="img img3">
      <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/2.png" alt="" class="img img2">
      <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/1.png" alt="" class="img img1">
      <div class="edito">
        <h1 class="edito-title"><?php bloginfo( 'name' ) ?></h1>
        <p class="edito-lead"><?php bloginfo( 'description' ) ?></p>
      </div>
    </div>
  </header>

  <!-- Magazine -->
  <section class="Magazine">
    <div class="container">
      <div class="Magazine-imgContainer">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/uadv-couv.jpg" alt="" class="Magazine-img">
      </div>
      <div class="Magazine-textContainer">
        <h2 class="Magazine-title">Un mook Collector</h2>
        <p class="Magazine-ref">N°1 - 2018</p>
        <p class="Magazine-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima modi aliquam quisquam quasi unde magni corrupti quas
          pariatur omnis neque? Ratione obcaecati ipsam a quo voluptatibus blanditiis, delectus quam eos ! </p>
        <a href="" class="btn btn-blue">En savoir plus</a>
      </div>
    </div>
  </section>

  <!-- Thematiques -->
  <section class="Themes">
    <div class="container">
    
      <div class="Themes-titleContainer">
        <h2 class="Themes-title"><?php the_field('thematique_title') ?></h2>
        <p class="Themes-titleText"><?php the_field('thematique_resume') ?></p>
      </div>

      <div class="Themes-grid">

      <?php

      $args = array(
        'pagename' => 'sport',
        'post_type' => 'page'
      );
      $query = new WP_Query( $args );
      if($query->have_posts()):
        $query->the_post();
      ?>
        <div class="Themes-sports">
          <a href="<?= the_permalink() ?>" class="Themes-gridLink">
            <img src="<?= the_post_thumbnail_url()?>"
              alt="<?= the_title() ?>" class="Themes-img">
            <div class="Themes-overlay">
              <h3 class="Themes-overlayTitle"><?= the_title() ?></h3>
            </div>
          </a>
        </div>
      <?php
        endif;
        wp_reset_postdata();
       ?>
        <?php
        $args = array(
          'pagename' => 'gastronomie',
          'post_type' => 'page'
        );
        $query = new WP_Query( $args );
        if($query->have_posts()):
          $query->the_post();
        ?>
        <div class="Themes-gastronomie">
          <a href="<?= the_permalink()?>" class="Themes-gridLink">
            <img src="<?= the_post_thumbnail_url()?>"
              alt="<?= the_title() ?>" class="Themes-img">
            <div class="Themes-overlay">
              <h3 class="Themes-overlayTitle"><?= the_title() ?></h3>
            </div>
          </a>
        </div>
        <?php
        endif;
        wp_reset_postdata();
       ?>
       <?php
        $args = array(
          'pagename' => 'bien-etre',
          'post_type' => 'page'
        );
        $query = new WP_Query( $args );
        if($query->have_posts()):
          $query->the_post();
        ?>
        <div class="Themes-health">
          <a href="<?= the_permalink() ?>" class="Themes-gridLink">
            <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>" class="Themes-img">
            <div class="Themes-overlay">
              <h3 class="Themes-overlayTitle"><?= the_title()?></h3>
            </div>
          </a>
        </div>
        <?php
        endif;
        wp_reset_postdata();
       ?>
       <?php
        $args = array(
          'pagename' => 'culture',
          'post_type' => 'page'
        );
        $query = new WP_Query( $args );
        if($query->have_posts()):
          $query->the_post();
        ?>
        <div class="Themes-culture">
          <a href="<?= the_permalink()?>" class="Themes-gridLink">
            <img src="<?= the_post_thumbnail_url()?>" alt="<?= the_title()?>" class="Themes-img">
            <div class="Themes-overlay">
              <h3 class="Themes-overlayTitle"><?= the_title()?></h3>
            </div>
          </a>
        </div>
        <?php
        endif;
        wp_reset_postdata();
       ?>
      </div>
    </div>
  </section>

  <!-- Bons plans -->
  <section class="Deals">
    <div class="container">
      <div class="Deals-titleContainer">
        <h2 class="Deals-title"><?php the_field('bons_plans_titre') ?></h2>
        <p class="Deals-titleText"><?php the_field('bons_plans_resume') ?></p>
      </div>

      <div class="Deals-grid">
        <?php
          $args = array(
            'post_type'=>'post',
            'posts_per_page' => 1,
            'category_name' => 'articles',
            'order' => 'DESC'
          );

          $first = new WP_Query( $args );
          if($first->have_posts()):
            $first->the_post();
        ?>
        <div class="Deals-first">
          <a href="<?= the_permalink( ) ?>" class="Deals-gridLink">
            <img src="http://e-zanshin.fr/wp-content/uploads/2017/08/1300x600_fit_Bike-und-Mountainbike-im-Gasteinertal-Egger-Sport-in-Dorfgastein2.jpg"
              alt="<?= the_title( ) ?>" class="Deals-img">
            <div class="Deals-overlay">
              <div class="Deals-overlayContent">
                <h3 class="Deals-overlayTitle"><?= the_title( ) ?></h3>
                <p class="Deals-overlayText">
                  <span class="localisationIcon"></span>
                  <span href="" class="Deals-overlayLink">Colombia</span>
                </p>
              </div>
            </div>
          </a>
        </div>
        <?php
          endif;
          wp_reset_postdata();
        ?>
        <?php
          $args = array(
            'post_type'=>'post',
            'offset' => 1,
            'posts_per_page' => 4,
            'category_name' => 'articles',
            'order' => 'DESC'
          );

          $others = new WP_Query( $args );
          if($others->have_posts()):
            $i = 1;
            while($others->have_posts()):
              $others->the_post();
        ?>

          <div class="Deals-others<?= $i ?>">
          <a href="<?= the_permalink( ) ?>" class="Deals-gridLink">
            <img src="https://www.campusfrance.org/sites/default/files/styles/mobile_visuel_principal_page/public/medias/images/2017-09/ETUD_4_gastronomie.jpg?itok=5G72Z_bm"
              alt="<?= the_title( ) ?>" class="Deals-img">
            <div class="Deals-overlay">
              <div class="Deals-overlayContent">
                <h3 class="Deals-overlayTitle"><?= the_title( ) ?></h3>
                <p class="Deals-overlayText">
                  <img class="localisationIcon" src="<?= get_template_directory_uri() ?>/assets/img/Location.svg"></img>
                  <span href="" class="Deals-overlayLink">Colombia</span>
                </p>
              </div>
            </div>
          </a>
        </div>
        <?php
            $i++;
            endwhile;
          endif;
        ?>

      </div>
      <?php

      $args = array(
            'post_type'=>'page',
            'pagename'=>'bons-plans'
          );

          $others = new WP_Query( $args );
          if($others->have_posts()): $others->the_post();
      ?>
      <a href="<?php the_permalink()?>" class="Deals-link">Voir tous les bons plans</a>
      <?php
        endif;
      ?>
    </div>
  </section>

  <section class="Team">
    <div class="container">
      <h2 class="Team-title">L'Équipe</h2>
      <div class="Team-memberContainer">
        <div class="Team-member">
          <div class="Team-memberImgContainer">
            <img src="http://www.uneanneedevoyages.com/img/team/team1.jpg" alt="" class="Team-memberImg">
          </div>
          <div class="Team-memberInfo">
            <p class="Team-name">Judith Lossmann</p>
            <p class="Team-fonction">Fondatrice Rédactrice en chef</p>
          </div>
        </div>
        <div class="Team-member">
          <div class="Team-memberImgContainer">
            <img src="http://www.uneanneedevoyages.com/img/team/team2.jpg" alt="" class="Team-memberImg">
          </div>
          <div class="Team-memberInfo">
            <p class="Team-name">Caroline M’zali</p>
            <p class="Team-fonction">Pigiste & Secrétaire de rédaction</p>
          </div>
        </div>
        <div class="Team-member">
          <div class="Team-memberImgContainer">
            <img src="http://www.uneanneedevoyages.com/img/team/team3.jpg" alt="" class="Team-memberImg">
          </div>
          <div class="Team-memberInfo">
            <p class="Team-name">Inma Serrano</p>
            <p class="Team-fonction">Illustratrice</p>
          </div>
        </div>
        <div class="Team-member">
          <div class="Team-memberImgContainer">
            <img src="http://www.uneanneedevoyages.com/img/team/team4.jpg" alt="" class="Team-memberImg">
          </div>
          <div class="Team-memberInfo">
            <p class="Team-name">Damien Dégremont</p>
            <p class="Team-fonction">Développeur du site</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fil d'actu -->
  <section class="Twitter">
    <div class="container">
      <h2 class="Twitter-title">Actualité Twitter</h2>
      <div class="Twitter-compagnyContainer">
        <ul class="Twitter-compagnyList">
          <li class="Twitter-compagnyListItem">
            <a href="" class="Twitter-compagnyLink">
              <div class="Twitter-compagnyImgContainer">
                <img src="assets/img/compagnylogo/airfrance.jpg" alt="" class="Twitter-compagnyImg">
              </div>
            </a>
          </li>
          <li class="Twitter-compagnyListItem">
            <a href="" class="Twitter-compagnyLink">
              <div class="Twitter-compagnyImgContainer">
                <img src="assets/img/compagnylogo/transavia.png" alt="" class="Twitter-compagnyImg">
              </div>
            </a>
          </li>
          <li class="Twitter-compagnyListItem">
            <a href="" class="Twitter-compagnyLink">
              <div class="Twitter-compagnyImgContainer">
                <img src="assets/img/compagnylogo/british.png" alt="" class="Twitter-compagnyImg">
              </div>
            </a>
          </li>
        </ul>
        <a href="" class="Twitter-compagnyLink">
          Tout voir
        </a>
      </div>
      <div class="Twitter-tweetContainer">
        <div class="Twitter-tweet">
          <div class="Twitter-tweetContent">
            <div class="Twitter-imgContainer">
              <img src="assets/img/twitterprofilpicture.jpg" alt="" class="Twitter-img">
            </div>
            <div class="Twitter-textContainer">
              <div class="Twitter-top">
                <span class="Twitter-name">Une année de voyages</span>
                <span class="Twitter-pseudo">@UneAnnéeDeVoyages</span>
                <span class="Twitter-date">28 mai</span>

              </div>
              <p class="Twitter-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt illo aperiam harum, accusamus numquam
                tenetur eaque id ut sed consequuntur ipsam, voluptatum iure corporis debitis accusantium tempore quos eius.
                <a href="" class="Twitter-textLink">Un lien</a>
              </p>
            </div>
          </div>
        </div>
        <div class="Twitter-tweet">
          <div class="Twitter-tweetContent">
            <div class="Twitter-imgContainer">
              <img src="assets/img/twitterprofilpicture.jpg" alt="" class="Twitter-img">
            </div>
            <div class="Twitter-textContainer">
              <div class="Twitter-top">
                <span class="Twitter-name">Une année de voyages</span>
                <span class="Twitter-pseudo">@UneAnnéeDeVoyages</span>
                <span class="Twitter-date">28 mai</span>
              </div>
              <p class="Twitter-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt illo aperiam harum, accusamus numquam
                tenetur eaque id ut sed consequuntur ipsam, voluptatum iure corporis debitis accusantium tempore quos eius.
                <a href="" class="Twitter-textLink">Un lien</a>
              </p>
            </div>
          </div>
        </div>
        <div class="Twitter-tweet">
          <div class="Twitter-tweetContent">
            <div class="Twitter-imgContainer">
              <img src="assets/img/twitterprofilpicture.jpg" alt="" class="Twitter-img">
            </div>
            <div class="Twitter-textContainer">
              <div class="Twitter-top">
                <span class="Twitter-name">Une année de voyages</span>
                <span class="Twitter-pseudo">@UneAnnéeDeVoyages</span>
                <span class="Twitter-date">28 mai</span>

              </div>
              <p class="Twitter-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt illo aperiam harum, accusamus numquam
                tenetur eaque id ut sed consequuntur ipsam, voluptatum iure corporis debitis accusantium tempore quos eius.
                <a href="" class="Twitter-textLink">Un lien</a>
              </p>
            </div>
          </div>
        </div>
        <div class="Twitter-tweet">
          <div class="Twitter-tweetContent">
            <div class="Twitter-imgContainer">
              <img src="assets/img/twitterprofilpicture.jpg" alt="" class="Twitter-img">
            </div>
            <div class="Twitter-textContainer">
              <div class="Twitter-top">
                <span class="Twitter-name">Une année de voyages</span>
                <span class="Twitter-pseudo">@UneAnnéeDeVoyages</span>
                <span class="Twitter-date">28 mai</span>

              </div>
              <p class="Twitter-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident incidunt illo aperiam harum, accusamus numquam
                tenetur eaque id ut sed consequuntur ipsam, voluptatum iure corporis debitis accusantium tempore quos eius.
                <a href="" class="Twitter-textLink">Un lien</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  get_footer();
?>