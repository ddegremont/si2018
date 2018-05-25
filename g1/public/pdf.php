<?php
include "includes/header.php";
?>
<body>
<header class="headerL">
    <nav class="header__nav">

        <div class="header__nav__logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="" class="header__nav__logo__img"></a>
        </div>

        <div class="header__nav__list">
            <div><a href="index.php" class="header__nav__list__item">Accueil</a></div>
            <div class="header__nav__list__item">Catégorie</div>
            <div class="header__nav__list__item">Qui sommes-nous ?</div>
            <div ><a href="form.php" class="header__nav__list__item">Contact</a></div>
        </div>

        <div class="header__nav__burger" >
            <div class="header__nav__burger__item"></div>
            <div class="header__nav__burger__item"></div>
            <div class="header__nav__burger__item"></div>
        </div>
    </nav>

    <?php include 'includes/burger.php';?>
</header>
<style>.embed-container { position: relative; padding-bottom:56.25%; height:0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%;}</style>

<div class='embed-container' data-page-width='480' data-page-height='640' id='ypembedcontainer' ><iframe   src="https://www.yumpu.com/fr/embed/view/LNVJGRQZ5tnXv2wy" frameborder="0" allowfullscreen="true"  allowtransparency="true"></iframe></div>

<script src='https://players.yumpu.com/modules/embed/yp_r_iframe.js' ></script>

<?php
include "includes/footer.php";
?>