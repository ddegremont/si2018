<?php
require_once '../includes/connection.php';
require_once '../includes/functions.php';
require_once './header.php';
?>
<h2>Etablissements</h2>
<p>Ici, vous gérez les établissements que vous voulez conseiller</p>
    <a href="new_establishement.php">ajouter un nouvel établissement</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">thumbnail</th>
            <th scope="col">nom</th>
            <th scope="col">ville</th>
            <th scope="col">type d'établissement</th>
            <th scope="col">editer</th>
            <th scope="col">supprimer</th>
        </tr>
        </thead>
<?php
displayEstablishementsList($pdo);
require_once './footer.php';
