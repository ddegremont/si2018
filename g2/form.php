<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">

  <title>Une Année De Voyages</title>
</head>
<body>

  <?php include 'header.php';?>
	<main class="main">

    <section class="contact">
      <div class="contact__nav-container">
        <ul class="contact__list">
          <li class="contact__list-item"><a class="contact__list-link" href="#">Accueil</a></li>
          <li class="contact__list-item">&nbsp;>&nbsp;</li>
          <li class="contact__list-item"><a class="contact__list-link" href="#">Contact</a></li>
        </ul>
      </div>

      <div class="contact__container">
        <h3 class="contact__h3">Nous contacter</h3>
        <div class="contact__container-description">
          <ul class="contact__listContact">
            <li class="contact__listContact-item"><span class="contact__spanAnnee">Une année de voyages</span></li>
            <li class="contact__listContact-item">32, rue des Peupliers</li>
            <li class="contact__listContact-item">92100 Boulogne</li>
            <li class="contact__listContact-item"><span class="contact__span">Téléphone</span> : +33(0) 413 10 513</li>
            <li class="contact__listContact-item"><span class="contact__span">E-mail</span> : rédaction@uneanneedevoyages.com</li>
          </ul>
        </div>

      </div>

    </section>

    <section class="form">
      <div class="form__container">

          <form class="form__job" action="index.php" method="post">
              <select class="form__select" name="job" id="job">
                <option value="" selected disabled hidden>Vous êtes :</option>
                <option value="Un journaliste">Un journaliste</option>
                <option value="Un annonceur">Un annonceur</option>
                <option value="Un lecteur">Un lecteur</option>
                <option value="Un partenaire">Un partenaire</option>
                <option value="Un office du tourisme">Un office du tourisme</option>
              </select>
          </form>

          <form action="#" class="form">

            <div class="form__group">
               <input type="text" class="form__input" placeholder="Votre société" id="societe" required>
               <label for="name" class="form__label">Votre société</label>
           </div>

          <div class="form__fullname-Container">

               <div class="form__group">
                  <input type="text" class="form__input" placeholder="Nom" id="nom" required>
                  <label for="name" class="form__label">Votre nom</label>
              </div>

              <div class="form__group">
                 <input type="text" class="form__input" placeholder="Prénom" id="prenom" required>
                 <label for="name" class="form__label">Votre prénom</label>
              </div>

          </div>


          <div class="form__group">
              <input type="email" class="form__input" placeholder="E-mail" id="email" required>
              <label for="email" class="form__label">Votre e-mail</label>
          </div>

          <div class="form__group">
            <input type="name" class="form__input" placeholder="Téléphone" id="number" required>
            <label for="name" class="form__label">Votre téléphone</label>
          </div>

          <textarea class="form__text" name="name" rows="10" cols="57" placeholder="Message"></textarea>

          <div class="form__btn">
              <button class="btn btn--green">Envoyer</button>
          </div>

        </form>

      </div>

    </section>

	</main>

  <?php include 'footer.php';?>

</body>
</html>
