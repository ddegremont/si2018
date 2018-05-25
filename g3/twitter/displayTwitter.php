<?php

require_once "../db.php";


$sql = "SELECT
          `id`,
          `name`,
          `link`
        FROM
          `twitter`
    ;";

$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach ($data as $item) {
    ?>
    <a data-width="300"
  data-height="300" class="twitter-timeline" href="<?= $item["link"] ?>?ref_src=twsrc%5Etfw">Tweets by <?php $item["name"] ?></a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <?php
}
