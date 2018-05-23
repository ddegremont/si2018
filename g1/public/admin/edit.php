<form action="doedit.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <input name = "title" type="text" placeholder="title">
    <input name = "h1" type="text" placeholder="h1">
    <input name = "p" type="text" placeholder="p">
    <input name = "span-class" type="text" placeholder="span-class">
    <input name = "span-text" type="text" placeholder="span-text">
    <input name = "img-alt" type="text" placeholder="img-alt">
    <input name = "img-src" type="text" placeholder="img-src ">
    <input name = "nav-title" type="text" placeholder="nav-title">
    <button type="submit">send</button>
</form>

<p><a href="login.php">Retours vers la home</a></p>