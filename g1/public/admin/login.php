<?php
require_once "admin_header.php";
require_once "../includes/functions.php";
require_once "../includes/connection.php";
?>

<section class="alert alert-primary">
<form action="doadd.php" method="post">
    <input name = "title" type="text" placeholder="title">
    <input name = "subtitle" type="text" placeholder="subtitle">
    <input name = "content" type="text" placeholder="content">
    <input name = "img_src" type="text" placeholder="img_src">
    <input name = "img_alt" type="text" placeholder="img_alt">
    <button type="submit">Ajouter</button>
</form>

<?php
    $pages = getPages($pdo);
foreach ($pages as $page) { ?>
    <li><a href="show.php?id=<?=$page['id']?>"> <?= $page['id'] ?>  <?= $page['title'] ?></a></li>
<?php } ?>
</section>

<?php
    require_once "admin_footer.php";
?>


