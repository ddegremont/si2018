<?php
require_once '../connection.php';
require_once '../functions.php';
include "../header.php";
?>
<div class="container">
    <h1>ajouter un article</h1>
    <p>Ici vous pouvez créer un article</p>
    <a href="index.php">retour aux articles</a>
    <form action="doadd.php" method="post">
        <div class="form-group">
            <label for="">titre</label><input class="form-control" type="text" name="article[title]">
            <label for="">sous titre</label><input class="form-control" type="text" name="article[subtitle]">
            <label for="">contenu de l'article</label><textarea class="form-control" name="article[content]"></textarea>
            <label for="">link</label><input class="form-control" type="text" name="article[twitter_link]">
            <label for="">details</label><input class="form-control" type="text" name="article[details]">
            <label for="">date limite</label><input class="form-control" type="date" name="article[deadline]">
            <label for="">image de couverture</label><input class="form-control" type="text" name="article[cover_img]">
            <button type="submit" class="btn btn-primary">Ajouter l'article</button>
        </div>
    </form>
</div>
<?php include "../footer.php";
