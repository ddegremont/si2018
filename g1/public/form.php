<?php
include "includes/header.php";
?>
<body>
<header class="headerTops">
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

        <div class="header__nav__burger">
            <div class="header__nav__burger__item"></div>
            <div class="header__nav__burger__item"></div>
            <div class="header__nav__burger__item"></div>
        </div>
    </nav>
    <?php include 'includes/burger.php';?>
</header>

    <section class="content">
        <section class="informations">
        <h1 class="informations__title">Nous contacter :</h1>
        <div class="informations__blueline"></div>
        <h2 class="informations__subtitle">Une année de voyages</h2>
        <div class="informations__paragraph">
            <p>32, rue des Peupliers</p>
            <p>92100 Boulogne</p>
        </div>
        <div class="informations__paragraph">
            Phone: <span class="informations__paragraph__blue">+33(0) 413 10 513</span>
        </div>
        <div class="informations__paragraph">
            E-mail: <span class="informations__paragraph__blue">rédaction@uneanneedevoyages.com</span>
        </div>
        <div class="informations__paragraph">
            Ouvert du lundi au vendredi de 10h à 18h
        </div>
        <div class="informations__paragraph">
            Rédactrice en chef: Judith Lossmann
            <p><span class="informations__paragraph__blue">+33 (0)6 88 31 61 37</span></p>
            <p><span class="informations__paragraph__blue">judith.lossmann@uneanneedevoyages.com</span></p>
        </div>
        <div class="informations__paragraph">
            Pigiste et secrétaire de rédaction: Caroline M'zali
            <p><span class="informations__paragraph__blue">+33 (0)7 71 12 87 48</span></p>
            <p><span class="informations__paragraph__blue">caroline.mzali@uneanneedevoyages.com</span></p>
        </div>
        <div class="informations__circles">
            <div class="informations__circles__circle"></div>
            <div class="informations__circles__circle"></div>
            <div class="informations__circles__circle"></div>
            <div class="informations__circles__circle"></div>
        </div>
    </section>

    <section class="form">
        <form class="form__theForm">
            <select name="" id="" class="form__theForm__input">
                <option value="">Vous êtes:</option>
                <option value="">Un journaliste</option>
                <option value="">Un annonceur</option>
                <option value="">Un lecteur</option>
                <option value="">Un Partenaire</option>
                <option value="">Un office du tourisme</option>
            </select>
            <input type="text" name="société" value="Votre société" class="form__theForm__input">
            <input type="text" name="nom" value="Votre nom" class="form__theForm__input">
            <input type="email" name="email" value="Votre email" class="form__theForm__input">
            <input type="text" name="téléphone" value="Votre téléphone" class="form__theForm__input">
            <textarea value="Votre message" class="form__theForm__message"></textarea><br>
            <input type="submit" name="envoyer"
            value="Envoyer" class="form__theForm__submit">
        </form>
    </section>
    </section>

<?php
include 'includes/footer.php';
?>