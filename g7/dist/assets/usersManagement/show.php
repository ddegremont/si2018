<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 23/05/2018
 * Time: 01:03
 */

require_once "../includes/connection.php";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Management</title>
</head>
<body>
<?php
$reqSql = 'SELECT
`id`,`username`,`email`,`permission`
FROM
`users`';
$req = $pdo->prepare($reqSql);
$req->execute();

$management=$req->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Gestion des utilisateurs</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
    </tr>

    <?php foreach ($management as $themanagement): ?>
        <tr>
            <td><?=$themanagement['id']?></td>
            <td><?=$themanagement['username']?></td>
            <td><?=$themanagement['email']?></td>
            <td><?=$themanagement['permission']?></td>
            <td><a href="permission.php?id=<?= $themanagement['id']?>">Permission</a>
                <a href="delete.php?id=<?= $themanagement['id']?>">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>


</table>
</body>
</html>