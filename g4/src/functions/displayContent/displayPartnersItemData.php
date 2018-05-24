<?php
function displayPartnersItemData(array $data)
{
    ?>
    <article class="partners_item">
        <form action="src/actions/footer_doUpdate.php" method="POST">
            <input type="text" value="<?= $data["id"] ?>" name="id" style="display:none">
            <label for="name">name</label>
            <input type="text" class="partners_item_name" value="<?= $data["name"] ?>" name="name" title="<?= $data["name"] ?>">
            <label for="logoSrc">logoSrc</label>
            <input type="text" class="partners_item_logoSrc" value="<?= $data["logoSrc"] ?>" name="logoSrc" title="<?= $data["logoSrc"] ?>">
            <label for="logoAlt">logoAlt</label>
            <input type="text" class="partners_item_logoAlt" value="<?= $data["logoAlt"] ?>" name="logoAlt" title="<?= $data["logoAlt"] ?>">
            <input type="submit" value="Update">
        </form>
        <form action="src/actions/footer_doDelete.php" method="POST">
            <input value="<?= $data["id"] ?>" name="id" title="id" style="display:none">
            <input type="submit" value="Delete">
        </form>
    </article>
    <?php
}