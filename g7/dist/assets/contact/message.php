<?php
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
`id`,`who`,`company`,`name`,`surname`,`email`,`phone`,`message`
FROM
`contact`';
$req = $pdo->prepare($reqSql);
$req->execute();

$contact=$req->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Messages des utilisateurs</h1>


    <?php foreach ($contact as $thecontact): ?>
        <ul>
          <li><?=$thecontact['who']?></li>
          <li><?=$thecontact['company']?></li>
          <li><?=$thecontact['name']?></li>
          <li><?=$thecontact['surname']?></li>
          <li><?=$thecontact['email']?></li>
          <li><?=$thecontact['phone']?></li>
          <li><?=$thecontact['message']?></li>
        </ul>

    <?php endforeach;?>

</body>
</html>