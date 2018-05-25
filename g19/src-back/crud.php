<html>
<head>
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        h1{
            transform: translateY(-150px);
        }
        .list{
            position: absolute;
            left: 50%;
            top:50%;
            transform: translate(-50%,-50%);
        }
        a{
            text-decoration: none;
            color: #4A90E2;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./admin.php">admin</a></li>
        <li class="breadcrumb-item"><a href="./crud.php">crud</a></li>
    </ol>
</nav>
<div class="list">
    <h1>Page Admin</h1>
<ul class="list-group">
    <li class="list-group-item"><a href="./top/top.php">ajouter dans les top 100</a></li>
    <li class="list-group-item"><a href="./bat/bat.php">ajouter une photo</a></li>
    <li class="list-group-item"><a href="./fp/fp.php">ajouter un article</a></li>
</ul>
</div>
</body>
</html>
