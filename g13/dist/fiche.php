<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/common.f1870a2e.css">

</head>
<body>
	<section class="destinationHeader">
		<img class="destinationHeader-BackgroundMobile" src="/semenov-ivan-191829-unsplash@2xmobile.f267b81a.png">
		<img class="destinationHeader-Background" src="/semenov-ivan-191829-unsplash@2x.0176669b.png">
      <img class="header-Logo" src="/logo.812a26f4.svg">
      <img class="header-Burger" src="/Whiteburger.35efc23c.png">
      <ul class="header-ListContainer">
        <li class="header-ListContainer-ListItems"><a class="header-ListContainer-ListItems-Link" href="/index.php">Accueil</a></li>
        <li class="header-ListContainer-ListItems"><a class="header-ListContainer-ListItems-Link" href="/index2.php">Magazine</a></li>
        <li class="header-ListContainer-ListItems"><a class="header-ListContainer-ListItems-Link" href="/fiche.php">Fiches pratiques</a></li>
        <li class="header-ListContainer-ListItems"><a class="header-ListContainer-ListItems-Link" href="/index4.php">Tops</a></li>
        <li class="header-ListContainer-ListItems"><a class="header-ListContainer-ListItems-Link" href="/index3.php">Contact</a></li>
      </ul>
		<h2 class="destinationHeader-Title">
			France / Paris / Europe
		</h2>
		<h3 class="destinationHeader-SubTitle">
			Le Season
		</h3>
		<p class="destinationHeader-Description">
			Un petit coin d’Italie au cœur de Paris. Deux salles à manger agréables avec une deco au top! De l’entrée au dessert absolument aucune  fausses notes. Un serveur très sympathique et souriant!!
		</p>
		<h5 class="destinationHeader-Author">Jenny</h5>
	</section>
	<section class="continent">
		<img class="continent-Line" src="/Line3.ed1dfa96.svg">
		<div class="continent-Wrapper">
			<p class="continent-Wrapper-Title">Votre prochaine destination</p>
			<div class="continent-Wrapper-SelectionMobile">
				<p class="continent-Wrapper-SelectionMobile-Text">Trier par continent</p>
				<img class="continent-Wrapper-SelectionMobile-Icon" src="/Rectangle2.c0075bfe.svg">
			</div>
<?php

require_once "./functions.php";

if (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie" 
	&& isset($_GET["country"]) === true && $_GET["country"] === "Malaisie" 
	&& isset($_GET["type"]) === true && $_GET["type"] === "Hotel"): ?>
</div>

<?php
	$stmt = getInfo($_GET["continent"], $_GET["country"], $_GET["type"], $pdo);
	while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>	

		<div class="continent-Wrapper-Article">
			<img class="continent-Wrapper-Article-Img" src="/bddPictures/<?=$row['pictureSrc']?>">
			<p class="continent-Wrapper-Article-Author">Nom : <?=$row['name']?></p>
			<div class="continent-Wrapper-Article-Opinion">
				<p class="continent-Wrapper-Article-Opinion-Text">Avis : </p>
				<ul class="continent-Wrapper-Article-Opinion-Stars">
					<?php
						$count = intval($row['rating']);
						while ($count > 0):	?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<?php
							$count--;
						endwhile;
						while (intval($row['rating']) + $count < 5):
					?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/StarGrey.svg">
					</li>
					<?php
							$count++;
						endwhile;
					?>
				</ul>
			</div>
			<p class="continent-Wrapper-Article-Localisation">Localisation : <?=$row['localisation']?></p>
			<p class="continent-Wrapper-Article-Description">Description : <?=$row['description']?></p>
			<p class="continent-Wrapper-Article-More">Informations complémentaire : <?=$row['information']?></p>
			<p class="continent-Wrapper-Article-Hours">Horaire : <?=$row['hours']?></p>
		</div>
<?php
endwhile; ?>

<?php
elseif (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie" 
	&& isset($_GET["country"]) === true && $_GET["country"] === "Malaisie"
	&& isset($_GET["type"]) === true && $_GET["type"] === "Restaurant"): ?>
</div>
<?php
	$stmt = getInfo($_GET["continent"], $_GET["country"], $_GET["type"], $pdo);
	while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>	

		<div class="continent-Wrapper-Article">
			<img class="continent-Wrapper-Article-Img" src="/bddPictures/<?=$row['pictureSrc']?>">
			<p class="continent-Wrapper-Article-Author">Nom : <?=$row['name']?></p>
			<div class="continent-Wrapper-Article-Opinion">
				<p class="continent-Wrapper-Article-Opinion-Text">Avis : </p>
				<ul class="continent-Wrapper-Article-Opinion-Stars">
					<?php
						$count = intval($row['rating']);
						while ($count > 0):	?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<?php
							$count--;
						endwhile;
						while (intval($row['rating']) + $count < 5):
					?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/StarGrey.svg">
					</li>
					<?php
							$count++;
						endwhile;
					?>
				</ul>
			</div>
			<p class="continent-Wrapper-Article-Localisation">Localisation : <?=$row['localisation']?></p>
			<p class="continent-Wrapper-Article-Description">Description : <?=$row['description']?></p>
			<p class="continent-Wrapper-Article-More">Informations complémentaire : <?=$row['information']?></p>
			<p class="continent-Wrapper-Article-Hours">Horaire : <?=$row['hours']?></p>
		</div>
<?php
endwhile; ?>
<?php
elseif (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie" 
	&& isset($_GET["country"]) === true && $_GET["country"] === "Philippines" 
	&& isset($_GET["type"]) === true && $_GET["type"] === "Hotel"): ?>
</div>
<?php
	$stmt = getInfo($_GET["continent"], $_GET["country"], $_GET["type"], $pdo);
	while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>	

		<div class="continent-Wrapper-Article">
			<img class="continent-Wrapper-Article-Img" src="/bddPictures/<?=$row['pictureSrc']?>">
			<p class="continent-Wrapper-Article-Author">Nom : <?=$row['name']?></p>
			<div class="continent-Wrapper-Article-Opinion">
				<p class="continent-Wrapper-Article-Opinion-Text">Avis : </p>
				<ul class="continent-Wrapper-Article-Opinion-Stars">
					<?php
						$count = intval($row['rating']);
						while ($count > 0):	?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<?php
							$count--;
						endwhile;
						while (intval($row['rating']) + $count < 5):
					?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/StarGrey.svg">
					</li>
					<?php
							$count++;
						endwhile;
					?>
				</ul>
			</div>
			<p class="continent-Wrapper-Article-Localisation">Localisation : <?=$row['localisation']?></p>
			<p class="continent-Wrapper-Article-Description">Description : <?=$row['description']?></p>
			<p class="continent-Wrapper-Article-More">Informations complémentaire : <?=$row['information']?></p>
			<p class="continent-Wrapper-Article-Hours">Horaire : <?=$row['hours']?></p>
		</div>
<?php
endwhile; ?>
<?php
elseif (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie" 
	&& isset($_GET["country"]) === true && $_GET["country"] === "Philippines"
	&& isset($_GET["type"]) === true && $_GET["type"] === "Restaurant"): ?>
</div>
<?php
	$stmt = getInfo($_GET["continent"], $_GET["country"], $_GET["type"], $pdo);
	while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>	

		<div class="continent-Wrapper-Article">
			<img class="continent-Wrapper-Article-Img" src="/bddPictures/<?=$row['pictureSrc']?>">
			<p class="continent-Wrapper-Article-Author">Nom : <?=$row['name']?></p>
			<div class="continent-Wrapper-Article-Opinion">
				<p class="continent-Wrapper-Article-Opinion-Text">Avis : </p>
				<ul class="continent-Wrapper-Article-Opinion-Stars">
					<?php
						$count = intval($row['rating']);
						while ($count > 0):	?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<?php
							$count--;
						endwhile;
						while (intval($row['rating']) + $count < 5):
					?>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/StarGrey.svg">
					</li>
					<?php
							$count++;
						endwhile;
					?>
				</ul>
			</div>
			<p class="continent-Wrapper-Article-Localisation">Localisation : <?=$row['localisation']?></p>
			<p class="continent-Wrapper-Article-Description">Description : <?=$row['description']?></p>
			<p class="continent-Wrapper-Article-More">Informations complémentaire : <?=$row['information']?></p>
			<p class="continent-Wrapper-Article-Hours">Horaire : <?=$row['hours']?></p>
		</div>
<?php
endwhile; ?>

<?php
elseif (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie" 
	&& isset($_GET["country"]) === true && $_GET["country"] === "Malaisie"): ?>
			<div class="continent-Wrapper-Selection">
				<a href="./fiche.php?continent=Asie&country=Malaisie&type=Hotel"><h4 class="continent-Wrapper-Selection-Choice">Hôtel</h4></a>
				<a href="./fiche.php?continent=Asie&country=Malaisie&type=Restaurant"><h4 class="continent-Wrapper-Selection-Choice">Restaurant</h4></a>
			</div>
<?php
elseif (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie" 
	&& isset($_GET["country"]) === true && $_GET["country"] === "Philippines"): ?>
			<div class="continent-Wrapper-Selection">
				<a href="./fiche.php?continent=Asie&country=Philippines&type=Hotel"><h4 class="continent-Wrapper-Selection-Choice">Hôtel</h4></a>
				<a href="./fiche.php?continent=Asie&country=Philippines&type=Restaurant"><h4 class="continent-Wrapper-Selection-Choice">Restaurant</h4></a>
			</div>
<?php
elseif (isset($_GET["continent"]) === true && $_GET["continent"] === "Asie"): ?>

			<div class="continent-Wrapper-Selection">
				<h4 class="continent-Wrapper-Selection-Choice">Choix 1</h4>
				<h4 class="continent-Wrapper-Selection-Choice">Choix 2</h4>
				<a href="./fiche.php?continent=Asie&country=Malaisie"><h4 class="continent-Wrapper-Selection-Choice">Malaisie</h4></a>
				<a href="./fiche.php?continent=Asie&country=Philippines"><h4 class="continent-Wrapper-Selection-Choice">Philippines</h4></a>
				<h4 class="continent-Wrapper-Selection-Choice">Choix 3</h4>
				<h4 class="continent-Wrapper-Selection-Choice">Choix 4</h4>
			</div>
			<div class="continent-Wrapper-Destination">
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/South-Korea.2a0ce30f.png">
						<ul class="continent-Wrapper-DestinationMobile-Menu" style="display: block;">
						<li class="continent-Wrapper-DestinationMobile-Menu-Item">
							<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
								Corée du Sud
							</h5>
						</li>
						<li class="continent-Wrapper-DestinationMobile-Menu-Item">
							<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
								Hotels
							</h5>
						</li>
						<li class="continent-Wrapper-DestinationMobile-Menu-Item">
							<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
								Bars
							</h5>
						</li>
						<li class="continent-Wrapper-DestinationMobile-Menu-Item">
							<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
								Restaurants
							</h5>
						</li>
						<li class="continent-Wrapper-DestinationMobile-Menu-Item">
							<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
								Spa & Thalasso
							</h5>
						</li>
					</ul>

				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/andre-benz.3d8ae89b.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/MALAISIE.7ffca872.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/philippines.0824c05a.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/iswanto-arif.f2ec2f8d.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Tim.61b514c5.png">
				</div>
			</div>
<?php else: ?>
			<div class="continent-Wrapper-Selection">
				<h4 class="continent-Wrapper-Selection-Choice">Europe</h4>
				<h4 class="continent-Wrapper-Selection-Choice">Afrique</h4>
				<h4 class="continent-Wrapper-Selection-Choice">Amérique</h4>
				<a href="./fiche.php?continent=Asie"><h4 class="continent-Wrapper-Selection-Choice">Asie</h4></a>
				<h4 class="continent-Wrapper-Selection-Choice">Océanie</h4>
				<h4 class="continent-Wrapper-Selection-Choice">Antarctique</h4>
			</div>
			<div class="continent-Wrapper-Destination">
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Europe.cdbd4386.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Afrique.8176b5f4.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Amerique.d943a247.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Asie.d74e5798.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Oceanie.c860399f.png">
				</div>
				<div class="continent-Wrapper-Destination-Country">
					<img class="continent-Wrapper-Destination-Country-Picture" src="/Antarctique.c9a2968e.png">
				</div>
			</div>
			<div class="continent-Wrapper-DestinationMobile">
				<img class="continent-Wrapper-DestinationMobile-Picture" src="/South-Korea.2a0ce30f.png">
				<ul class="continent-Wrapper-DestinationMobile-Menu">
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">
						<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
							Corée du Sud
						</h5>
					</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">
						<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
							Hotels
						</h5>
					</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">
						<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
							Bars
						</h5>
					</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">
						<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
							Restaurants
						</h5>
					</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">
						<h5 class="continent-Wrapper-DestinationMobile-Menu-Item-Text">
							Spa & Thalasso
						</h5>
					</li>
				</ul>
			</div>
			<div class="continent-Wrapper-DestinationMobile">
				<img class="continent-Wrapper-DestinationMobile-Picture" src="/andre-benz.3d8ae89b.png">
				<ul class="continent-Wrapper-DestinationMobile-Menu">
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Corée du Sud</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Hotels</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Bars</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Restaurants</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Spa & Thalasso</li>
				</ul>
			</div>
			<div class="continent-Wrapper-DestinationMobile">
				<img class="continent-Wrapper-DestinationMobile-Picture" src="/iswanto-arif.f2ec2f8d.png">
				<ul class="continent-Wrapper-DestinationMobile-Menu">
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Corée du Sud</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Hotels</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Bars</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Restaurants</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Spa & Thalasso</li>
				</ul>
			</div>
			<div class="continent-Wrapper-DestinationMobile">
				<img class="continent-Wrapper-DestinationMobile-Picture" src="/philippines.0824c05a.png">
				<ul class="continent-Wrapper-DestinationMobile-Menu">
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Corée du Sud</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Hotels</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Bars</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Restaurants</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Spa & Thalasso</li>
				</ul>
			</div>
			<div class="continent-Wrapper-DestinationMobile">
				<img class="continent-Wrapper-DestinationMobile-Picture" src="/MALAISIE.7ffca872.png">
				<ul class="continent-Wrapper-DestinationMobile-Menu">
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Corée du Sud</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Hotels</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Bars</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Restaurants</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Spa & Thalasso</li>
				</ul>
			</div>
			<div class="continent-Wrapper-DestinationMobile">
				<img class="continent-Wrapper-DestinationMobile-Picture" src="/Tim.61b514c5.png">
				<ul class="continent-Wrapper-DestinationMobile-Menu">
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Corée du Sud</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Hotels</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Bars</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Restaurants</li>
					<li class="continent-Wrapper-DestinationMobile-Menu-Item">Spa & Thalasso</li>
				</ul>
			</div>
		</div>
		<div class="continent-Wrapper-Article">
			<img class="continent-Wrapper-Article-Img" src="/restaurant.247e278b.png">
			<p class="continent-Wrapper-Article-Author">Nom : Qureshi Malaysia</p>
			<div class="continent-Wrapper-Article-Opinion">
				<p class="continent-Wrapper-Article-Opinion-Text">Avis : </p>
				<ul class="continent-Wrapper-Article-Opinion-Stars">
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
					<li class="continent-Wrapper-Article-Opinion-Stars-Item">
						<img class="continent-Wrapper-Article-Opinion-Stars-Item-Full" src="/Star.5a79d4d9.svg">
					</li>
				</ul>
			</div>
			<p class="continent-Wrapper-Article-Localisation">Localisation : Yeongdeungpo-gu, Séoul 07326 Corée du sud</p>
			<p class="continent-Wrapper-Article-Description">Description : Lorem Ipsum</p>
			<p class="continent-Wrapper-Article-More">Informations complémentaire  : Parking gratuit, Buffet petit déjeuner, Climatisation, Piscine, Wi-Fi gratuit</p>
			<p class="continent-Wrapper-Article-Hours">Horaire : entrée 14h - sortie 11h</p>
		</div>
<?php endif; ?>	
	</section>
	<section class="footer">
		<div class="footer-Wrapper">
			<div class="footer-Wrapper-ListLink">
				<h2 class="footer-Wrapper-ListLink-Item">Plan du site</h2>
				<h2 class="footer-Wrapper-ListLink-Item">Mentions légales et crédits</h2>
				<h2 class="footer-Wrapper-ListLink-Item">Conditions générales de ventes</h2>
				<h2 class="footer-Wrapper-ListLink-Item">© 2018 - Une Année de Voyages</h2>
			</div>
			<div class="footer-Wrapper-ListMedia">
				<img class="footer-Wrapper-ListMedia-Item" src="/twitter2.f1f72c01.svg">
				<img class="footer-Wrapper-ListMedia-Item" src="/facebook.8a740c8a.svg">
				<img class="footer-Wrapper-ListMedia-Item" src="/instagram.8039c616.svg">
				<img class="footer-Wrapper-ListMedia-Item" src="/youtube.f3d90fda.svg">
			</div>
		</div>
		<div class="footer-Partner">
			<img class="footer-Partner-Item adp" src="/adp.826343d1.svg">
			<img class="footer-Partner-Item nikon" src="/nikon.942ab4f8.svg">
			<img class="footer-Partner-Item fujifilm" src="/fujifilm.22cb10fc.svg">
			<img class="footer-Partner-Item ios" src="/ios.7fa7c2bb.png">
			<img class="footer-Partner-Item android" src="/android.212b61ba.png">
		</div>

	</section>
	<script src="/app.12be189d.js"></script>
</body>
</html>