<?php
require_once 'connection.php';
require_once 'functions.php';
include 'header.php';
?>

    <div class="container">
        <nav>
            <ul class="nav bg-light">
                <li class="nav-item">
                    <a class="nav-link" href="./establishements/index.php">Etablissements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./partners/index.php">Partenaires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./articles/index.php">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./sheets/index.php">Fiches pratiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./slideshow/index.php">Boîte à Images</a>
                </li>
            </ul>
        </nav>

<h1>Administration</h1>
<p>l'endroit pour gérer les données</p>

<?php
include 'footer.php';
