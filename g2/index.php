<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/category.css">
  <link rel="stylesheet" href="css/footer.css">
  
  <!-- <link href="css/starter-template.css" rel="stylesheet"> -->
  <title>Document</title>
</head>
<body>
  <?php include 'header.php';?>
  <section class="header-slider">
    <div class="text-container">
    <p class="header-slider-title">Mariott  New York</p>
    <div class="header-slider-subtitle-container">
    <p class="header-slider-subtitle">HÔTELLERIE</p>
    <img class="slider-corss" src="image/corss.png" alt="">
    </div>
    </div>
    <div class="arrow-container">
      <img class="arrow-img left" src="image/arrowleft.png" alt="">
      <img class="arrow-img right" src="image/arrowleft.png" alt="">
   </div>
    <div class="header-slider-text-container">
      <div class="header-slider-text-container">
        <p class="header-slider-text">Le Lorem Ipsum est simplement du faux texte employé dans
                la composition et la mise en page avant impression. Le Lorem Ipsum est le faux
                texte standard de l'imprimerie depuis les années 1500, quand un
        </p>
      </div>
    </div>
  </section>
  <section class="category container mt-5">

			<div class="category__container">
				<h3 class="category__h3">Catégories</h3>
				<div class="category__container-img">

          <a class="category__restauration-link" href="#">
  					<div class="category__text">Restauration</div>
          </a>

        <a class="category__hotel-link" href="#">
          <div class="category__text">Hôtellerie</div>
        </a>

        <a class="category__cafe-link" href="#">
          <div class="category__text">Café</div>
        </a>

				</div>

			</div>

		</section>
  <div class="container mt-5">
    <p class="actu-title">L'ACTUALITÉ</p>
<div class="row">
<div class="col">

</div>
<div class="col">
<div class="card">
<img class="card-img-top" src="image/France.jpg/100px180/" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">Gastronomie</h5>
  <p class="card-text">Air France fait voyager la gastronomie française.</p>
  <a href="article.php" class="card-link">En savoir plus <span>&rarr;</span></a>
</div>
</div>
</div>
<div class="col">


</div>
</div>
</div>
<div class="container mt-5">
  

<div class="all-article">
<a class="all-articles-link" href="allArticles.php">Tous les articles<span>&rarr;</span></a>
</div>



<?php include 'footer.php';?>
  <script>
  </script>
</body>
</html>
