<?php
function displayNewsSelectCompany(array $data)
{
    ?>
    <option value="none">none</option>
    <?php
    $companyList = [];
    foreach($data as $item) {
        if (array_search($item["company"], $companyList) === false) {
            array_push($companyList, $item["company"]);
        }
    }
    foreach($companyList as $item) {
        ?>
        <option value="<?= $item ?>"><?= $item ?></option>
        <?php
    }
}