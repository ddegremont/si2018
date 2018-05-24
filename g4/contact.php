<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/contactstyle.css">
    <link rel="stylesheet" href="src/components/style/header.css">
    <link rel="stylesheet" href="src/components/style/footer.css">
</head>

<body>
<?php include "src/includes/header.php" ?>
<div class="contactinfo">
    <p class="info">
        UNE ANNÉE DE VOYAGES<br> 32, rue des Peupliers<br> 92100 Boulogne<br> Phone: <span class="contactblue">+33(0) 413 10 513</span><br> E-mail: <span class="contactblue">rédaction@uneanneedevoyages.com</span> <br> Ouvert du lundi au vendredi de
        10h à 18h<br> Rédactrice en chef : Judith Lossmann<br>
        <span class="contactblue">+ 33 (0)6 88 31 61 37<br> judith.lossmann@uneanneedevoyages.com</span><br> Pigiste et secrétaire de rédaction : Caroline M’zali<br> <span class="contactblue">+33 (0) 7 71 12 87 48<br> caroline.mzali@uneanneedevoyages.com</span>
    </p>
    <div class="contactmail">
        <form action="src/actions/contact_doSendMail.php" method="post">
            <select style="display:block">
                <option value="0">Vous êtes :</option>
                <option value="1">Un journaliste</option>
                <option value="2">Un annonceur</option>
                <option value="3">Un lecteur</option>
                <option value="4">Un partenaire</option>
                <option value="5">Un office du tourisme</option>
            </select>
            <input type="text" name="name" placeholder="Votre nom" class="contactmailinput"><br>
            <input type="text" name="company" placeholder="Votre société" class="contactmailinput"><br>
            <input type="text" name="mail" placeholder="Votre e-mail" class="contactmailinput"><br>
            <input type="text" name="phone" placeholder="Votre numéro de téléphone" class="contactmailinput"><br>
            <textarea placeholder="Votre message" class="contacttextarea"></textarea><br>
            <input type="submit" value="Valider" class="contactbtn">
        </form>
    </div>
</div>
<div class="socialmedia">
    <img src="src/components/img/Accueil/facebook.png" alt="" class="imgsocial">
    <img src="src/components/img/Accueil/instagram.png" alt="" class="imgsocial">
    <img src="src/components/img/Accueil/twitter.png" alt="" class="imgsocial">
    <img src="src/components/img/Accueil/youtube.png" alt="" class="imgsocial">
</div>
<?php include "src/includes/footer.php" ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../../js/index.js"></script>
</script>
</body>


</html>