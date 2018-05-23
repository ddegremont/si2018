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
    <h2>Category: <span class="category">cat1</span></h2>
    <button class="category_prevbtn">previous category</button>
    <button class="category_nextbtn">next category</button>
    <section class="imagebox" style="display: none">
        <h3 class="imagebox_title"></h3>
        <h4 class="imagebox_subtitle"></h4>
        <img class="imagebox_image" src="" alt="">
    </section>
</body>
<script type="text/javascript" src="src/js/ajax/getImage/getImage.js"></script>
</html>