<div>
    <p>Voulez-vous vraiment supprimer cet article ?</p>

    <form action="dodelete.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="Oui">
    </form>

    <p><a href="index.php">Retour vers la home</a></p>
</div>
