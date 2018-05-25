<?php
  get_header();
  the_post();
?>

      <section class="Images_page">

        <div class="Images_page_top">
          <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/surf.jpg" alt="" class="Images_page_top_imgL">

          <div class="Images_page_top_content">
            <h1 class="Images_page_top_content_title1"><?php the_title() ?></h1>
            <h2 class="Images_page_top_content_title2">Miami beach</h2>

            <div class="Images_page_top_content_loc">
              <img src="<?= get_stylesheet_directory_uri() ?>//assets/img/Location.svg" alt="loc picto" title="loc picto" class="Images_page_top_content_loc_img">
              <p class="Images_page_top_content_loc_txt">New Smyrna Beach, Florida, USA</p>
            </div>

            <p class="Images_page_top_content_txt">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur autem vel similique, sapiente distinctio. Necessitatibus
              amet, ducimus fugit rerum. Reiciendis sequi sint, suscipit aperiam tenetur dolorum voluptate odio laudantium
              labore.
            </p>
          </div>

          <div class="Images_page_top_container">
            <img src="<?= get_stylesheet_directory_uri() ?>//assets/img/surf2.jpg" alt="" class="Images_page_top_container_imgR">
          </div>

        </div>

        <div class="Images_page_bot">
          <h2 class="Images_page_bot_title">Avis de nos lecteurs</h2>
          <div class="Images_page_bot_content">
            <div class="Images_page_bot_content_id">
              <img src="<?= get_stylesheet_directory_uri() ?>//assets/img/Location.svg" alt="user photo" title="user photo" class="Images_page_bot_content_id_img">
              <p class="Images_page_bot_content_id_txt">Jacob</p>
            </div>
            <p class="Images_page_bot_content_txt">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur autem vel similique, sapiente distinctio. Necessitatibus
              amet, ducimus fugit rerum. Reiciendis sequi sint, suscipit aperiam tenetur dolorum voluptate odio laudantium
              labore.
            </p>
          </div>
          <div class="Images_page_bot_content">
            <div class="Images_page_bot_content_id">
              <img src="<?= get_stylesheet_directory_uri() ?>//assets/img/Location.svg" alt="user photo" title="user photo" class="Images_page_bot_content_id_img">
              <p class="Images_page_bot_content_id_txt">Jacob</p>
            </div>
            <p class="Images_page_bot_content_txt">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur autem vel similique, sapiente distinctio. Necessitatibus
              amet, ducimus fugit rerum. Reiciendis sequi sint, suscipit aperiam tenetur dolorum voluptate odio laudantium
              labore.
            </p>
          </div>
          <div class="Images_page_bot_content">
            <div class="Images_page_bot_content_id">
              <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Location.svg" alt="user photo" title="user photo" class="Images_page_bot_content_id_img">
              <p class="Images_page_bot_content_id_txt">Jacob</p>
            </div>
            <p class="Images_page_bot_content_txt">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur autem vel similique, sapiente distinctio. Necessitatibus
              amet, ducimus fugit rerum. Reiciendis sequi sint, suscipit aperiam tenetur dolorum voluptate odio laudantium
              labore.
            </p>
          </div>
        </div>
      </section>
<?php
  get_footer();
?>