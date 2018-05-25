<?php
require_once "../includes/init_db.php";

$sql = "SELECT
       `id`,
       `title`
    FROM
       `factsheet`
    ;";

$stmt = $db->prepare($sql);
$stmt->execute();
$tableData=  $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gestion des fiches pratiques</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/adminPanel/adminHeader.css">
        <link rel="stylesheet" href="../css/adminPanel/adminList.css">
    </head>

    <body>

        <header class="adminHeader">
            <h1 class="adminHeader_title">
                <a class="adminHeader_title_link" href="../admin.php">Admin Panel</a>
            </h1>
        </header>

        <section class="adminAddSection">
            <h2 class="adminAddSection_title">Ajouter une nouvelle fiche pratique :</h2>
            <form class="adminAddSection_form" enctype="multipart/form-data" action="doadd.php" method="post">
                <label class="adminAddSection_label" for="">Titre</label>

                <input type="text" class="adminAddSection_input" name="factsheet[title]" value="">

                <label class="adminAddSection_label" for="">Catégorie</label>

                <select type="text" class="adminAddSection_select" name="factsheet[category]" value="">
                    <option value="Hotel">Hôtel</option>
                    <option value="Bar">Bar</option>
                    <option value="Restaurant">Restaurant</option>
                </select>

                <label class="adminAddSection_label" for="">Texte</label>

                <textarea class="adminAddSection_textarea" name="factsheet[text]" id="" cols="30" rows="5"></textarea>

                <label class="adminAddSection_label" for="">Image</label>

                <div class="adminAddSection_inputFile_container">
                    <div class="adminAddSection_inputFile">
                        <input id="addFile" class="adminAddSection_inputFileButton" type="file" name="factsheet[imgfile]" value="">
                        <label class="adminAddSection_inputFilelabel" for="addFile">Choisir un fichier</label>
                    </div>
                    <span class="adminAddSection_inputFile_fileName">coucou</span>
                </div>

                <label class="adminAddSection_label" for="">Alt de l'image</label>

                <input type="text" class="adminAddSection_input" name="factsheet[alt]" value="">
        
                <label class="adminAddSection_label" for="">Note</label>

                <input type="number"  min="0" max="10" class="adminAddSection_inputNumber" name="factsheet[mark]" value="0">

                <label class="adminAddSection_label" for="">Slug</label>

<input type="text" class="adminAddSection_input" name="factsheet[slug]" value="">
                <input class="adminAddSection_submit" type="submit" value="Ajouter">
            </form>

        </section>


        <section class="adminListSection">
        <h2 class="adminListSection_title">Liste des fiches pratiques</h2>
        <table class="adminListSection_table">
        <tr class="adminListSection_row">
                <th class="adminListSection_head">id</th>
                <th class="adminListSection_head">title</th>
            </tr>
            <?php
    foreach ($tableData as $row){
?>
                <tr class="adminListSection_row">
                    <td class="adminListSection_col">
                        <?=$row['id']?>
                    </td>
                    <td class="adminListSection_col">
                        <a class="adminListSection_link" href="show.php?id=<?=$row['id']?>">
                            <?=$row['title']?>
                        </a>
                    </td>
                    <td class="adminListSection_col">
                        <a class="adminListSection_linkButton" href="edit.php?id=<?=$row['id']?>">
                            Modifier
                        </a>
                    </td>
                    <td class="adminListSection_col">
                        <a class="adminListSection_linkButton" href="delete.php?id=<?=$row['id']?>">
                            Supprimer
                        </a>
                    </td>
                </tr>
                <?php
    }
?>

        </table>
</section>
        <script>
            var fileUpload = {
                input: document.querySelector('.adminAddSection_inputFileButton'),
                show: document.querySelector('.adminAddSection_inputFile_fileName')
            }

            if (fileUpload.input.files.length === 0) {
                fileUpload.show.textContent = "Pas de fichier selectionné";
            } else {
                fileUpload.show.textContent = fileUpload.input.files[0].name;
            }
            

            fileUpload.input.addEventListener('input', function () {
                console.log(fileUpload.input.files[0]);
                fileUpload.show.textContent = fileUpload.input.files[0].name
            })
        </script>

    </body>

    </html>