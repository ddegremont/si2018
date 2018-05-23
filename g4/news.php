<?php
include "src/functions/functions.php";
$connection = connect();
$data = getNewsData($connection);
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
        article {
            background: #EEE;
            border: 1px solid red;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <h1>News</h1>
    <section class="news_filter">
        <form>
            <h2 class="news_filter_title">Filtres:</h2>
            <label for="company">Company name</label>
            <select name="company" title="company">
                <?php displayNewsSelectCompany($data) ?>
            </select>
            <input type="submit">
        </form>
    </section>
    <section class="news_articles">
        <?php displayNewsContent($data) ?>
    </section>
    <script type="text/javascript" src="src/js/news.js"></script>
</body>
</html>