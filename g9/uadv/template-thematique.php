<?php
/*
Template Name: sport
*/

get_header();
the_post();
?>
    <section class="Images">

      <div class="Images_return">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Location.svg" alt="Back button" title="Back button" class="Images_return_img">
        <p class="Images_return_txt">Retour</p>
      </div>

      <nav class="Images_nav">
        <?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'Images_nav' ) );?>
      </nav>


      <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'bars',
          'post_per_page' => 6,
          'order' => 'DESC'
        );

        $sport = new WP_Query( ${args} );
        if($sport->have_posts()):
          while($sport->have_posts()):
            $sport->the_post();
      ?>
        <div id="sport" class="Images_card">
          <img src="C" alt="Surf" title="Surf" class="Images_card_img">

          <div class="Images_card_content">
            <div class="Images_card_content_loc">
              <img src="<?= get_template_directory_uri() ?>/assets/img/Location.svg" alt="loc picto" title="loc picto" class="Images_card_content_loc_img">
              <p class="Images_card_content_loc_txt">New Smyrna Beach, Florida, USA</p>
            </div>
            <p class="Images_card_content_sport"><?php the_title() ?></p>
            <div class="Images_card_content_id">
              <img src="<?= get_template_directory_uri() ?>/assets/img/twitterprofilpicture.jpg" alt="user photo" title="user photo" class="Images_card_content_id_img">
              <p class="Images_card_content_id_txt">Jacob</p>
            </div>
            <p class="Images_card_content_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
        </div>
      <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
      
</section>
<?php
get_footer();
?>