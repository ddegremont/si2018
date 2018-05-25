<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 24/05/2018
 * Time: 13:43
 */
?>
<!doctype html>
<html>
<head>
    <title>ajouter une image</title>
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
        input[type="submit"]{
            margin-top: 10px;
        }
    </style>
</head>
</html>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../admin.php">admin</a></li>
        <li class="breadcrumb-item"><a href="../crud.php">crud</a></li>
    </ol>
</nav>
<form style="width: 500px;" action="./doadd_bat.php" method="post" class="form-group">
    <h1>ajouter une photo</h1>
    <label>image</label>
    <input class="form-control form-control-sm" type="text" name="bat_src">
    <label>Title</label>
    <input type="text" name="bat_title" class="form-control form-control-sm">
    <label>description</label>
    <textarea class="form-control" name="bat_desc"></textarea>
    <input class="btn btn-primary" type="submit" value="Ajouter">
</form>
</body>
