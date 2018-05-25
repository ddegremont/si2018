<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 24/05/2018
 * Time: 13:31
 */
?>
<!doctype html>
<html>
<head>
    <title>ajouter dans les top 100</title>
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
<form style="width: 500px;" action="./doadd_top.php" method="post">
    <h1>ajouter dans les top 100</h1>
    <div class="form-group">
        <label for="">Classement</label>
        <input class="form-control form-control-sm" type="number" name="top_class">
        <label for="">Title</label>
        <input class="form-control form-control-sm" type="text" name="top_title">
        <label for="">City</label>
        <input class="form-control form-control-sm" type="text" name="top_city">
    </div>
    <div class="form-group">
        <label for="">Categorie</label>
        <select class="form-control form-control-sm" type="select" name="top_select">
            <option value="Restaurant">Restaurant</option>
            <option value="hotel" selected>hotel</option>
            <option value="spa">spa</option>
        </select>
    </div>
    <input class="btn btn-primary" type="submit" value="Ajouter">
</form>
</body>
</html>
