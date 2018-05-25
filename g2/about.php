<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">

  <title>Une Année De Voyages</title>
</head>
<body>
  <?php include 'header.php';?>


    <section class="header__main">
    <h2 class="header__main-h2">Une année de voyages</h2>
    <p class="header__main-textPrimary">Des voyages testés...</p>
    <p class="header__main-textSec">Des idées pour partir toute l'année !</p></br>
    <ul class="header__main-list">
      <li class="header__main-item">Un mook collector</li>
      <li class="header__main-item">Des fiches pratiques</li>
    </ul>
    <ul class="header__main-list">
      <li class="header__main-item">Une application</li>
      <li class="header__main-item">Un site</li>
    </ul>
  </section>
	<main>



		<section class="mook">
      <div class="mook__title">
        <h3 class="mook__title-h3">Le mook</h3>
      </div>

      <div class="mook__title-description">
        <p class="mook__title-text">Un mook (contravtion de magazine et book) est un ouvrage hybride dont le format se situe entre le magazine et le livre.</p>
      </div>

      <div class="mook__container">
          <div class="mook__containerMini">
            <div class="mook__containerImg">
              <img class="mook__container-img" src="image/uadv-couv.jpg" alt="Couverture">
            </div>
            <div class="mook__containerTxt">
                <h4 class="mook__container-h4">Une année de voyages</h4>
                <p class="mook__container-text">Un mook à collectionner grâce à sa couverture illustrée, contenant des fiches pratiques, des destinations testées et approuvées par nous journalistes et 300 pages de reportages sous forme de "carnets de voyages".</p>
            </div>
          </div>

          <div class="mook__containerMini">
            <div class="mook__containerTxt2">
                <h4 class="mook__container-h4">Disponible directement</h4>
                <p class="mook__container-text">Une appli qui supprime l'obsolescence du print... Rien que ça ! Une Année De Voyages est un mook print qui vit simultanément à l'ère du numérique... C'est sur l'application que nos fiches pratiques seront updatées et téléchargeables.</p>
            </div>
            <div class="mook__container-img2">

            </div>
          </div>

          <div class="moon__containerLink">
            <a class="mook__link" href="mook.php">Aperçu des différents mooks &nbsp;-></a>
          </div>

      </div>

		</section>


	</main>

  <?php include 'footer.php';?>

</body>
</html>
