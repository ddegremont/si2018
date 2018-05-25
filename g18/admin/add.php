<?php 
require_once "function.php";
require_once "../includes/connexion.php";
head("Add", true);
?>
        <?php if ($_GET['test'] == 0) { ?>
        <div class="col-md-12">
            <form action="../includes/doadd.php?test=0" method="post">
                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" class="form-control" id="text" name="text" aria-describedby="nameHelp" placeholder="On est la ">
                </div>
                <input type='submit' class="btn btn-success" value='Save' name='upload'>
            </form>
        </div>
        <?php } elseif ($_GET['test'] == 1) { ?>
        <div class="col-md-12">
            <form action="../includes/doadd.php?test=1" method="post">
                <div class="form-group">
                    <label for="img">Url Img:</label>
                    <input type="text" class="form-control" id="img" name="img" aria-describedby="nameHelp" placeholder="https://i.ytimg.com/vi/MpmfEtoSCe0/hqdefault.jpg">
                </div>
                <div class="form-group">
                    <label for="titre">Titre:</label>
                    <input type="text" class="form-control" id="titre" name="titre" aria-describedby="nameHelp" placeholder="On est la">
                </div>
                <input type='submit' class="btn btn-success" value='Save' name='upload'>
            </form>
        </div>
        <?php } elseif ($_GET['test'] == 2) { ?>
        <div class="col-md-12">
            <form action="../includes/doadd.php?test=2" method="post">
                <div class="form-group">
                    <label for="img">img</label>
                    <input type="text" class="form-control" id="img" name="img" aria-describedby="nameHelp" placeholder="https://i.ytimg.com/vi/MpmfEtoSCe0/hqdefault.jpg">
                </div>
                <div class="form-group">
                    <label for="url">site</label>
                    <input type="text" class="form-control" id="url" name="url" aria-describedby="nameHelp" placeholder="https://alderiate.com/">
                </div>
                <input type='submit' class="btn btn-success" value='Save' name='upload'>
            </form>
        </div>
        <?php } elseif ($_GET['test'] == 3) { ?>
        <div class="col-md-12">
            <form action="../includes/doadd.php?test=3" method="post">
                <div class="form-group">
                    <label for="name">Entrer @TwitterName</label>
                    <input type="text"  class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Gotaga">
                </div>
                <input type='submit' class="btn btn-success" value='Save' name='upload'>
            </form>
        </div>
        <?php } elseif ($_GET['test'] == 4) { ?>
        <div class="col-md-12">
            <form action="../includes/doadd.php?test=4" method="post">
                <div class="form-group">
                    <label for="img">img url :</label>
                    <input type="text"  class="form-control" id="img" name="img" aria-describedby="nameHelp" placeholder="https://i.ytimg.com/vi/MpmfEtoSCe0/hqdefault.jpg">
                </div>
                <div class="form-group">
                    <label for="title">hotel name :</label>
                    <input type="text"  class="form-control" id="title" name="title" aria-describedby="nameHelp" placeholder="le nom">
                </div>
                <div class="form-group">
                    <label for="location">adresse :</label>
                    <input type="text"  class="form-control" id="location" name="location" aria-describedby="nameHelp" placeholder="72 Rue Marceau">
                </div>
                <div class="form-group">
                    <label for="text">hotel description :</label>
                    <input type="text"  class="form-control" id="text" name="text" aria-describedby="nameHelp" placeholder="une description ">
                </div>
                <div class="form-group">
                    <label for="iframe">balise iframe google map :</label>
                    <input type="text"  class="form-control" id="iframe" name="iframe" aria-describedby="nameHelp" placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26988">
                </div>
                <div class="form-group">
                    <label for="qr">qr url :</label>
                    <input type="text"  class="form-control" id="qr" name="qr" aria-describedby="nameHelp" placeholder="https://i.ytimg.com/vi/MpmfEtoSCe0/hqdefault.jpg">
                </div>
                <input type='submit' class="btn btn-success" value='Save' name='upload'>
            </form>
        </div>
        <?php } ?> 
    </body>
</html>
<?php footer();?>