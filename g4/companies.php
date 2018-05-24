<?php
include "src/functions/functions.php";

$connection = connect();
$data = getTwitterData($connection);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/newsairstyle.css">
    <link rel="stylesheet" href="src/components/style/header.css">
    <link rel="stylesheet" href="src/components/style/footer.css">
    <title>Actualités</title>
</head>

<body>
<?php include "src/includes/header.php" ?>
<section class="twittersection">
    <h2 class="twitterTitle">Actualités Twitter</h2>
    <div class="twitterContainer">
        <form action="src/actions/twitter_doCreate.php" method="post">
            <label for="name">name</label>
            <input type="text" name="name">
            <label for="url">url</label>
            <input type="text" name="url">
            <input type="submit" value="Create">
        </form>
        <?php displayTwitterContent($data) ?>
    </div>
</section>
<section class="newsairContainer">
    <h1 class="newsairTitle">NEWS AIR</h1>
    <div class="newsairDescContainer">
        <p class="newsairP1">
            Acheter un billet "Tour du monde" pour moins de 3.000 €… Séquencer un voyage à destinations multiples… Cumuler les milles inter-compagnies…
            Permettre un stop longue durée sur une escale avec un billet unique… sont autant d'avantages offerts par les Alliances des Compagnies aériennes !
        </p>
        <p class="newsairp2">
            Le voyage commence à peine le pied posé dans l'avion. La meilleure façon de découvrir une destination consiste à voyager avec la Compagnie
            aérienne nationale. Chacune avec son style, sa culture, son identité s'applique à nous transmettre "l'esprit du pays", dans les meilleures conditions
            de sécurité, de confort et d'accueil.
        </p>
        <p class="newsairp2">

            Les compagnies aériennes, regroupées en trois Alliances mondiales, s'enrichissent de leur multiculturalisme, offrent des innovations constantes,
            possèdent un "réseau" planétaire. Elles mutualisent leurs qualités et compétences, améliorent et harmonisent l'expérience "voyage".
        </p>
        <a href="" class="newsairLink">Découvrez-les</a>
    </div>
</section>
<?php include "src/includes/footer.php"; ?>
</body>

</html>
