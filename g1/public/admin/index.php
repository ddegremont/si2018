<?php
require_once "admin_header.php";
require_once "../includes/functions.php";
require_once "../includes/connection.php";
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Tous les articles</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Sous-titre</th>
                    <th>Contenu</th>
                    <th>Image SRC</th>
                    <th>Image ALT</th>
                </tr>

                <?php
                $pages = getPages($pdo);
                foreach ($pages as $page) { ?>
                    <tr>
                        <td><?=$page['id']?></td>
                        <td><?=$page['title']?></td>
                        <td><?=$page['subtitle']?></td>
                        <td><?=$page['content']?></td>
                        <td><?=$page['img_src']?></td>
                        <td><?=$page['img_alt']?></td>
                        <td><a href="show.php?id=<?=$page['id']?>">Voir</a></td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>

<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <form action="doadd.php" method="post">
            <h2 class="section_title">Ajouter un article</h2>
            <div class="form-group">
                <label for="title">Titre de l'article :</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="subtitle">Sous-titre de l'article</label>
                <input type="text" name="subtitle" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Contenu de l'article :</label>
                <input type="text" name="content" class="form-control">
            </div>
            <div class="form-group">
                <label for="img_src">Source de l'image :</label>
                <input type="text" name="img_src" class="form-control">
            </div>
            <div class="form-group">
                <label for="img_alt">Alt de l'image :</label>
                <input type="text" name="img_alt" class="form-control">
            </div>
            <button class="btn btn-success" type="submit" name="submit">Ajouter</button>
        </form>
    </div>
</div>

<?php
    require_once "admin_footer.php";
?>


