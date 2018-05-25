<?php
/*
Template Name: Gallery
*/

get_header();
the_post();
?>

<div class="back container3">
    <div class="back-Inner">
      <h1 class="back-Inner-Title">Hotels</h1>
      <div class="back-Inner-Button">
        <img src="assets/img/left-arrow.png" alt="">
        <p>Retour</p>
      </div>
    </div>
  </div>


  <section class="gallery">
    <?php
            $content = array(
            'post_type' => 'post',
            'category_name' => 'hotels',
            'post_per_page' => 12,
            'order' => 'DESC'
            );

            $hotel = new WP_Query( ${content} );
            if($hotel->have_posts()):
            while($hotel->have_posts()):
                $hotel->the_post();
        ?>


    <div class="gallery-Square">
      <img src="<?= the_post_thumbnail();?>" alt="">
    </div>

    <?php
          endwhile;
        endif;
        wp_reset_postdata();
    ?>

  </section>

  <div class="modal">
    <div class="modal-Number">02</div>
    <div class="modal-Back">
      <img src="assets/img/left-arrow.png" alt="">
    </div>
    <div class="modal-ImageContainer">
      <img src="assets/img/2.jpg" alt="">
    </div>
    <div class="modal-Inner-Text">
      <h3 class="modal-Inner-Text-Lieu">Hotel Moroccan Jewel</h3>
      <div class="modal-Inner-Text-Location">
        <div class="modal-Inner-Text-Location-Adress">
          <img src="assets/img/map-placeholder.png" alt=""><span>Ourika, Morocco</span>
        </div>
        <a href="#" class="modal-Inner-Text-Location-Website">Voir le site</a>
      </div>
      <p class="modal-Inner-Text-Description">Quisque semper odio eu nisi aliquam placerat. Sed facilisis hendrerit cursus. Duis efficitur faucibus efficitur. Quisque semper odio eu nisi aliquam placerat. Sed facilisis hendrerit cursus. Duis efficitur faucibus efficitur. </p>
    </div>
  </div>