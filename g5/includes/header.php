<?php
require_once "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="magasine, voyage, mook, photo, guide, book, livre, reportage">
    <meta name="author" content="Une année de voyage">
    <meta name=”description” content=”Une année de voyage - description du projet de mook sur le voyage” />
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="./src/styles/reset.css">
    <link rel="stylesheet" href="./src/styles/style.css">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <title>Une Année De Voyages</title>
  </head>
  <body>
    <header class="header">
      <nav class="navigation">

        <div class="navigation-BurgerMenu">
          <img style="width="40px" height="40px";" src="img/burger_menu.png" alt="Burger">
        </div>

        <ul class="navigation-Content-List">
          <li class="navigation-List"><a class="navigation-Link" href="index.php">Accueil</a></li>
          <li class="navigation-List"><a class="navigation-Link" href="./articles.php">Bon plan aérien</a></li>
          <li class="navigation-List"><a class="navigation-Link" href="./pageTop.php">Nos top 100</a></li>
          <li class="navigation-List"><a class="navigation-Link" href="./magazine.php">Notre magazine</a></li>
          <li class="navigation-List"><a class="navigation-Link" href="./contact.php">Contact</a></li>
          <li class="navigation-List"><a class="navigation-Link" href="./admin">Admin</a></li>
        </ul>
      </nav>
    </header>
