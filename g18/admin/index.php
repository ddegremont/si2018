<?php
require_once "function.php";
require_once "../includes/connexion.php";
head("Acceuil", false);
$sql = "SELECT 
  `id`, 
  `text`
FROM
  annonce
;";
$stmt = $bdd->prepare($sql);
$stmt->execute();
errorHandler($stmt);
$sql2 = "SELECT 
  `id`, 
  `img`,
  `titre`
FROM
  kin
;";
$stmt2 = $bdd->prepare($sql2);
$stmt2->execute();
errorHandler($stmt2);

$sql3 = "SELECT 
  `id`, 
  `img`,
  `url`
FROM
  moman
;";
$stmt3 = $bdd->prepare($sql3);
$stmt3->execute();
errorHandler($stmt3);

$sql4 = "SELECT 
  `id`, 
  `name`
FROM
  alde
;";
$stmt4 = $bdd->prepare($sql4);
$stmt4->execute();
errorHandler($stmt4);

$sql5 = "SELECT 
  `id`, 
  `img`, 
  `title`, 
  `location`, 
  `text`, 
  `iframe`, 
  `qr`
FROM
  top100
;";
$stmt5 = $bdd->prepare($sql5);
$stmt5->execute();
errorHandler($stmt5);
?>



<body>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Test</th>
                    <th scope="col"><a href="add.php?test=0" class="btn btn-success">Add</a></th>
                </tr>
            </thead>
            <tbody>
                <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <th scope="row"><?=$row["id"]?></th>
                    <td><?=$row["text"]?></td>
                    <td>
                        <a href="edit.php?id=<?=$row["id"]?>&test=0" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?=$row["id"]?>&test=0" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">img</th>
                    <th scope="col">titre</th>
                    <th scope="col"><a href="add.php?test=1" class="btn btn-success">Add</a></th>
                </tr>
            </thead>
            <tbody>
                <?php while(false !== $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <th scope="row"><?=$row2["id"]?></th>
                    <td><img src="<?=$row2["img"]?>" style="max-width:100%;" alt="oui"></td>
                    <td><?=$row2["titre"]?></td>
                    <td>
                        <a href="edit.php?id=<?=$row2["id"]?>&test=1" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?=$row2["id"]?>&test=1" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">img</th>
                    <th scope="col">url</th>
                    <th scope="col"><a href="add.php?test=2" class="btn btn-success">Add</a></th>
                </tr>
            </thead>
            <tbody>
                <?php while(false !== $row3 = $stmt3->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <th scope="row"><?=$row3["id"]?></th>
                    <td><img src="<?=$row3["img"]?>" style="max-width:100%;" alt="oui"></td>
                    <td><?=$row3["url"]?></td>
                    <td>
                        <a href="edit.php?id=<?=$row3["id"]?>&test=2" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?=$row3["id"]?>&test=2" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col"><a href="add.php?test=3" class="btn btn-success">Add</a></th>
                </tr>
            </thead>
            <tbody>
                <?php while(false !== $row4 = $stmt4->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <th scope="row"><?=$row4["id"]?></th>
                    <td><?=$row4["name"]?></td>
                    <td>
                        <a href="edit.php?id=<?=$row4["id"]?>&test=3" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?=$row4["id"]?>&test=3" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">img</th>
                    <th scope="col">title</th>
                    <th scope="col">location</th>
                    <th scope="col">text</th>
                    <th scope="col">iframe</th>
                    <th scope="col">qr</th>
                    <th scope="col"><a href="add.php?test=4" class="btn btn-success">Add</a></th>
                </tr>
            </thead>
            <tbody>
                <?php while(false !== $row5 = $stmt5->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <th scope="row"><?=$row5["id"]?></th>
                    <td><img src="<?=$row5["img"]?>" style="max-width:300px;" alt="oui"></td>
                    <td><?=$row5["title"]?></td>
                    <td><?=$row5["location"]?></td>
                    <td><?=$row5["text"]?></td>
                    <td><iframe src="<?=$row5["iframe"]?>" frameborder="0" style="border:0" allowfullscreen></iframe></td>
                    <td><img src="<?=$row5["qr"]?>" style="max-width:300px;" alt="oui"></td>
                    <td>
                        <a href="edit.php?id=<?=$row5["id"]?>&test=4" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?=$row5["id"]?>&test=4" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</body>


<?php footer();?>