<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 24/05/2018
 * Time: 13:55
 */

?>
<!doctype html>
<html>
<head>
    <title>ajouter un article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <style>
        h1{

            transform: translateY(-150px);
        }
        form{
            position: absolute;
            left: 50%;
            top:50%;
            transform: translate(-50%,-50%);

            form{
                width: 500px;
            }
        }
    </style>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../admin.php">admin</a></li>
        <li class="breadcrumb-item"><a href="../crud.php">crud</a></li>
    </ol>
</nav>
<form  action="./doadd_fp.php" method="post">
    <div class="form-group">
        <label for="">title</label>
        <input class="form-control form-control-sm" type="text" name="fp_title">
        <label for="">date</label>
        <input class="form-control form-control-sm" type="text" name="fp_subtitle">
        <label for="">image</label>
        <input class="form-control form-control-sm" type="text" name="fp_src">
        <label for="">texte</label>
        <textarea name="fp_text" class="form-control"></textarea>
        <label for="">signature</label>
        <input class="form-control form-control-sm" type="text" name="fp_sign">
        <label for="">logo</label>
        <input class="form-control form-control-sm" type="text" name="fp_logo">
    </div>
    <div class="form-group">
        <label >section</label>
        <select class="form-control form-control-sm" type="select" name="fp_select">
            <option value="fp">fiche pratique</option>
            <option value="avion" selected>bon plan aérien</option>
        </select>
    </div>
    <input class="btn btn-primary" type="submit" value="Ajouter">
</form>
</body>
</html>
