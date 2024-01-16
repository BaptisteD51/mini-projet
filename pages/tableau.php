<?php
$titre = "Liens utiles"
?>

<?php ob_start() ?>

<h1> <?= $titre ?> </h1>
<p> Les liens : </p>
<table>
    <?php include "liens.html" ?>
</table>

<div>
    <p>Soumettez vos liens !!! </p>
    <form action="addlink.php" method="post">

        <label for="lien">Lien :</label>
        <input type="text" name="lien" placeholder="https://monsite.bidule" id="lien">

        <label for="commentaire">Commentaire :</label>
        <input type="text" name="commentaire" id="commentaire">

        <input type="submit" value="Envoyer">
        <input type="hidden" value="<?= $css; ?>" name="css">

        <?php if (isset($_SESSION["addedLink"])) {
            echo '<span class=\'addedLink\'>';
            echo $_SESSION["addedLink"];
            echo '</span>';
        } ?>

        <?php if (isset($_SESSION["badLink"])) {
            echo '<span class=\'badLink\'>';
            echo $_SESSION["badLink"];
            echo '</span>';
        } ?>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php
unset($_SESSION["addedLink"]);
unset($_SESSION["badLink"]);
?>