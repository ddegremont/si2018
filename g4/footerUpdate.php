<?php
include "src/functions/functions.php";
$connection = connect();
$data = getPartnersData($connection);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="src/components/style/reset.css">
    <link rel="stylesheet" href="src/components/style/fichepratique.css">
    <style>
        input {
            display: block;
        }
        .partners_item {
            background: lightcoral;
            border: 1px solid lightblue;
            margin-bottom: 30px;
        }

        .create_partner {
            background: lightsalmon;
            border: 1px solid lightsteelblue;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <h1>Update partners</h1>
    <form class="create_partner" action="src/actions/footer_doCreate.php" method="POST">
        <label for="name">name</label>
        <input type="text" class="partners_item_name" name="name" title="name">
        <label for="logoSrc">logoSrc</label>
        <input type="text" class="partners_item_logoSrc" name="logoSrc" title="logoSrc">
        <label for="logoAlt">logoAlt</label>
        <input type="text" class="partners_item_logoAlt" name="logoAlt" title="logoAlt">
        <input type="submit">
    </form>
    <?php displayPartnersData($data) ?>
    <?php include "src/includes/footer.php"; ?>
</body>
</html>