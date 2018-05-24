<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
    <link rel="stylesheet" href="styles/styles.css">
    <title>Une année de voyages</title>
</head>
<body>

    <section class="Find" style="background-image: url('img/wow.jpg')">

        <header class="Header">
            <div class="Logo">
                <img class="Logo__img" src="../img/logo.png" alt="Logo">
                <span class="Logo__name"></span>
            </div>
            <div class="Menu">
                <img class="Menu__img" src="../img/burger_menu.svg" alt="">
            </div>
        </header>

        <h1 class="Find__mainTitle">TROUVEZ LE VOYAGE QUI VOUS RESSEMBLE.</h1>
        <div class="Find__searchContainer">
            <div class="Find__searchBox">
                <h2 class="Find__searchTitle">Choisissez une destination</h2>
                <form class="Find_form" action="" method="post">
                    <p class="Find__text">Où?</p>
                    <input class="Find__location" type="text" placeholder="France...">
                    <p class="Find__text">Catégorie?</p>
                    <select class="Find__category" type="text">
                        <option value="Gastronomie">Gastronomie</option>*
                        <option value="Hôtellerie">Hôtellerie</option>
                    </select>
                    <br>
                    <div class="Find__submitContainer">
                        <input class="Find__submit" type="submit" value="Rechercher">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <section class="Desc">

        <div class="Desc__content">
            <div class="Desc__titleContainer">
                <h3 class="Desc__title">Voyageons ensemble</h3>
                <div class="Desc__titleLine"></div>
            </div>
            <div class="Desc__travelContent">
                <div class="Desc__travelBox">
                    <img class="Desc__travelImg" src="img/magazine.svg" alt="Magazine icon">
                    <p class="Desc__travelText">300 pages de reportages sous forme de "carnets de voyages". Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !).</p>
                </div>
                <div class="Desc__travelBox">
                    <img class="Desc__travelImg" src="img/smartphone.svg" alt="Smartphone icon">
                    <p class="Desc__travelText">Une sorte de "bible" intemporelle des destinations avec des reportages bénéficiant d'une durée de vie illimitée... Le rêve !</p>
                </div>
                <div class="Desc__travelBox">
                    <img class="Desc__travelImg" src="img/clipboard.svg" alt="Clipboard icon">
                    <p class="Desc__travelText">Elles vous disent tout du voyage décrit nos articles : Hôtels, restaurants, boutiques, musée et shopping.</p>
                </div>
            </div>
            <div class="Desc__titleContainer">
                <h3 class="Desc__title">Magazine</h3>
                <div class="Desc__titleLine"></div>
            </div>
            <h4 class="Desc__subtitle">Un mook collector. Des fiches pratiques. Une application. Un site.</h4>
            <p class="Desc__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div class="Desc__mockupContainer">
                <img class="Desc__mockup" src="img/mockup.png" alt="Mockup">
            </div>
        </div>

    </section>

<script type="text/javascript" src="./js/main.js">

</script>
</body>
</html>
