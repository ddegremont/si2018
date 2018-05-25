<?php
/*
Template Name: Magazine
*/

get_header();
the_post();
?>
 <div class="magazine2 container2">
    <div class="magazine2-ImgContainer">
      <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/uadv-couv.jpg" alt="magazine">
    </div>
    <div class="magazine2-Modal">
      <h2 class="magazine2-Modal-Title">Une année de voyages</h2>
      <p class="magazine2-Modal-Number">N°1 – 2018</p>
      <p class="magazine2-Modal-Paragraphe">Pellentesque maximus sit amet turpis ac varius. Aenean nibh odio, placerat ac porta non, imperdiet euismod arcu. Proin sapien neque, pellentesque vitae tempor eget, fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non.
        Nullam imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit
        nisi.
      </p>
      <p class="magazine2-Modal-Footer">Vous aimez Une année de Voyages ? <a href="#">Abonnez-vous</a> pour plus de bons plans</p>
    </div>
  </div>

  <div class="presentation container3">
    <p class="presentation-Text">
      Pellentesque maximus sit amet turpis ac varius. Aenean nibh odio, placerat ac porta non, imperdiet euismod arcu. Proin sapien neque, pellentesque vitae tempor eget, fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam
      imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.
    </p>
    <p class="presentation-Text">
      Pellentesque maximus sit amet turpis ac varius. Aenean nibh odio, placerat ac porta non, imperdiet euismod arcu. Proin sapien neque, pellentesque vitae tempor eget, fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam
      imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.
    </p>
  </div>

  <div class="collector">
    <h2 class="collector-Title">Un mook collector.</h2>
    <ul class="collector-List">
      <li class="collector-List-Item">• Un mook annuel à collectionner grâce à sa couverture illustrée, œuvre d'un artiste</li>
      <li class="collector-List-Item">• Des goddies : 5 dessins originaux issus des "illustrateurs voyageurs" de la communauté internationale Urban Sketchers</li>
      <li class="collector-List-Item">• 300 pages de reportages sous forme de "carnets de voyages"</li>
      <li class="collector-List-Item">• Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !)</li>
      <li class="collector-List-Item">• 40.000 exemplaires vendus en kiosques, librairies et sur notre site</li>
      <li class="collector-List-Item">• Des fiches pratiques d'exception et détachables.</li>
      <li class="collector-List-Item">• TV YouTube</li>
    </ul>
  </div>

  <div class="informations">
    <div class="informations-Inner">
      <p class="informations-Inner-Text">
        Pellentesque maximus sit amet turpis ac varius. Aenean nibh odio, placerat ac porta non, imperdiet euismod arcu. Proin sapien neque, pellentesque vitae tempor eget, fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam
        imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.fringilla eu metus. Nulla lobortis quam sapien, et lacinia lacus hendrerit non. Nullam imperdiet mattis nisl, ut ullamcorper erat varius a. Duis porta hendrerit nisi.
      </p>
      <div class="informations-Inner-ImgContainer">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/gallery/10.jpg" alt="">
      </div>
    </div>
  </div>

  <div class="pdf">
    <div class="pdf-Title">Vous en voulez plus ?</div>
    <div class="pdf-Subtitle">Parcourez quelques pages de notre magazine.</div>
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/pdf.jpg" alt="magazine">
  </div>

  <button type="button" class="magazineButton">Je m'abonne à Une année de Voyages</button>
<?php
  get_footer();
?>