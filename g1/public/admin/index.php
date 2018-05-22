<?php
require_once "admin_header.php";
require_once "../includes/functions.php";
require_once "../includes/connection.php";
?>

<section class="alert alert-primary">
<form action="doadd.php" method="post">
    <input name = "title" type="text" placeholder="title">
    <input name = "h1" type="text" placeholder="h1">
    <input name = "p" type="text" placeholder="p">
    <input name = "span-class" type="text" placeholder="span-class">
    <input name = "span-text" type="text" placeholder="span-text">
    <input name = "img-alt" type="text" placeholder="img-alt">
    <input name = "img-src" type="text" placeholder="img-src">
    <input name = "nav-title" type="text" placeholder="nav-title">
    <button type="submit">send</button>
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