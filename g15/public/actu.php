<?php

require_once './includes/connection.php';

$request = "SELECT 
`id`, `category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle` 
FROM
`articles`
;";

$stmt = $pdo->prepare($request);
$stmt->execute();
$row = $stmt->fetchAll();

$rowLengthTemp = count($row);
$rowLength = $rowLengthTemp - 1;
$counter = 0;
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="/styles.7a063d46.css">
  <link rel="icon" href="favicon.png">
  <title>Actu</title>
</head>
<body>
   <div class="content">
      <header class="header">
         <div class="header-left">
             <a href="#"><img class="logo" src="/logo_uneanneedevoyages_Desktop-black.fc18ad27.svg"></a>
               <div class="bgMenuLogo">
               <div class="nav-burger"></div>
               <div class="nav-burger"></div>
               <div class="nav-burger"></div>
               </div>

               <div class="bgMenuContainer hidden">
               <div class="bgMenu">
               <ul class="bgMenu__list">
               <li class="bgMenu__listItem"><a class="listitem" href="/index.php">Accueil</a></li>
               <li class="bgMenu__listItem"><a class="listitem" href="/top.php">Top 100</a></li>
               <li class="bgMenu__listItem"><a class="listitem" href="/actu.php">Actualités</a></li>
               <li class="bgMenu__listItem"><a class="listitem" href="/img.php">Boite à images</a></li>
               <li class="bgMenu__listItem"><a class="listitem" href="/contact.php">Contact</a></li>
               </ul>
               </div>
               <div class="bgMenu__cross">X</div>
               </div>
         </div>
         <div class="header-right">
            <ul class="header-list">
               <li class="header-listitem"><a href="/index.php">Acceuil</a></li>
               <li class="header-listitem"><a href="/top.php">Top 100</a></li>
               <li class="header-listitem"><a href="/actu.php">Actualités</a></li>
               <li class="header-listitem"><a href="/img.php">Boite à images</a></li>
               <li class="header-listitemlc"><a href="/contact.php">Contact</a></li>
               <!-- <li class="header-menu"><a href="#"><img class="menu" src="img/icons/menu.svg" alt="menu"/></a></li> -->
            </ul>
         </div>
      </header>
      <h1>Actualités</h1>
      <section class="articles">
         <div class="article-filtre">
            <ul class="articles-filtre-list">
               <li class="articles-filtre-item-title">Trier les articles</li>
            </ul>
            <div class="checkbox-content">
               <label class="container">Bons plans
                 <input type="checkbox" name="Bons plans">
                 <span class="checkmark"></span>
               </label>
            </div>
            <div class="checkbox-content">
               <label class="container">Voyages
                 <input type="checkbox" name="Voyages">
                 <span class="checkmark"></span>
               </label>
            </div>
            <div class="checkbox-content">
               <label class="container">Loisirs
                 <input type="checkbox" name="Loisirs">
                 <span class="checkmark"></span>
               </label>
            </div>
            <div class="checkbox-content">
               <label class="container">Gastronomie
                 <input type="checkbox" name="Gastronomie">
                 <span class="checkmark"></span>
               </label>
            </div>
         </div>
         <div class="articles-content">
             <?php while ($counter < $rowLengthTemp) :?>
            <div class="articles-full" data-category="<?=$row[$rowLength]['category']?>">
               <div class="articles-description">
                  <p class="articles-title"><?=$row[$rowLength]['title']?></p><br>
                  <p class="articles-localisation"><?=$row[$rowLength]['subtitle']?></p><br>
                  <p class="articles-txt"><?=$row[$rowLength]['content']?></p>
               </div>
            </div>
                 <?php
                 $rowLength--;
                 $counter++;
             endwhile;
             ?>
         </div>
      </section>

  <!-- Debut Footer -->
  <footer class="footer">
      <div class="row">
        <!-- Debut Footer Nav -->
        <div class="col-xs-12 col-md-3">
          <div class="footer-nav">
            <h2 class="footer-nav-title">Une année de voyages</h2>
            <ul class="footer-nav-list">
              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Accueil</a>
              </li>

              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Catégories</a>
              </li>

              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Services</a>
              </li>

              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Bons plans</a>
              </li>

              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Galerie</a>
              </li>

              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Contact</a>
              </li>

              <li class="footer-nav-listItem">
                <a href="#" class="footer-nav-link">Blog</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Fin Footer Nav -->
        <!-- Debut Footer Contact -->

        <div class="col-xs-12 col-md-4 middle-md">
          <div class="footer-contact">
            <h2 class="footer-contact-adress-title1">Nous contacter</h2>
            <h4 class="footer-contact-adress-title2 blue">Une année de voyages</h4>

            <ul class="footer-contact-adress-list">
              <li class="footer-contact-adress-listItem">
                <h6 class="footer-contact-adress-link">32 rue des Peupliers</h6>
              </li>

              <li class="footer-contact-adress-listItem">
                <h6 class="footer-contact-adress-link">92100 Boulogne</h6>
              </li>

              <li class="footer-contact-adress-listItem">
                <a class="blue" href="tel:+3341310513">Téléphone : +33(0) 413 10 513</a>
              </li>

              <li class="footer-contact-adress-listItem">
                <a class="blue" href="mailto:rédaction@uneanneedevoyages.com">E-mail : rédaction@uneanneedevoyages.com</a>
              </li>

              <li class="footer-contact-adress-listItem">
                <h6 class="footer-contact-adress-link">Ouvert du lundi au vendredi de 10h à 18h</h6>
              </li>
            </ul>
          </div>
        </div>

        <!-- Fin Footer Contact -->
        <!-- Debut Footer Contact 2 -->

        <div class="col-xs-12 col-md-4 middle-md">
          <div class="footer-contact">
            <h4 class="footer-contact-adress-title2 blue">Rédactrice en chef</h4>

            <ul class="footer-contact-adress-list">
              <li class="footer-contact-adress-listItem">
                <h6 class="footer-contact-adress-link">Judith Lossmann
              </h6></li>

              <li class="footer-contact-adress-listItem">
                <a class="blue" href="tel:+33688316137">Telephone : + 33 (0) 6 88 31 61 37</a>
              </li>

              <li class="footer-contact-adress-listItem">
                <a class="blue" href="mailto:judith.lossmann@uneanneedevoyages.com">Email : judith.lossmann@uneanneedevoyages.com</a>
              </li>
            </ul>
          </div>

        <!-- Fin Footer Contact 2 -->
        <!-- Fin Footer Contact 3 -->
          <div class="footer-contact">
            <h4 class="footer-contact-adress-title2 blue">Pigiste et secrétaire de <br>rédaction<br>
            </h4>

            <ul class="footer-contact-adress-list">
              <li class="footer-contact-adress-listItem">
                <h6 class="footer-contact-adress-link">Caroline M’zali</h6>
              </li>

              <li class="footer-contact-adress-listItem">
                <a class="blue" href="tel:+33771128748">Telephone : +33 (0) 7 71 12 87 48</a>
              </li>

              <li class="footer-contact-adress-listItem">
                <a class="blue" href="mailto:caroline.mzali@uneanneedevoyages.com">E-mail : caroline.mzali@uneanneedevoyages.com</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Fin Footer Contact 3 -->
        <!-- Debut Footer Social -->
        <div class="col-xs-12 col-md-1">
          <div class="footer-social">
            <h2 class="footer-social-title">Social</h2>
            <div class="footer-social-itemsContainer">
              <img src="/facebook.e390a3d3.svg" alt="logo-facebook" class="footer-social-itemsContainer-img">
              <img src="/twitter.e1bc76e1.svg" alt="logo-twitter" class="footer-social-itemsContainer-img">
              <img src="/instagram.6cc57bfc.svg" alt="logo-instagram" class="footer-social-itemsContainer-img">
              <img src="/youtube.d333aee2.svg" alt="logo-youtube" class="footer-social-itemsContainer-img">
            </div>

            <div class="footer-social-list">
              <ul class="footer-social-listContainer">
                <li class="footer-social-listContainer-items"><a href="https://www.facebook.com/uneanneedevoyages/" class="footer-social-listContainer-link">Facebook</a></li>
                <li class="footer-social-listContainer-items"><a href="https://twitter.com/1AnneeDeVoyages" class="footer-social-listContainer-link">Twitter</a></li>
                <li class="footer-social-listContainer-items"><a href="https://www.instagram.com/uneanneedevoyages/" class="footer-social-listContainer-link">Instagram</a></li>
                <li class="footer-social-listContainer-items"><a href="https://www.youtube.com/channel/UCESfTu2chDpHfGFkx-cfKDQ" class="footer-social-listContainer-link">Youtube</a></li>
              </ul>
            </div>
          </div>
        </div>
    <!-- Fin Footer Social -->
    <!-- Debut Footer Legal Notice -->
    <div class="col-xs-12 col-md-12 center-xs center-md">
      <div class="footer-legal">
        <h6 class="footer-legal-title">Tous droits réservés Une Année De Voyages ©2018-2022</h6>
      </div>
    </div>
  </div>
    <!-- Fin Footer Legal Notice -->
  </footer>
   </div>
   <script>
   var bgMenuCross = document.querySelector('.bgMenu__cross');
   var bgMenuLogo = document.querySelector('.bgMenuLogo');
   var bgMenuContainer = document.querySelector(".bgMenuContainer");

   var openBgMenu = () => {
     bgMenuContainer.classList.remove('hidden');
   }

   var closeBgMenu = () => {
     bgMenuContainer.classList.add('hidden');
   }

   bgMenuCross.addEventListener('click', function() {
     closeBgMenu();
   })
   bgMenuLogo.addEventListener('click', function() {
     openBgMenu();
   })

   var checkboxes = document.querySelectorAll("input[type=checkbox]");
   var articlesFull = document.querySelectorAll('.articles-full');

   var toFilterArticles = () => {
       var isChecked = [];

       for (var i = 0; i < checkboxes.length; i++) {
           if (checkboxes[i].checked) {
               isChecked.push(checkboxes[i].name);
           }
       }
       if (isChecked.length === 0) {
           for (var i = 0; i < articlesFull.length; i++) {
               articlesFull[i].style.display = "";
           }
           return;
       }

       for (var i = 0; i < articlesFull.length; i++) {
           articlesFull[i].style.display = "none";
       }

       for (var i = 0; i < articlesFull.length; i++) {
           for (var j = 0; j < isChecked.length; j++) {
               if (isChecked[j] === articlesFull[i].getAttribute('data-category')) {
                   articlesFull[i].style.display = "";
               }
           }
       }
   };

   for (var i = 0; i < checkboxes.length; i++) {
       checkboxes[i].addEventListener( 'change', function() {
           toFilterArticles();
       });
   }
   </script>
</body>
</html>
