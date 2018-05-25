<?php 
require_once "function.php";
require_once "../includes/connexion.php";
head("Delete", true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>delete</title>
    </head>
    <body>
        <?php
        if ($_GET['test'] == 3) {

        $sql = "SELECT 
          `id`, 
          `name`
        FROM
          `alde`
        WHERE 
          `id` = :id
        ;";
        $stmt = $bdd->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Vous vous apprêtez à supprimer <b><?=$row["id"]?></b>, êtes-vous certains de vouloir faire ça ? Il est encore temps de retourner à la liste. 😧</p>
            </div>
        </div>   
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?=$row["id"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">name</th>
                        <td><?=$row["name"]?></td>
                    </tr>
                </tbody>
            </table>       
        </div>
        <div class="col-md-12">
            <form action="../includes/dodelete.php?test=3" method="post">
                <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
                <a href="index.php" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>           
        </div>
        <?php  
        } elseif ($_GET['test'] == 1) {

            $sql = "SELECT 
              `id`, 
              `img`,
			  `titre`
            FROM 
              `kin`
            WHERE 
              `id` = :id
            ;";

            $stmt = $bdd->prepare($sql);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Vous vous apprêtez à supprimer <b><?=$row["id"]?></b>, êtes-vous certains de vouloir faire ça ? Il est encore temps de retourner à la liste. 😧</p>
            </div>
        </div>             
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?=$row["id"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">name</th>
                        <td><img src="<?=$row["img"]?>" style="max-width:100%;" alt="oui"></td>
                    </tr>
                    <tr>
                        <th scope="row">Titre</th>
                        <td><?=$row["titre"]?></td>
                    </tr>
                </tbody>
            </table>       
        </div>
        <div class="col-md-12">
            <form action="../includes/dodelete.php?test=1" method="post">
                <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
                <a href="index.php" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>           
        </div>
        <?php 
        } elseif ($_GET['test'] == 2) {

            $sql = "SELECT 
              `id`, 
              `img`,
              `url`
            FROM 
              `moman`
            WHERE 
              `id` = :id
            ;";

            $stmt = $bdd->prepare($sql);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Vous vous apprêtez à supprimer <b><?=$row["id"]?></b>, êtes-vous certains de vouloir faire ça ? Il est encore temps de retourner à la liste. 😧</p>
            </div>
        </div>  
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?=$row["id"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">name</th>
                        <td><img src="<?=$row["img"]?>" style="max-width:100%;" alt="oui"></td>
                    </tr>
                    <tr>
                        <th scope="row">name</th>
                        <td><?=$row["url"]?></td>
                    </tr>
                </tbody>
            </table>       
        </div>
        <div class="col-md-12">
            <form action="../includes/dodelete.php?test=2" method="post">
                <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
                <a href="index.php" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>           
        </div>
        <?php 
        } elseif ($_GET['test'] == 0) {

            $sql = "SELECT 
              `id`, 
              `text`
            FROM 
              `annonce`
            WHERE 
              `id` = :id
            ;";

            $stmt = $bdd->prepare($sql);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Vous vous apprêtez à supprimer <b><?=$row["id"]?></b>, êtes-vous certains de vouloir faire ça ? Il est encore temps de retourner à la liste. 😧</p>
            </div>
        </div>   
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?=$row["id"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">Text</th>
                        <td><?=$row["text"]?></td>
                    </tr>
                </tbody>
            </table>       
        </div>
        <div class="col-md-12">
            <form action="../includes/dodelete.php?test=0" method="post">
                <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
                <a href="index.php" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>           
        </div>
        <?php 
        } elseif ($_GET['test'] == 4) {

            $sql = "SELECT 
			  `id`, 
			  `img`, 
			  `title`, 
			  `location`, 
			  `text`, 
			  `iframe`, 
			  `qr`
			FROM
			  `top100`
			WHERE 
			  `id` = :id
			;";

            $stmt = $bdd->prepare($sql);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Vous vous apprêtez à supprimer <b><?=$row["id"]?></b>, êtes-vous certains de vouloir faire ça ? Il est encore temps de retourner à la liste. 😧</p>
            </div>
        </div>   
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?=$row["id"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">img</th>
                        <td><img src="<?=$row["img"]?>" alt="aeroport"></td>
                    </tr>
                    <tr>
                        <th scope="row">title</th>
                        <td><?=$row["title"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">location</th>
                        <td><?=$row["location"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">text</th>
                        <td><?=$row["text"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">iframe</th>
                        <td><iframe src="<?=$row["iframe"]?>" frameborder="0" style="border:0" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                        <th scope="row">qr</th>
                        <td><img src="<?=$row["qr"]?>" style="max-width:300px;" alt="aeroport"></td>
                    </tr>
                </tbody>
            </table>       
        </div>
        <div class="col-md-12">
            <form action="../includes/dodelete.php?test=4" method="post">
                <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
                <a href="index.php" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>           
        </div>
        <?php 
        }
        if ($row === false) {
            header("Location: ../error404.php");
            exit;
        } ?>
    </body>
</html>


<?php footer();?>