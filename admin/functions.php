<?php

function handlePDOError(PDOStatement $stmt): void
{
    if ($stmt->errorCode() != '00000') {
        throw new \Exception($stmt->errorInfo()[1]);
    }
}

function getArticleData($pdo)
{
    $sql = "SELECT 
    `title`,
    `subtitle`,
    `content`,
    `twitter_link`,
    `details`,
    `deadline`,
    `cover_img`
  FROM
   `articles`
  WHERE
  `id` = :id 
  ;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    handlePDOError($stmt);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row === false) {
        header("Location : admin.php?error=noidtoedit");
        exit;
    }
}
function getPatnersData($pdo)
{
    $sql = "SELECT
          `logo_src`,
          `logo_alt`
        FROM
          `partners`
        ORDER BY 
        `id`
        DESC
;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    handlePDOError($stmt);

    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
            <img class="Partners__logo" src="img/<?=$row['logo_src']?>" alt="<?=$row['logo_alt']?>">
        <?php
    endwhile;
}

function getGoodDeals($pdo)
{
    $sql = "SELECT
          `id`,
          `title`,
          `content`,
          `cover_img`
        FROM
          `articles`
        ORDER BY 
        `id`
;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    handlePDOError($stmt);

    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
        <div class="Plans__container">
            <div class="Plans__card">
                <img class="Plans__img" src="img/<?=$row['cover_img']?>" alt="Thailande image">
                <h3 class="Plans__recent">Récent</h3>
                <h4 class="Plans__title"><?=$row['title']?></h4>
                <p class="Plans__text"><?=$row['content']?></p>
                <div class="Plans__articleLinkContainer">
                    <a class="Plans__articleLink" href="bons-plans-aériens/plug.php">Voir l'article <span class="Container__arrow">▶</span></a>
                </div>
            </div>
        </div>
        <?php
    endwhile;
}
