<?php
session_start();

$lien = htmlspecialchars($_POST["lien"]);
$lien = str_replace(' ', '', $lien);

$commentaire = htmlspecialchars($_POST["commentaire"]);
$css = $_POST["css"];

$newLine = "<tr><td><a href='$lien'>$lien</a></td><td>$commentaire</td></tr>";

$f = fopen("liens.html", "c+");
$text = fread($f, filesize("liens.html"));

if (!str_contains($text, $lien)) {
    fwrite($f, $newLine);
    $_SESSION["addedLink"] = "Votre lien a bien été ajouté";
} else {
    $_SESSION["badLink"] = "Le lien existe déjà, vous ne pouvez pas l'ajouter à nouveau !";
}

header("Location: index.php?page=tableau&css=" . $css);
