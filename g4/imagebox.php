<?php
include "src/functions/functions.php";
$connection = connect();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Image Box</h1>
    <button id="imagebox_generator">Click here to get a random image!</button>
    <section class="imagebox" style="display: none">
        <h2 class="imagebox_title"></h2>
        <h3 class="imagebox_subtitle"></h3>
        <img class="imagebox_image" src="" alt="">
    </section>
</body>
<script type="text/javascript" src="src/js/ajax/getImage/getImage.js"></script>
</html>