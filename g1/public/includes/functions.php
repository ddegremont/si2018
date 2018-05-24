<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/02/2018
 * Time: 16:54
 */
/**
 * @param string $slug
 * @param string $navTitle
 * @return void
 */
function addActive(string $slug, string $navTitle, string $currentPage): void
{
    $activeClass = '';
    if($slug === $currentPage){
        $activeClass = ' class="active"';
    }
?>
    <li<?=$activeClass?>>
        <a href="<?=sprintf("%s%s=%s", APP_URL_STRUCT, APP_PAGE_PARAM, $slug)?>"><?=$navTitle?></a>
    </li>
<?php
}

/**
 * @param array $page
 *
 * @return void
 */
function displayPage(array $page): void
{
?>
    <section class="preview">
        <h2 class="preview__title"><?= $page['title'] ?></h2>
        <div class="preview__blueline"></div>
        <p class="preview__paragraph"><?= $page['content'] ?></p>
        <div class="preview__textArrow">
            <span class="preview__textArrow__text">Lire davantage</span>
            <img class="preview__textArrow__arrow" src="assets/img/chevron-right-grey.svg">
        </div>
    </section>
<?php
}

/**
 * @param PDO $pdo
 * @param string $slug

 * @return null|array returns array if data found, null if not
 */
function getPages(PDO $pdo): ?array
{
    $sql = "SELECT
              `id`,
              `title`,
              `subtitle`, 
              `content`,
              `img_alt`, 
              `img_src`,
              `slug` 
            FROM 
              `articles` 
            ORDER BY id ASC
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    //pdoErrorHandler($stmt);
    if (false === $rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        return null;
    }

    return $rows;
}

function getPage(PDO $pdo, string $slug): ?array
{
    $sql = "SELECT
              `id`,
              `title`,
              `subtitle`, 
              `content`,
              `img_alt`, 
              `img_src`,
              `slug` 
            FROM 
              `articles`  
            WHERE 
              `slug` = :slug
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':slug',$slug, PDO::PARAM_STR);
//    $stmt->execute(['slug' => $slug]);// crap version
    $stmt->execute();
    pdoErrorHandler($stmt);
    if (false === $row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        return null;
    }

    return $row;
}

/**
 * @param PDO $pdo
 *
 * @return array
 */

function slugify($slug)
{
    // replace non letter or digits by -
    $slug = preg_replace('~[^\pL\d]+~u', '-', $slug);

    // transliterate
    $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);

    // remove unwanted characters
    $slug = preg_replace('~[^-\w]+~', '', $slug);

    // trim
    $slug = trim($slug, '-');

    // remove duplicate -
    $slug = preg_replace('~-+~', '-', $slug);

    // lowercase
    $slug = strtolower($slug);

    if (empty($slug)) {
        return 'n-a';
    }

    return $slug;
}

/**
 * @param PDOStatement $stmt
 *
 * @return void
 */
function pdoErrorHandler(PDOStatement $stmt): void
{
    if ($stmt->errorCode() !== '00000') {
        throw new PDOException($stmt->errorInfo()[2]);
    }
}