<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $titre ?> </title>
    <link rel="stylesheet" href="<?= "css/" . $css . ".css" ?>">
    <?php if(isset($pageStyle)):?>

    <link rel="stylesheet" href="css/<?= $pageStyle ?>">

    <?php endif;?>
</head>

<body class="<?= $page ?>">
    <?php
    include "parts/haut.php";
    echo "<main>" . $content . "</main>";
    include "parts/bas.php";
    ?>
</body>

</html>