<?php

/**
 * Show HTML <HEAD>
 * @param string $title, boolean $breadcrumb
 */

function head($title = "", $breadcrumb = true) { ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        <link rel="stylesheet" href="../webroot/css/bootstrap.min.css">
        <link rel="icon" type="image/png" href="../webroot/img/favicon.png" />
        <link rel="stylesheet" href="../assets/css/styles.css">
    </head>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img class="logo" src="../assets/img/logo-blanc.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Admin Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../index.php">Site Acceuil</a>
                </li>
            </ul>
        </div>
    </nav>
    <body class="pb-5">
        <div class="container">
            <div class="row">
                <?php if($breadcrumb){ ?>
                <div class="col-md-12 my-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                        </ol>
                        <a href="index.php" class="btn btn-outline-dark btn-sm float-right">« Retour à la liste</a>
                    </nav>
                </div>
                <?php } ?>
                <div class="col-md-12 my-3 mb-5">
                    <h1><?=$title?></h1>
                </div>
<?php } 

/**
 * Show HTML footer
 * No param
 */
function footer(){ ?>
            </div>
        </div>
    </body>
</html>
<?php }
