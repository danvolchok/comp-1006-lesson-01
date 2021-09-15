<?php
    require_once "./src/PageData.php";

    $pgData = new PageData("My First App", "Holy Cow, Batman!");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $pgData->getTitle() ?>
        </title>
    </head> 

    <body>
        <h1><?= $pgData->getTitle() ?></h1>
        <p><?= $pgData->getContent() ?></p>
    </body>
</html>
