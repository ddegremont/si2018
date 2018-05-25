<?php
define('APP_ROOT_DIR', dirname(__DIR__)."/");
require_once APP_ROOT_DIR."public/includes/connection.php";
require_once APP_ROOT_DIR."public/includes/functions.php";
include 'includes/header.php';

$sql = "SELECT
`id`,
`title`,
`img_src`,
`img_alt`
FROM
`articles`
ORDER BY id DESC 
LIMIT 4

;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<body>
<header class="headerTops">
    <nav class="header__nav">

        <div class="header__nav__logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="" class="header__nav__logo__img"></a>
        </div>

        <div class="header__nav__list">
            <div><a href="index.php" class="header__nav__list__item">Accueil</a></div>
            <div class="header__nav__list__item">Catégorie</div>
            <div class="header__nav__list__item">Qui sommes-nous ?</div>
            <div ><a href="form.php" class="header__nav__list__item">Contact</a></div>
        </div>

        <div class="header__nav__burger">
            <div class="header__nav__burger__item"></div>
            <div class="header__nav__burger__item"></div>
            <div class="header__nav__burger__item"></div>
        </div>
    </nav>
    <?php include 'includes/burger.php';?>
</header>

    <?php
    define('APP_PAGE_PARAM', 'p');
    $currentPage = $_GET[APP_PAGE_PARAM];
    $page = getPage($pdo, $currentPage);

    displayPage($page);

    ?>

    <section class="oneWorld">
        <h2 class="oneWorld__title">Suggestions</h2>
        <div class="oneWorld__blueline"></div>
        <div class="oneWorld__container">
        <?php foreach ($rows as $row){?>
            <div class="oneWorld__container__item">
                <img class="oneWorld__container__item__img" src="./assets/img/<?= $row['img_src']?>" alt="<?= $row['img_alt']?>">
                <div class="oneWorld__container__item__box">
                    <?= $row['title']?>
                </div>
            </div>
        <?php } ?>
        </div>

    </section>



<?php
include 'includes/footer.php';
?>