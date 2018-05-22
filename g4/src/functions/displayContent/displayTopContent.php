<?php
function displayTopContent(array $data)
{
    ?>
    <ul class="top_list">
    <?php
    foreach ($data as $item) {
        ?>
        <li class="top_list_item">
            <p class="top_list_item_rank">rank: <?= $item["rank"] ?></p>
            <h3 class="top_list_item_title">title: <?= $item["title"] ?></h3>
            <p class="top_list_item_subtitle">subtitle: <?= $item["subtitle"] ?></p>
        </li>
        <?php
    }
    ?>
    </ul>
    <?php
}