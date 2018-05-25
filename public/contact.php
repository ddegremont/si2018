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

    <header class="Header">
        <div class="Logo">
            <a href="index.php"><img class="Logo__img" src="../img/logo.png" alt="Logo"></a>
            <span class="Logo__name"></span>
        </div>
        <div class="Menu">
            <img class="Menu__imgBlack" src="../img/burger_menu.svg" alt="Burger menu">
        </div>
    </header>

    <section class="Contact">

    <div class="Contact__maintitleContainer">
        <h3 class="Contact__maintitle">Nous contacter</h3>
        <div class="Contact__titleLine"></div>
    </div>

    <div class="Contact__imgContainer">
        <img class="Contact__img" src="img/406802-svetik.jpg" alt="Contact image">
    </div>

    <div class="Contact__boxContainer">
        <div class="Contact__infos">
            <h2 class="Contact__name">Une année de voyages</h2>
            <div class="Contact__box">
                <div class="Contact__address">
                    <p class="Contact__addressText">32 rue des Peupliers</p>
                    <p class="Contact__addressText">92100 Boulogne</p>
                </div>
                <div>
                    <p class="Contact__phoneNumber"><span class="Contact__color">Phone</span>: +33(0) 413 10 513</p>
                    <p class="Contact__email"><span class="Contact__color">E-mail</span>: rédaction@uneanneedevoyages.com</p>
                </div>
            </div>
        </div>
    </div>

    <div  class="Contact__form">
        <form action="index.php" method="post">
            <select name="genre" id="genre">
                <option value="Vous êtes?">Vous êtes?</option>
                <option value="Homme">Homme</option>*
                <option value="Femme">Femme</option>
            </select>
            <input type="text" placeholder="Votre société">
            <input type="text" placeholder="Votre nom">
            <input type="text" placeholder="Votre e-mail">
            <input type="text" placeholder="Votre message">
            <input type="submit" value="ENVOYER">
        </form>
    </div>

    </section>

<script type="text/javascript" src="./js/main.js">

</script>
</body>
</html>
