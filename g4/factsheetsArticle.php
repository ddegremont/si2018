<?php
include "src/functions/functions.php";
$connection = connect();
$data = getFactsheetArticleData($connection, $_GET["id"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            display: block;
        }
        .article_form {
            display: none;
        }
    </style>
</head>
<body>
<?php displayFactsheetArticleDetailContent($data[0]); ?>
<?php displayFactsheetArticleUpdateContent($data[0]); ?>
<script type="text/javascript" src="src/js/factsheetsArticle.js"></script>
</body>
</html>