<?php
function displayTopContent(array $data)
{
    ?>
    <ul class="top_list">
    <?php
    foreach ($data as $item) {
        ?>
        <li class="top_list_item">
            <p class="top_list_item_rank">Rank: <?= $item["rank"] ?></p>
            <div class="top_list_item_img">
                <img class="Test" img src="" alt="">
            </div>
            <p class="top_list_item_subtitle">Subtitle: <?= $item["subtitle"] ?></p>
            <h3 class="top_list_item_title">Title: <?= $item["title"] ?></h3>
        </li>
        <?php
    }
    ?>
    </ul>
    <?php
}