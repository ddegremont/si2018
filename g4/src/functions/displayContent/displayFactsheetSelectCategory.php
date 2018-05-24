<?php
function displayFactsheetSelectCategory(array $data)
{
    ?>
    <option value="none"></option>
    <?php
    $categoryList = [];
    foreach($data as $item) {
        if (array_search($item["category"], $categoryList) === false) {
            array_push($categoryList, $item["category"]);
        }
    }
    foreach($categoryList as $item) {
        ?>
        <option value="<?= $item ?>"><?= $item ?></option>
        <?php
    }
}